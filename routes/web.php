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

Route::get('/product', [
	'as' => 'product',
	'uses' => 'HomeController@index'
]);


Route::get('/photos', [
	'as' => 'photo',
	'uses' => 'PhotoController@index'
]);

Route::get('/photo/create', [
	'as' => 'photo_create',
	'uses' => 'PhotoController@create'
]);

Route::post('/photos', [
	'as' => 'photo_store',
	'uses' => 'PhotoController@store'
]);

Route::get('/photo/{photo_id}', [
	'as' => 'photo_show',
	'uses' => 'PhotoController@show'
]);

Route::get('/photo/{photo_id}/edit', [
	'as' => 'photo_edit',
	'uses' => 'PhotoController@edit'
]);

Route::put('/photo/{photo_id}', [
	'as' => 'photo_update',
	'uses' => 'PhotoController@update'
]);

Route::delete('/photo/{photo_id}', [
	'as' => 'photo_destroy',
	'uses' => 'PhotoController@destroy'
]);


Route::resource('videos', 'VideoController')->except([
	'index',
	'show'
]);


