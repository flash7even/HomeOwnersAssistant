<?php

class User extends Eloquent{
	public function flats()
	{
		return $this->hasMany('Flat');
	}

	public function renters()
	{
		return $this->hasMany('Renter');
	}

	public function previousrenters()
	{
		return $this->hasMany('Previousrenter');
	}

	public function parkings()
	{
		return $this->hasMany('Parking');
	}

	public function maids()
	{
		return $this->hasMany('Maid');
	}

	public static function getCurrentUser()
	{
		if(!Session::has('username'))
		{
			throw new AccessDenied;
		}
		return User::where('username', '=', Session::get('username'))->first();
	}
}
