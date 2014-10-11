<?php

class CitiesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$responseData = array (
			'_links' => array (
				'self' => array (
					"href" => "/cities"
				),
				'curies' => array (
					array (
						'name' => 'ea',
						'href' => '/docs/rels/{rel}',
						'templated' => true
					)
				),
				'ea:find' => array (
					'href' => '/cities{?cities}',
					'templated' => true	
				)
			),
			'_embedded' => array (
				
			)
		);

		$record = array();

		$record['_links'] = array (
			'self' => array (
				'href' => '/cities/1'
			),
		);

		$record['name'] = 'Raleigh';

		$record['_embedded'] = array (
			'ea:method' => array (
				0 => array (
					"label" => "Wake County Muncipal Recycling",
					"type" => array (
						"class" => "Muncipal Recycling",
						"pickup" => true,
						"schedule" => "biweekly",
						"next_pickup" => "2014/10/21"
					)
				),
				1 => array (
					"label" => "Wake County Muncipal Waste",
					"type" => array (
						"class" => "Municipal Landfill",
						"pickup" => true,
						"schedule" => "weekly",
						"next_pickup" => "2014/10/14"
					)
				)
			)
		);

		$responseData['_embedded'][] = $record;
		

		return $responseData;
/////
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$responseData = array();

		$responseData['_links'] = array (
			'self' => array (
				'href' => '/cities/1'
			),
		);

		$responseData['name'] = 'Raleigh';

		$responseData['_embedded'] = array (
			'ea:method' => array (
				0 => array (
					"label" => "Wake County Muncipal Recycling",
					"type" => array (
						"class" => "Muncipal Recycling",
						"pickup" => true,
						"schedule" => "biweekly",
						"next_pickup" => "2014/10/21"
					)
				),
				1 => array (
					"label" => "Wake County Muncipal Waste",
					"type" => array (
						"class" => "Municipal Landfill",
						"pickup" => true,
						"schedule" => "weekly",
						"next_pickup" => "2014/10/14"
					)
				)
			)
		);
		return $responseData;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
