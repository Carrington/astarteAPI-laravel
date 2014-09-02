<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//@TODO: make public user guide
	return View::make('hello');
});

Route::resource('states', 'StatesController');
Route::resource('counties', 'CountiesController');
Route::resource('cities', 'CitiesController');
Route::resource('methods', 'MethodsController');
Route::resource('materials', 'MaterialsController');
