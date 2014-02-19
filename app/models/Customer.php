<?php

class Customer extends Eloquent {
	protected $softDelete = true;
	
	protected $guarded = array();

	public static $rules = array();
	
	public function likes()
	{
		return $this->hasMany('Like');
	}
}
