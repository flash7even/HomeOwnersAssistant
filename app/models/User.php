<?php

class User extends Eloquent{
	public function flats()
	{
		return $this->hasMany('Flat');
	}

	public static function getCurrentUser()
	{
		return User::where('username', '=', Session::get('username'))->first();
	}
}
