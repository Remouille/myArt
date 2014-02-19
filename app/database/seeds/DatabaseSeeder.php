<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		$this->call('GroupsTableSeeder');
		$this->call('ArtistsTableSeeder');
		$this->call('ArtworksTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('LikesTableSeeder');
		$this->call('GroupratesTableSeeder');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}