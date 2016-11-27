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

Route::get('editrenter', 'EditrenterController@form');

Route::post('editrenter', 'EditrenterController@edit');

Route::get('editflat', 'EditflatController@form');

Route::post('editflat', 'EditflatController@edit');

Route::get('parking', 'ParkingController@index');

Route::get('parking/new', 'ParkingController@form');

Route::post('parking/new', 'ParkingController@add');

Route::get('parking/edit', 'ParkingController@editform');

Route::post('parking/edit', 'ParkingController@edit');

Route::get('maid', 'MaidController@index');

Route::get('maid/new', 'MaidController@form');

Route::post('maid/new', 'MaidController@add');

Route::get('maid/edit', 'MaidController@editform');

Route::post('maid/edit', 'MaidController@edit');

Route::get('payment/new', 'PaymentController@form');

Route::post('payment/new', 'PaymentController@add');


Route::get('logout', function(){
	Session::forget('username');
	return Redirect::to('login');
});
