<?php


class AddflatController extends BaseController{
	public function index()
	{
		return View::make('Addflat.index');
	}

	public function add()
	{
		$user = User::getCurrentUser();

		$flat = new Flat;
		$flat->rent = Input::get('rent');
		$flat->cntrooms = Input::get('cntrooms');
		$flat->cntwashrooms = Input::get('cntwashrooms');
		$flat->duedate = Input::get('duedate');
		$flat->owner()->associate($user);
		$flat->save();

		return View::make('Success.success');
	}
}
