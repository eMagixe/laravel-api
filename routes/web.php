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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Public API for Posts
Route::get('/posts', 'PostController@index');
Route::get('/post/{id}', 'PostController@show');
Route::post('/create/post', 'PostController@store');
Route::post('/update/{id}', 'PostController@update');
Route::delete('/post/{id}', 'PostController@destroy');
