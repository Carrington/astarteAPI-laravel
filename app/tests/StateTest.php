<?php


namespace AstarteAPI;

use Mockery;
use TestCase;

class StateTest extends TestCase
{
	public function tearDown() {
		Mockery::close();
	}

	public function setUp() {
		parent::setUp();
	}
	
	public function test_relation_with_counties() {

		/**
		 * This is not the best because it 
		 * assumes knowledge of seed data
		 */

		$counties = array();
	        $counties[0]			= new stdClass;
		$counties[0]->county_code 	= 'Kent';
		$counties[0]->county_name 	= 'Kenty County';
		$counties[0]->state_code	= 'DE';
		$counties[0]->FIPS		= '001';

		$counties[1]			= new stdClass;
		$counties[1]->county_code	= 'NewCastle';
	       	$counties[1]->county_name	= 'New Castle County';
		$counties[1]->state_code	= 'DE';
		$counties[1]->FIPS		= '003';
		
		$counties[2]			= new stdClass;
		$counties[2]->county_code	= 'Sussex';
		$counties[2]->county_name	= 'Sussex County';
		$counties[2]->state_code	= 'DE';
		$counties[2]->FIPS		= '005';

		$state = new State::find('DE');

		$this->assertArraysAreSimilar($state->counties, $counties);
		
	}
	


}



