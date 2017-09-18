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
// Index
Route::get('/', 'PostsController@index');
//Show Create Post Form
Route::get('/posts/create', 'PostsController@create');
//Create Post
Route::post('/posts', 'PostsController@store');
//Show Post
Route::get('/posts/{post}', 'PostsController@show');
//

Route::post('posts/{post}/comments', 'CommentsController@store');

Auth::routes();

Route::get('/home', 'PostsController@index')->name('home');
