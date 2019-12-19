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

use http\Client\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'PostController@list')->name('home');

Route::get('posts/detail/{postid}', 'PostController@detail')->name('detail');;

<<<<<<< HEAD
Route::get('posts/create', 'PostController@create')->name('create')->middleware('check');

Route::post('posts/create', 'PostController@insert')->middleware('check');

Route::post('posts/edit/{id}', 'PostController@editPost')->middleware('check');

Route::get('posts/edit/{id}', 'PostController@edit')->name('edit')->middleware('check');

Route::get('posts/delete/{id}', 'PostController@delete')->middleware('check');

Route::post('posts/addcomment/{id}', 'PostController@addcomment');

Route::get('posts/login', 'Logincontroller@login')->name('login');

Route::post('posts/login', 'Logincontroller@loginPost');

Route::get('posts/logout', 'Logincontroller@logOut')->name('logout');
=======
Route::get('/create', 'PostController@create')->name('create');

Route::post('/create', 'PostController@storeWithFormRequest');

Route::get('/login', function () {
   return view('admin.login');
})->name('login');
>>>>>>> e0e9088724e303f45cf3faa6daf0fab418e4e40a
