<?php

/**
 *
 */
class SignupController extends BaseController
{
	public function showForm()
	{
		if(Session::has('username'))
		{
			return Redirect::to('dashboard');
		}
		return View::make("Signup.SignupForm");
	}

	public function data()
	{
		$user = new User();

		$user->name = Input::get('name');
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->password = Input::get('password');

		$count = User::where('username', '=', $user->username)->count();




		if(empty($user->name) || empty($user->email) || empty($user->username) || empty($user->password) || $count>0)
		{
			return $this->showForm();
		}
		else
		{
			$user->save();
			return View::make('Success.success');
		}
	}
}
