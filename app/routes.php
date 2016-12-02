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

Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'DashboardController@index'));

// ---------

/*
 |--------------------------------------------------------------------------
 | Flat Routes
 |--------------------------------------------------------------------------
 */

Route::get('flat/details/{id?}', array('as' => 'flatdetails', 'uses' => 'FlatController@details' ));

Route::get('flat/new', array('as' => 'flatadd', 'uses' => 'FlatController@add'));

Route::post('flat/new', array('as' => 'flatsave', 'uses' => 'FlatController@addOnSubmit'));

Route::get('flat/edit/{id}', array('as' =>'flatedit', 'uses' =>'FlatController@edit'));

Route::post('flat/edit/{id}', array('as' => 'flateditsubmit', 'uses' => 'FlatController@editOnSubmit'));



/*
 |--------------------------------------------------------------------------
 | Renter Routes
 |--------------------------------------------------------------------------
 */

 Route::get('renter/details/{id?}', array('as' => 'renterdetails', 'uses' => 'RenterController@details'));

 Route::get('renter/new', array('as' => 'renteradd', 'uses' => 'RenterController@add'));

 Route::post('renter/new', array('as' => 'rentersave', 'uses' => 'RenterController@addOnSubmit'));

 Route::get('renter/edit/{id}', array('as' => 'renteredit', 'uses' => 'RenterController@edit'));
 
 Route::post('renter/edit/{id}', array('as' =>'rentereditsubmit', 'uses' => 'RenterController@editOnSubmit'));

 Route::get('renter/edit/{id}/left', array('as' => 'renterleft', 'uses' => 'RenterController@left'));

/*
 |--------------------------------------------------------------------------
 | Parking Routes
 |--------------------------------------------------------------------------
 */

Route::get('parking/details/{id?}', array('as' => 'parkingdetails', 'uses' => 'ParkingController@details'));

Route::get('parking/new', array('as' => 'parkingadd', 'uses' => 'ParkingController@add'));

Route::post('parking/new', array('as' => 'parkingsave', 'uses' => 'ParkingController@addOnSubmit'));

Route::get('parking/edit/{id}', array('as' => 'parkingedit', 'uses' => 'ParkingController@edit'));

Route::post('parking/edit/{id}', array('as' => 'parkingeditsubmit', 'uses' => 'ParkingController@editOnSubmit'));


/*
 |--------------------------------------------------------------------------
 | Maid Routes
 |--------------------------------------------------------------------------
 */

Route::get('maid/details/{id?}', array('as' => 'maiddetails', 'uses' => 'MaidController@details'));

Route::get('maid/new', array('as' => 'maidadd', 'uses' => 'MaidController@add'));

Route::post('maid/new', array('as' => 'maidsave', 'uses' => 'MaidController@addOnSubmit'));

Route::get('maid/edit/{id}', array('as' => 'maidedit', 'uses' => 'MaidController@edit'));

Route::post('maid/edit/{id}', array('as' => 'maideditsubmit', 'uses' => 'MaidController@editOnSubmit'));

/*
 |--------------------------------------------------------------------------
 | Payment Routes
 |--------------------------------------------------------------------------
 */

Route::get('payment/details/{month?}/{year?}', array('as' => 'paymentdetails', 'uses' => 'PaymentController@details'));

Route::get('payment/new/{id?}', array('as' => 'paymentadd', 'uses' => 'PaymentController@add'));

Route::post('payment/new/{unused?}', array('as' => 'paymentsave', 'uses' => 'PaymentController@addOnSubmit'));


Route::get('logout', array('as' => 'logout', function(){
	Session::forget('username');
	return Redirect::to('/');
}));
