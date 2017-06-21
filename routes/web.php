

<?php

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
//static pages  route's
Route::get('/', 'StaticPagesController@getindex');
Route::get('/about', 'StaticPagesController@getAbout'); 
Route::get('/contact', 'StaticPagesController@getContact');

//single book route
Route::get('booksBy/{genre}', ['as' => 'book.single', 'uses' => 'BooksBy@getSingle'])->where('genre', '[\w\-\_ ]+');

//book  resource route
Route::resource('book', 'BookController');

//author resource route
Route::resource('author', 'AuthorController');

Route::get('search_books', 'BookController@search_books');

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
