<?php

class FlatController extends BaseController{
	public function details($id = -1)
	{
		$user = User::getCurrentUser();

		$param = array();

		$param['flats'] = $user->flats;


		if($id != -1)
		{
			$flat = Flat::findOrFail($id);
			if($flat->user->id != $user->id) throw new AccessDenied;

			$param['flats'] = array($flat);

		}

		return View::make('Flat.details', $param);
	}

	public function add()
	{
		User::getCurrentUser();
		return View::make('Flat.add');
	}

	public function addOnSubmit()
	{
		$user = User::getCurrentUser();

		$flat = new Flat;
		$flat->rent = Input::get('rent');
		$flat->cntrooms = Input::get('cntrooms');
		$flat->cntwashrooms = Input::get('cntwashrooms');
		$flat->duedate = Input::get('duedate');
		$flat->user()->associate($user);
		$flat->save();

		return View::make('Success.success');
	}

	public function edit($id)
	{
		$user = User::getCurrentUser();

		$flat = Flat::findOrFail($id);

		if($flat->user->id != $user->id)
		{
			throw new AccessDenied;
		}

		$param['flat'] = $flat;

		return View::make('Editflat.form', $param);
	}

	public function editOnSubmit($id)
	{
		$user = User::getCurrentUser();

		$flat = Flat::findOrFail($id);

		if($flat->user->id != $user->id)
		{
			throw new AccessDenied;

		}

		$flat->rent = Input::get('rent');
		$flat->cntrooms = Input::get('cntrooms');
		$flat->cntwashrooms = Input::get('cntwashrooms');
		$flat->duedate = Input::get('duedate');
		$flat->user()->associate($user);
		$flat->save();

		return View::make('Success.success');
	}
}