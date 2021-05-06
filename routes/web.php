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

// Route::get('/', function () {
//     return redirect('/login');
// });

Auth::routes();

Route::get('/', 'PostController@index')->name('posts');
Route::get('/post-details{id}', 'PostController@postDetails')->name('posts-details');

Route::get('post-create', 'PostController@create')->name('post-create')->middleware('auth');
Route::post('create', 'PostController@store')->name('create')->middleware('auth');

Route::get('/post-edit{id}', 'PostController@edit')->name('edit')->middleware('auth');
Route::post('update', 'PostController@update')->name('update-post')->middleware('auth');

Route::get('/delete{id}', 'PostController@delete')->name('delete-post')->middleware('auth');

Route::get('/home', 'PostController@index')->name('posts');
