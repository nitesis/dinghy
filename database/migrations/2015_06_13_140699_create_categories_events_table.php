<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('categories_events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('event_id')->unsigned();
			$table->integer('category_id')->unsigned();

			$table->foreign('event_id')
			->references('id')
			->on('events');

			$table->foreign('category_id')
			->references('id')
			->on('categories');
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
		Schema::drop('categories_events');
	}

}
