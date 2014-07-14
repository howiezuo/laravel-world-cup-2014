<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('matches', function($table) {
			$table->increments('id');
			$table->dateTime('play_date');
			$table->string('ground', 64);
			$table->string('stage', 16);
			$table->char('team1', 3)->nullable();
			$table->char('team2', 3)->nullable();
			$table->integer('goal1')->default(0);
			$table->integer('goal2')->default(0);
            $table->integer('extra1')->default(0);
            $table->integer('extra2')->default(0);
            $table->integer('pk1')->default(0);
            $table->integer('pk2')->default(0);
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
		Schema::drop('matches');
	}

}
