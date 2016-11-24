<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenterFlatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('renter_flat', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('renter_id')->unsigned();
			$table->foreign('renter_id')->references('id')->on('renters');
			$table->integer('flat_id')->unsigned();
			$table->foreign('flat_id')->references('id')->on('flats');
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
		Schema::drop('renter_flat');
	}

}
