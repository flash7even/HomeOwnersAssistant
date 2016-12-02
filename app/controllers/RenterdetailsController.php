<?php


class RenterdetailsController extends BaseController{
	public function index()
	{


		$user = User::getCurrentUser();

		$param = array();
		$param['currentrenters'] = $user->renters()->where('departure', '=', '0000-00-00')->get();

		$id = Input::get('id');

		if(!empty($id))
		{
			$param['renters'] = array(Renter::find($id));
		}


		return View::make('Renterdetails.index', $param);
	}
}
