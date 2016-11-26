<?php

class Maid extends Eloquent{
	public function user()
	{
		return $this->belongsTo('User');
	}

	public function renters()
	{
		return $this->belongsToMany('Renter', 'maid_renter');
	}
}