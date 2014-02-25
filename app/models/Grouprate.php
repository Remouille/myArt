<?php

class Grouprate extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function artwork()
	{
		return $this->belongsTo('Artwork')->first();	
	}

	public function group()
	{
		return $this->belongsTo('Group')->first();	
	}
}