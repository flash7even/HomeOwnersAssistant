<?php

/**
 *
 */
class SignupController extends BaseController
{
	public function showForm()
	{
		return View::make("Signup.SignupForm");
	}

	public function data()
	{
		$user = new User();
	}
}
