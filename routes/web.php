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

Route::get('/', 'DogController@index');
Route::get('/random', 'DogController@random')->name('random');
Route::get('/breed/list', 'DogController@breedList')->name('breed');

Route::resource('dog','DogController')->only([
    'index', 'show'
]);
