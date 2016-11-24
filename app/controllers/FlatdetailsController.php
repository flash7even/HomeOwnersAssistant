<?php

class FlatdetailsController extends BaseController{

	public function index()
	{
		$user = User::getCurrentUser();

		$param = array();

		$param['flats'] = $user->flats;

		$id = Input::get('id');

		if(!empty($id))
		{
			$param['flats'] = array(Flat::find($id));
		}

		return View::make('Flatdetails.index', $param);
	}

}
