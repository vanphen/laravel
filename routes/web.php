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

Route::get('/list', 'PostController@list')->name('list');

Route::get('/detail/{postid}', 'PostController@detail')->name('detail');

Route::get('/create', 'PostController@create');

Route::post('/create', 'PostController@storeWithFormRequest')->name('create');

Route::get('/login', function () {
   return view('admin.login');
});
