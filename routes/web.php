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

/*-- DASHBOARD ROUTES --*/
Route::get('/', [
	'as' => 'home', 'uses' => 'DashController@index'
]);
Route::get('/dashboard', [
	'as' => 'dashboard', 'uses' => 'DashController@index'
]);
Route::get('/settings', [
	'as' => 'settings', 'uses' => 'DashController@settings'
]);
Route::get('/console', [
	'as' => 'console', 'uses' => 'DashController@console'
]);
Route::get('/importexport', [
	'as' => 'import-export', 'uses' => 'DashController@importExport'
]);

/*-- DATABASE ROUTES --*/
Route::get('/databases',[
	'as' => 'databases', 'uses' => 'DatabaseController@index'
]);
Route::get('/databases/{name}', [
	'as' => 'show-tables', 'uses' => 'DatabaseController@show'
]);
Route::post('/databases', [
	'as' => 'create-database', 'uses' => 'DatabaseController@create'
]);
Route::post('/databases/delete', [
	'as' => 'delete-database', 'uses' => 'DatabaseController@delete'
]);

/*-- TABLE ROUTES --*/
Route::get('/databases/db/table', [
	'as' => 'show-rows', 'uses' => 'TablesController@index'
]);