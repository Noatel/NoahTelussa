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

Route::get('/', 'IndexController@index');
Route::get('/projects', 'IndexController@projects');



Route::get('/old', 'HomeController@old');
Route::get('/table', 'HomeController@table');



Route::get('/get/{id}', 'HomeController@getPage');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::auth();

Route::get('/home', 'HomeController@index');
