<?php

class EditflatController extends BaseController{
	public function form()
	{
		$user = User::getCurrentUser();

		$id = Input::get('id');

		if(empty($id))
		{
			throw new Exception("Error Processing Request", 1);
		}

		$flat = Flat::findOrFail($id);

		if($flat->user->id != $user->id)
		{
			throw new AccessDenied;
		}

		$param['flat'] = $flat;

		return View::make('Editflat.form', $param);
	}

	public function edit()
	{
		$user = User::getCurrentUser();

		$id = Input::get('id');

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
