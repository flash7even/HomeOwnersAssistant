<?php

class Previousrenter extends Eloquent{
	public function user()
	{
		return $this->belongsTo('User');
	}
}