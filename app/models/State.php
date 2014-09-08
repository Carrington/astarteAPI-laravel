<?php

class State extends Eloquent {

	//MASS ASSIGNMENT
	protected $fillable = array('state_name', 'state_code');

	//DEFINE RELATIONSHIPS
	public function counties()
	{
		return $this->hasMany('County');
	}

	public function cities()
	{
		return $this->hasMany('City');
	}


}

?>
