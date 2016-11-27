<?php


class Payment extends Eloquent{

	public function renter()
	{
		return $this->belongsTo('Renter');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}