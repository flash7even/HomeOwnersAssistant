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
			$flat = Flat::findOrFail($id);
			if($flat->user->id != $user->id) throw new AccessDenied;

			$param['flats'] = array($flat);

		}

		return View::make('Flatdetails.index', $param);
	}

}
