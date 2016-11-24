<?php

class Renter extends Eloquent{
	public function flats()
	{
		return $this->belongsToMany('Flat', 'renter_flat');
	}

	public function user()
	{
		return $this->belongsTo('user');
	}
}
