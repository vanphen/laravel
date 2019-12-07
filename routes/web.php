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
Route::get('year',function () {
   return view('profile');
})->name('profile');
Route::post('year', 'PostController@storeWithFormRequest');
Route::get('success', function (){
   echo 'la nam nhuan';
})->name('success');



