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

Route::post('auth/login', 'Auth\AuthController@authenticate');
Route::get('register', 'RegisterController@showRegister');




Route::get('events', 'EventsController@index');
Route::get('events/{id}', 'EventsController@show');

Route::get('eventsCreate', 'EventsController@create');
Route::delete('events/{id}', 'EventsController@destroy');

Route::get('detailsAll', 'DetailsController@index');
Route::get('details', 'DetailsController@index');

/*Route::get('details/{id}', 'DetailsController@create');*/
Route::post('details', 'DetailsController@store');
Route::get('details/{id}', 'DetailsController@show');

Route::get('locations', 'LocationsController@index');

/*Route::get('eventsEdit', 'EventsController@edit');*/

Route::post('events', 'EventsController@store');

