<?php

class EditrenterController extends BaseController{
	public function form()
	{
		$id = Input::get('id');

		$user = User::getCurrentUser();

		$renter = Renter::findOrFail($id);

		if($renter->user->id != $user->id)
		{
			throw new AccessDenied;
		}

		return View::make('Editrenter.form', array('renter' => $renter, 'flats' => $user->flats));
	}

	public function edit()
	{
		$id = Input::get('id');
		if(empty($id)) throw new AccessDenied;

		$renter = Renter::find($id);
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

		$flatID = Input::get('flat');

		if(!empty($flatID))
		{
			$flat = Flat::findOrFail($flatID);
			$renter->flats()->detach();
			$renter->flats()->save($flat);
		}

		$renter->save();

		return View::make('Success.success');
	}
}
