<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PhotoController@index');
Route::get('/', 'GalleryController@index');

Route::get('/gallery/show/{id}', 'GalleryController@show');
Route::get('/photo/create/{id}', 'PhotoController@create');
Route::get('/photo/details/{id}', 'PhotoController@details');

Route::resource('gallery', 'GalleryController');
Route::resource('photo', 'PhotoController');

