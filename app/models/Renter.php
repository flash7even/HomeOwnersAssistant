<?php

class Renter extends Eloquent{
	public function flats()
	{
		return $this->belongsToMany('Flat', 'renter_flat');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function maids()
	{
		return $this->belongsToMany('Maid', 'maid_renter');
	}

	public function parking()
	{
		return $this->hasMany('Parking');
	}
}
