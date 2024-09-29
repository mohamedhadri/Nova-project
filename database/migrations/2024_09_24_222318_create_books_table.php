<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();  // Assuming you want a primary key
            $table->string('google_books_id')->unique(); // `unique()` since you're using `updateOrCreate`
            $table->string('title')->nullable();  // Add title column
            $table->string('subtitle')->nullable();
            $table->text('authors')->nullable();
            $table->text('description')->nullable();  // Add description column
            $table->integer('page_count')->nullable();
            $table->text('categories')->nullable();
            $table->float('average_rating')->nullable();
            $table->integer('ratings_count')->nullable();
            $table->string('thumbnail')->nullable();  // Add thumbnail
            $table->string('small_thumbnail')->nullable();
            $table->date('published_date')->nullable();  // Add published date
            $table->string('publisher')->nullable();
            $table->string('language')->nullable();
            $table->string('preview_link')->nullable();
            $table->string('info_link')->nullable();
            $table->timestamps();  // Adds created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
