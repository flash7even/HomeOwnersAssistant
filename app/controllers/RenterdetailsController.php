<?php


class RenterdetailsController extends BaseController{
	public function index()
	{


		$user = User::getCurrentUser();

		$param = array();
		$param['renters'] = $user->renters;

		$id = Input::get('id');

		if(!empty($id))
		{
			$param['renters'] = array(Renter::find($id));
		}


		return View::make('Renterdetails.index', $param);
	}
}
