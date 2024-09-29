<?php

namespace App\Http\Controllers;

use App\Models\Book;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query', 'programming');
        $books = $this->fetchBooksFromGoogleAPI($query);

        return view('books.index', compact('books'));
    }

    private function fetchBooksFromGoogleAPI($query)
    {
        $client = new Client([
            'verify' => base_path('public/cacert.pem'), // Path to the SSL certificate bundle
        ]);

        $response = $client->get('https://www.googleapis.com/books/v1/volumes', [
            'query' => [
                'q' => $query,
                'maxResults' => 10,
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        $books = collect($data['items'])->map(function ($item) {
            $volumeInfo = $item['volumeInfo'] ?? [];
            $bookData = [
                'google_books_id' => $item['id'] ?? null,
                'title' => $volumeInfo['title'] ?? null,
                'subtitle' => $volumeInfo['subtitle'] ?? null,
                'authors' => json_encode($volumeInfo['authors'] ?? []),
                'description' => $volumeInfo['description'] ?? null,
                'page_count' => $volumeInfo['pageCount'] ?? null,
                'categories' => json_encode($volumeInfo['categories'] ?? []),
                'average_rating' => $volumeInfo['averageRating'] ?? null,
                'ratings_count' => $volumeInfo['ratingsCount'] ?? null,
                'thumbnail' => $volumeInfo['imageLinks']['thumbnail'] ?? null,
                'small_thumbnail' => $volumeInfo['imageLinks']['smallThumbnail'] ?? null,
                'published_date' => $volumeInfo['publishedDate'] ?? null,
                'publisher' => $volumeInfo['publisher'] ?? null,
                'language' => $volumeInfo['language'] ?? null,
                'preview_link' => $volumeInfo['previewLink'] ?? null,
                'info_link' => $volumeInfo['infoLink'] ?? null,
            ];

            Book::updateOrCreate(
                ['google_books_id' => $bookData['google_books_id']],
                $bookData
            );

            return $bookData;
        });

        return $books;
    }
}
