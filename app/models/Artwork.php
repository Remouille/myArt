<?php

class Artwork extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function likes()
    {
        return $this->hasMany('Like');
    }

    public function rate($group)
    {
    	return $this->hasMany('Grouprate')->where('group_id', $group->id)->first();
    }
    
    public function rates()
    {
    	return $this->hasMany('Grouprate');
    }
}
