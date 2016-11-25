<?php

class Flat extends Eloquent{
	public function user()
	{
		return $this->belongsTo('User');
	}

	public function renters()
	{
		return $this->belongsToMany('Renter', 'renter_flat');
	}
}
