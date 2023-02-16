<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('authors', AuthorController::class);

Route::resource('categories', CategoryController::class);

Route::resource('posts', PostController::class);

Route::get('/posts-by-category/{id}','\App\Http\Controllers\PostController@postsByCategory')->name('posts-by-category');

Route::get('/posts-by-author/{id}','\App\Http\Controllers\PostController@postsByAuthor')->name('posts-by-author');

Route::post('/search-posts','\App\Http\Controllers\PostController@searchPosts')->name('search-posts');
