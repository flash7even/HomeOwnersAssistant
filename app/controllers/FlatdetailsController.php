<?php

class FlatdetailsController extends BaseController{

	public function index()
	{
		$user = User::getCurrentUser();

		$param = array();

		$param['flats'] = $user->flats;

		return View::make('Flatdetails.index', $param);
	}

}
