<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {


	public function setUp() 
	{
		parent::setUp();

		$this->prepareForTests();
	}

	/**
	 * Creates the application.
	 *
	 * @return \Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../bootstrap/start.php';
	}

	/**
	 * Migrate db for testing, set pretend mailer
	 */
	public function prepareForTests()
	{
		Artisan::call('migrate');
		Mail::pretend(true);
	}

	/**
	 * Test if two associative arrays have the same
	 * key => value pairings, regardless of order
	 */
	public function assertArraysAreSimilar($a, $b) {
		if (count(array_diff_assoc($a, $b)) {
			return false;
		}

		foreach ($a as $key => $value) {
			if ($value !== $b[$key]) {
				return false;
			}
		}

		return true;
	}
}
