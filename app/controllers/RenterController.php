<?php


class RenterController extends BaseController{
	public function details($id = -1)
	{

		$user = User::getCurrentUser();

		$param = array();
		$param['currentrenters'] = $user->renters()->where('departure', '=', '0000-00-00')->get();

		if($id != -1)
		{
			$param['currentrenters'] = array(Renter::find($id));
		}


		return View::make('Renter.details', $param);
	}

	public function add()
	{
		$user = User::getCurrentUser();

		$param['flats'] = $user->flats;

		return View::make('Renter.add', $param);
		//return View::make('Renter.add', $param);
	}

	public function addOnSubmit()
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

		$flatID = Input::get('flat');

		if(!empty($flatID))
		{
			$flat = Flat::findOrFail($flatID);
			$renter->flats()->save($flat);
		}



		$renter->save();

		return View::make('Success.success');
	}

	public function edit($id)
	{
		$user = User::getCurrentUser();

		$renter = Renter::findOrFail($id);

		if($renter->user->id != $user->id)
		{
			throw new AccessDenied;
		}

		$param['renter'] = $renter;
		$param['flats'] = $user->flats;

		return View::make('Renter.edit', $param);
	}

	public function editOnSubmit($id)
	{
		$user = User::getCurrentUser();

		$renter = Renter::findOrFail($id);

		if($renter->user->id != $user->id)
		{
			throw new AccessDenied;
			
		}

		$renter->name = Input::get('name');
		$renter->gender = Input::get('gender');
		$renter->age = Input::get('age');
		$renter->profession = Input::get('profession');
		$renter->email = Input::get('email');
		$renter->contact = Input::get('contact');
		$renter->nid = Input::get('nid');
		$renter->arrival = Input::get('arrival');

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