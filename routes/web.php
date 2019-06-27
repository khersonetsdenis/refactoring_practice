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

Route::get('/', function () {
    return view('welcome');
});

Route::get('books', 'BookController@index');
Route::get('book', 'BookController@create');
Route::post('book', 'BookController@store')->name('create_book');
Route::get('/book/{id}', 'BookController@show');
Route::delete('/book/{id}', 'BookController@destroy');