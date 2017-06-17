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

//Route::get('/', function () {
//    return view('welcome1');
//});

Route::get('/calendar', ['uses' => 'SampleController@calendar']);


Route::resource('calendar_events', 'CalendarEventController');
Route::get('/doctors/{id}', 'CalendarEventController@doctors');


Route::get('/register', 'RegistrationController@create');
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/', 'SessionsController@create');
Route::get('/login', 'SessionsController@create');
//Route::post('/login', 'SessionsController@store');
Route::post('login', [ 'as' => 'login', 'uses' => 'SessionsController@store']);
Route::get('/logout', 'SessionsController@destroy');