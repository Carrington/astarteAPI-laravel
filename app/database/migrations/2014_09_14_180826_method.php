<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMethodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('method', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('label');
			
			$table->string('state')->references('state_code')->on('states');
			$table->integer('county')->references('id')->on('counties');
			$table->integer('city')->references('id')->on('cities');
			$table->integer('facility')->references('id')->on('facilities');
			$table->integer('transport')->references('id')->on('transport');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('method');
	}

}
