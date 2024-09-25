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
            return [
                'title' => $item['volumeInfo']['title'],
                'author' => collect($item['volumeInfo']['authors'])->implode(', '),
                'description' => $item['volumeInfo']['description'],
                'thumbnail' => $item['volumeInfo']['imageLinks']['thumbnail'] ?? null,
                'published_date' => $item['volumeInfo']['publishedDate'],
            ];
        });

        Book::insert($books->toArray());

        return $books;
    }
}