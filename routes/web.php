<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home');
});

Route::get('/employee-benefits', function () {
    return view('employee-benefits');
});

Route::get('/employer-benefits', function () {
    return view('employer-benefits');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/join-us', function () {
    return view('join-us');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/FAQ', function () {
    return view('FAQ');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-content', function () {
    return view('blog-content');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/request-a-demo', function () {
    return view('request-a-demo');
});

Route::get('/book', [BookController::class, 'index'])->name('books.index');