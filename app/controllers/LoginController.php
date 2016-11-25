<?php


class LoginController extends BaseController{

	public function LoginForm()
	{
		$username = Session::get('username');
		if(!empty($username))
		{
			return Redirect::to('dashboard');
		}
		return View::make('Login.LoginForm');
	}


	public function verify()
	{
		$user = User::where('username', '=', Input::get('username'));

		if($user->count() == 0)
		{
			return $this->LoginForm();
		}
		else {
			$user = $user->first();

			if($user->password == Input::get('password'))
			{
				Session::put('username', $user->username);
				return Redirect::to('dashboard');
			}
			else
			{
				return $this->LoginForm();
			}
		}
	}

}
