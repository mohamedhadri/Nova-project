<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'google_books_id',
        'title',
        'subtitle',
        'authors',
        'description',
        'page_count',
        'categories',
        'average_rating',
        'ratings_count',
        'thumbnail',
        'small_thumbnail',
        'published_date',
        'publisher',
        'language',
        'preview_link',
        'info_link'
    ];
    protected $casts = [
        'authors' => 'array',
        'categories' => 'array',
        'average_rating' => 'float',
        'ratings_count' => 'integer',
        'page_count' => 'integer',
    ];
    public static function insert(array $toArray)
    {
    }
}
