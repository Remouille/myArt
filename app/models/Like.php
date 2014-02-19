<?php

class Like extends Eloquent {
	protected $guarded = array();

	public static $rules = array();
	
	public function artworks()
	{
		return $this->hasMany('Artwork');
	}
}
