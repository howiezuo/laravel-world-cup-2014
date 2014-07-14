<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('teams', function($table) {
			$table->increments('id');
            $table->char('code', '3');
			$table->string('name');
			$table->string('group');	// a ~ h
			$table->integer('rank');	// 1 ~ 4
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
		//
		Schema::drop('teams');
	}

}
