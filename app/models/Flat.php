<?php

class Flat extends Eloquent{
	public function owner()
	{
		return $this->belongsTo('user', 'user_id');
	}

	public function renters()
	{
		return $this->belongsToMany('Renter', 'renter_flat');
	}
}
