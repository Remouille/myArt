<?php

class GroupratesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('grouprates')->truncate();


		foreach (Group::all() as $key => $group) {
			$this->command->info('Seed : '.$group->name);			
			foreach (Artwork::all() as $key => $aw) {
				$gr = new Grouprate;
				$gr->group_id = $group->id;
				$gr->artwork_id = $aw->id;
				$gr->rate = rand(0,1000)/1000;
				$gr-> save();
			}
		}

	}

}
