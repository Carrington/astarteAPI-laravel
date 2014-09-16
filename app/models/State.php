<?php

use LaravelBook\Ardent\Ardent;

class State extends Ardent {

	//MASS ASSIGNMENT
	protected $fillable = array ( 'state_name', 'state_code' );


	//Ardent validation rules
	public static $rules = array ( 'state_name' => 'required|alpha',
					'state_code' => 'required|alpha|size:2' );

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
