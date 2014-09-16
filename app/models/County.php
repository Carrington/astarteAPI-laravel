<?php

use LaravelBook\Ardent\Ardent;

class County extends Ardent {

	//MASS ASSIGNMENT
	protected $fillable = array ( 'county_code', 'county_name', 'state_code', 'FIPS' );


	//Ardent validation rules
	public static $rules = array ( 'county_code' => 'required|alpha',
		'state_code' => 'required|alpha|size:2',
		'county_name' => 'required|alpha',
	 	'FIPS'	=> 'required|numeric'	
	);

	//DEFINE RELATIONSHIPS
	public function cities()
	{
		return $this->hasMany('City');
	}

}

?>
