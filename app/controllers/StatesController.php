<?php

class StatesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		/**
		 * commenting out real logic to create stubs
                 * to prototype UI.
		switch($this->returnFormat) {
			case 'json':
				return Response::json(State::all();)
			break;
		}
		 *
		 */

		$payload = array (
			0 => array (
				"_links" => array(
					"self" => array ( "href" => "/states/0" )
				),
				"_embedded" => array(
					"counties" => array (
						0 => array (
							"_links" => array (
								"parent" => array ( "href" => "/states/0" ),
								"siblings" => array ( "href" => "/counties/?state=DE" ),
								"cities" => array ( "href" => "/cities/?county=1" )
							),
							"id" => 1,
							"name" => "Kent County",
							"FIPS" => "001"
						),
						1 => array (
							"_links" => array (
								"parent" => array ( "href" => "/states/0"),
								"siblings" => array ( "href" => "/counties/?state=DE"),
								"cities" => array ( "href" => "/cities/?county=2")
							),
							"id" => 2,
							"name" => "New Castle County",
							"FIPS" => "003"

						),
						2 => array (
							"_links" => array (
								"parent" => array ( "href" => "/states/0"),
								"siblings" => array ( "href" => "/counties/?state=DE"),
								"cities" => array ( "href" => "/cities/?county=3" )
							),
							"id" => 3,
							"name" => "Sussex County",
							"FIPS" => "005"
						)
					)
				),
				"name" => "Delaware",
				"state_code" => "DE"
			),
		);	
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
		//
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
