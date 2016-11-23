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

		$user = User::where('username', '=', $username)->first();

		$param = array();

		$param['name'] = $user->name;
		$param['flatCount'] = 0;

		return View::make('Dashboard.index', $param);
	}
}
