<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaidRenterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('maid_renter', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('renter_id')->unsigned();
			$table->foreign('renter_id')->references('id')->on('renters');
			$table->integer('maid_id')->unsigned();
			$table->foreign('maid_id')->references('id')->on('maids');
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
		Schema::drop('maid_renter');
	}

}
