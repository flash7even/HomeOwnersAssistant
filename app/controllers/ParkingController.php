<?php

class ParkingController extends BaseController{

	public function index()
	{
		$user = User::getCurrentUser();

		$parkings = $user->parkings;

		$param['parkings'] = $parkings;

		$id = Input::get('id');
		if(!empty($id))
		$param['parkings'] = array( Parking::findOrFail($id) );

		return View::make('Parking.index', $param);
	}

	public function form()
	{
		$user = User::getCurrentUser();

		$param['flats'] = $user->flats;

		$param['renters'] = $user->renters;

		return View::make('Parking.form', $param);
	}

	public function add()
	{
		$user = User::getCurrentUser();

		$parking = new Parking;

		if(!empty(Input::get('flat'))){
			$flat = Flat::findOrFail(Input::get('flat'));
			if($flat->user->id != $user->id) throw new AccessDenied;
			
			$parking->flat()->associate($flat);
		}

		if(!empty(Input::get('renter'))){
			$renter = Renter::findOrFail(Input::get('renter'));
			if($renter->user->id != $user->id) throw new AccessDenied;
			
			$parking->renter()->associate($renter);
		}

		$parking->user()->associate($user);

		$parking->license = Input::get('license');

		$parking->carname = Input::get('carname');

		$parking->save();

		return View::make('Success.success');
	}

	public function editform()
	{
		$user = User::getCurrentUser();

		$id = Input::get('id');

		if(empty($id)) throw new Exception("Error Processing Request", 1);

		$parking = Parking::findOrFail($id);

		if($parking->user->id != $user->id)
		{
			throw new AccessDenied;
		}

		$param['flats'] = $user->flats;

		$param['renters'] = $user->renters;

		$param['parking'] = $parking;

		return View::make('Parking.editform', $param);
		
	}

	public function edit()
	{
		$user = User::getCurrentUser();

		$id = Input::get('id');
		if(empty($id)) throw new Exception("Error Processing Request", 1);
		

		$parking = Parking::findOrFail($id);

		if($parking->user->id != $user->id)
		{
			throw new AccessDenied;
		}

		if(!empty(Input::get('flat'))){
			$flat = Flat::findOrFail(Input::get('flat'));
			if($flat->user->id != $user->id) throw new AccessDenied;
			
			$parking->flat()->associate($flat);
		}

		if(!empty(Input::get('renter'))){
			$renter = Renter::findOrFail(Input::get('renter'));
			if($renter->user->id != $user->id) throw new AccessDenied;
			
			$parking->renter()->associate($renter);
		}

		$parking->user()->associate($user);

		$parking->carname = Input::get('carname');

		$parking->license = Input::get('license');

		$parking->save();

		return View::make('Success.success');
	}
}