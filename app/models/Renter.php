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

	public function payments()
	{
		return $this->hasMany('Payment');
	}

	public function hasPaid()
	{
		$payment = Payment::where('renter_id', '=', $this->id);
		if($payment->count() == 0) return false;
		
		$month = date("m");
		$year = date("Y");
		$payment = $payment->where('month', '=', $month)->where('year', '=', $year);
		if($payment->count())
		{
			//return $payment->first()->amount;
			return $payment->sum('amount');
		}
		else
		{
			return false;
		}
		
	}
}
