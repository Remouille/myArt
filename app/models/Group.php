<?php

class Group extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function users()
	{
		return $this->hasMany('User');
	}

	public function groupRates()
	{
		return $this->hasMany('Grouprate');	
	}
}
