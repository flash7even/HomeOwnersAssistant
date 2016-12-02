<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDepartureToRentersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('renters', function(Blueprint $table)
		{
			//
			$table->date('departure');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('renters', function(Blueprint $table)
		{
			//
			$table->dropColumn('departure');
		});
	}

}
