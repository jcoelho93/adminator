<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
	'as' => 'home', 'uses' => 'DashController@index'
]);
Route::get('/dashboard', [
	'as' => 'dashboard', 'uses' => 'DashController@index'
]);
Route::get('/console', [
	'as' => 'console', 'uses' => 'DashController@console'
]);
Route::get('/importexport', [
	'as' => 'import-export', 'uses' => 'DashController@importExport'
]);
Route::get('/databases',[
	'as' => 'databases', 'uses' => 'DashController@databases'
]);
Route::get('/databases/{name}', [
	'as' => 'show-database', 'uses' => 'DatabaseController@show'
]);
Route::post('/databases', [
	'as' => 'create-database', 'uses' => 'DatabaseController@create'
]);
Route::post('/databases/delete', [
	'as' => 'delete-database', 'uses' => 'DatabaseController@delete'
]);

Route::get('/table/{name}', [
	'as' => 'show-table', 'uses' => 'TableController@show'
]);