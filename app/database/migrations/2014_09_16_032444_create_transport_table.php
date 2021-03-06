<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transport', function(Blueprint $table)
		{
			$table->increments('id');

			$table->boolean('personal');
			$table->float('vehicle_fuel_efficiency');
			$table->string('frequency');
			$table->date('next_pickup')->nullable();

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
		Schema::drop('transport');
	}

}
