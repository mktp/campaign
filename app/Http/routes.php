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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('hola', 'WelcomeController@hola');
Route::get('design/{total}', 'WelcomeController@design');

Route::post	('current_quote', ['as' => 'current_quote', 'uses' => 'WelcomeController@save_quote']);
Route::get('which_client', 'WelcomeController@which_client');
Route::post	('which_client_go', ['as' => 'which_client_go', 'uses' => 'WelcomeController@which_client_go']);
