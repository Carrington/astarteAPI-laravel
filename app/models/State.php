<?php

class State extends Eloquent {
	protected $guarded = array();

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
