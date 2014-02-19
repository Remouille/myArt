<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArtworksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artworks', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('artist_id')->unsigned();
			$table->foreign('artist_id')->references('id')->on('artists');
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
		Schema::drop('artworks');
	}

}
