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

// ---------

/*
 |--------------------------------------------------------------------------
 | Flat Routes
 |--------------------------------------------------------------------------
 */

Route::get('flat/details/{id?}', array('as' => 'flatdetails', 'uses' => 'FlatController@details' ));

Route::get('flat/add', array('as' => 'flatadd', 'uses' => 'FlatController@add'));

Route::post('flat/add', array('as' => 'flatsave', 'uses' => 'FlatController@addOnSubmit'));

Route::get('flat/edit/{id}', array('as' =>'flatedit', 'uses' =>'FlatController@edit'));

Route::post('flat/edit/{id}', array('as' => 'flateditsubmit', 'uses' => 'FlatController@editOnSubmit'));



/*
 |--------------------------------------------------------------------------
 | Renter Routes
 |--------------------------------------------------------------------------
 */

 Route::get('renter/details/{id?}', array('as' => 'renterdetails', 'uses' => 'RenterController@details'));

 Route::get('renter/add', array('as' => 'renteradd', 'uses' => 'RenterController@add'));

 Route::post('renter/add', array('as' => 'rentersave', 'uses' => 'RenterController@addOnSubmit'));

 Route::get('renter/edit/{id}', array('as' => 'renteredit', 'uses' => 'RenterController@edit'));
 
 Route::post('renter/edit/{id}', array('as' =>'rentereditsubmit', 'uses' => 'RenterController@editOnSubmit'));

/*
 |--------------------------------------------------------------------------
 | Parking Routes
 |--------------------------------------------------------------------------
 */

Route::get('parking/details/{id?}', array('as' => 'parkingdetails', 'uses' => 'ParkingController@details'));

Route::get('parking/new', array('as' => 'parkingadd', 'uses' => 'ParkingController@form'));

Route::post('parking/new', 'ParkingController@add');

Route::get('parking/edit/{id}', array('as' => 'parkingedit', 'uses' => 'ParkingController@editform'));

Route::post('parking/edit/{id}', 'ParkingController@edit');


//------

Route::get('maid', 'MaidController@index');

Route::get('maid/new', 'MaidController@form');

Route::post('maid/new', 'MaidController@add');

Route::get('maid/edit', 'MaidController@editform');

Route::post('maid/edit', 'MaidController@edit');

Route::get('payment/all/{month?}/{year?}', 'PaymentController@index');

Route::get('payment/new', 'PaymentController@form');

Route::post('payment/new', 'PaymentController@add');


Route::get('logout', function(){
	Session::forget('username');
	return Redirect::to('login');
});
