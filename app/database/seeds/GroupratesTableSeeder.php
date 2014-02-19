<?php

class GroupratesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('grouprates')->truncate();

		$grouprates = array(
			
		);

		// Uncomment the below to run the seeder
		DB::table('grouprates')->insert($grouprates);
	}

}
