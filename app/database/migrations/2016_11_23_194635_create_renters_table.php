<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('renters', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('gender');
			$table->integer('age');
			$table->string('profession');
			$table->string('email');
			$table->string('contact');
			$table->string('nid');
			$table->date('arrival');
			$table->date('departure');
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
		Schema::drop('renters');
	}

}
