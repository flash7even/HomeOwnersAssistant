<?php
/**
* 
*/
class Parking extends Eloquent
{
	public function flat()
	{
		return $this->belongsTo('Flat');
	}

	public function renter()
	{
		return $this->belongsTo('Renter');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}