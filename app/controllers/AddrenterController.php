<?php

class AddrenterController extends BaseController{

	public function index()
	{
		return View::make('Addrenter.index');
	}


	public function add()
	{
		$renter = new Renter;
		$renter->name = Input::get('name');
		$renter->gender = Input::get('gender');
		$renter->age = Input::get('age');
		$renter->profession = Input::get('profession');
		$renter->email = Input::get('email');
		$renter->contact = Input::get('contact');
		$renter->nid = Input::get('nid');
		$renter->arrival = Input::get('arrival');

		$user = User::getCurrentUser();

		$renter->user()->associate($user);

		$renter->save();

		$renter->flats()->save(Flat::find(Input::get('flat')));

		$renter->save();

		return View::make('Success.success');
	}

}
