<?php

/**
 *
 */
class DashboardController extends BaseController
{
	public function index()
	{
		$username = Session::get('username');

		if(empty($username))
		{
			return Redirect::to('login');
		}

		$user = User::getCurrentUser();

		$param = array();

		$param['name'] = $user->name;
		$param['flatCount'] = $user->flats->count();
		$param['renterCount'] = $user->renters->count();

		return View::make('Dashboard.index', $param);
	}
}
