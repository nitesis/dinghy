<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('particips', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->boolean('confirm');
			$table->integer('guest_id')->unsigned();
			$table->integer('event_id')->unsigned();

			$table->foreign('guest_id')
			->references('id')
			->on('guests');

			$table->foreign('event_id')
			->references('id')
			->on('events');
		});

		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('particips');
	}

}
