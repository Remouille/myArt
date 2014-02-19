<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupratesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grouprates', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('group_id')->unsigned();
			$table->foreign('group_id')->references('id')->on('groups');
			$table->integer('artwork_id')->unsigned();
			$table->foreign('artwork_id')->references('id')->on('artworks');
			$table->float('rate');
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
		Schema::drop('grouprates');
	}

}
