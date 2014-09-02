<?php

class BaseController extends Controller {
	
	private $returnFormat;

	public function __construct() {
		$ctrl = &$this;
		$this->beforeFilter(function($route, $request) use (&$ctrl)
		{
			$ctrl->returnFormat = $request->query("format", "json");
		};
	}
	
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
	
}
