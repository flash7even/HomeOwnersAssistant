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

Route::get('/', 'HomeController@showWelcome');

Route::get('signup', 'SignupController@showForm');

Route::post('signup', 'SignupController@data');

Route::get('login', 'LoginController@LoginForm');

Route::post('login', 'LoginController@verify');

Route::get('dashboard', 'DashboardController@index');

Route::get('addflat', 'AddflatController@index');

Route::post('addflat', 'AddflatController@add');

Route::get('flatdetails', 'FlatdetailsController@index');

Route::get('addrenter', 'AddrenterController@index');

Route::post('addrenter', 'AddrenterController@add');

Route::get('renterdetails', 'RenterdetailsController@index');
