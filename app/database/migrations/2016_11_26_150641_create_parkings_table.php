<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parkings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('flat_id')->unsigned();
			$table->foreign('flat_id')->references('id')->on('flats');
			$table->integer('renter_id')->unsigned();
			$table->foreign('renter_id')->references('id')->on('renters');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->string('license');
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
		Schema::drop('parkings');
	}

}
