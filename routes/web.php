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

Route::get('/home', 'PostController@list')->name('list');

Route::get('/posts','PostController@posts')->name('post');

Route::get('/detail/{postid}','PostController@detail')->name('detail');

Route::get('/create','PostController@create')->name('create');
