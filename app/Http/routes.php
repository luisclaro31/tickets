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

Route::group(['prefix' => 'ticket', 'middleware' => ['auth'], 'namespace' => 'Ticket' ],
		function() {
			Route::resource('student','StudentController');
		});

Route::group(['prefix' => 'ticket', 'middleware' => ['auth'], 'namespace' => 'Ticket' ],
		function() {
			Route::resource('call','CallStudentController');
		});

Route::get('example1', 'Ticket\HomeStudentController@index');

Route::get('example', 'Ticket\HomeStudentController@home');

Route::get('h', function() {

	return view('welcome');
});