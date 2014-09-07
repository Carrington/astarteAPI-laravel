<?php

class StatesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 * @todo employ record limit, pagination (add next rel to links)
	 * @todo curies and self should be turned into helpers or something
	 * @todo helper for embeddeds
	 */
	public function index()
	{
		$responseData = array (
			'_links' => array (
				'self' => array (
					"href" => "/states"
				),
				'curies' => array (
					array (
						'name' => 'ea',
						'href' => '/docs/rels/{rel}',
						'templated' => true
					)
				),
				'ea:find' => array (
					'href' => '/states{?state_code}',
					'templated' => true	
				)
			),
			'_embedded' => array (
				
			)
		);
		
		$states = State::all();

		foreach ($states as $state) {
			$record = array();

			foreach ($state as $key => $var) {
				$record[$key] = $var;
			}

			$record['_links'] = array (
				'self' => array (
					'href' => '/states/' . $state['state_code']
				),
				'ea:counties' => array (
					'href' => '/counties/?state_code=' . $state['state_code']
				),
				'ea:cities' => array (
					'href' => '/cities/?state_code=' . $state['state_code']
				)
			);

			$responseData['_embedded'][] = $record;
		}

		return $responseData;
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
	 * @param  string state_code
	 * @return Response
	 */
	public function show($state_code)
	{
		$state = State::find($state_code);

		$record = array();


		foreach ($state as $key => $var) {
			$record[$key] = $var;
		}

		$record['_links'] = array (
			'self' => array (
				'href' => '/states/' . $state['state_code']
			),
			'curies' => array (
				array (
					'name' => 'ea',
					'href' => '/docs/rels/{rel}',
					'templated' => true
				)
			),
			'ea:counties' => array (
				'href' => '/counties/?state_code=' . $state['state_code']
			),
			'ea:cities' => array (
				'href' => '/cities/?state_code=' . $state['state_code']
			)
		);

		return $record;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $state_code
	 * @return Response
	 */
	public function edit($state_code)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $state_code
	 * @return Response
	 */
	public function update($state_code)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $state_code
	 * @return Response
	 */
	public function destroy($state_code)
	{
		//
	}


}
