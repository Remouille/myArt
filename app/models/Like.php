<?php

class Like extends Eloquent {
	protected $guarded = array();

	public static $rules = array();
	
	public function artwork()
	{
		return $this->belongsTo('Artwork')->first();
	}

	public function customer()
	{
		return $this->belongsTo('Customer')->first();
	}
}
