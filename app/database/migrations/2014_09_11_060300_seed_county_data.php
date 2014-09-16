<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCountyData extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table( 'counties' )->insert(
			array (
				array (
					'county_code' 	=> 'Kent',
					'county_name' 	=> 'Kenty County',
					'state_code' 	=> 'DE',
					'FIPS'		=> '001'
				),
				array (
					'county_code'	=> 'NewCastle',
					'county_name'	=> 'New Castle County',
					'state_code'		=> 'DE',
					'FIPS'		=> '003'
				),
				array (
					'county_code'	=> 'Sussex',
					'county_name'	=> 'Sussex County',
					'state_code'		=> 'DE',
					'FIPS'		=> '005'
				)
			)	
		);//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
