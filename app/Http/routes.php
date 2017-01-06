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

Route::get('example', 'Ticket\HomeStudentController@home');

Route::get('home', 'HomeController@index');

Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'users', 'middleware' => ['auth'], 'namespace' => 'Ticket' ],
		function() {
			Route::resource('my_profile','UserController');
		});

Route::group(['prefix' => 'ticket', 'middleware' => ['auth'], 'namespace' => 'Ticket' ],
		function() {
			Route::resource('student','StudentController');
		});

Route::group(['prefix' => 'ticket', 'middleware' => ['auth'], 'namespace' => 'Ticket' ],
		function() {
			Route::resource('call','CallStudentController');
		});

Route::group(['prefix' => 'ticket', 'middleware' => ['auth']],
		function() {
			Route::get('frills', 'Ticket\CallStudentController@frills');
			Route::get('credit', 'Ticket\CallStudentController@credit');
			Route::get('certified', 'Ticket\CallStudentController@certified');
			Route::get('registrations', 'Ticket\CallStudentController@registrations');
			Route::get('others', 'Ticket\CallStudentController@others');
			Route::get('dr', 'Ticket\CallStudentController@dr');
		});

Route::group(['prefix' => 'ticket', 'middleware' => ['auth'], 'namespace' => 'Ticket' ],
		function() {
			Route::resource('report','ReportCallsController');
		});


Route::get('report', 'Ticket\ReportCallsController@index');


Route::get('h', function() {

	return view('welcome');
});