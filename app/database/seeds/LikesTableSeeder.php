<?php

class LikesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('likes')->truncate();

		$likes = [
		['Marie', ['Iris', 'Les Grandes Baigneuses', 'Soleil Levant']],
		['Nathalie', ['Fontaine', 'Le Grand Masturbateur', 'Gold Marilyn Monroe', 'Le Baiser']],
		['Isabelle', ['Inside Out', 'Faites le mur', 'Debbie Dick', 'Crak']],
		['Jeanne', ['Inside Out', 'Faites le mur', 'Debbie Dick', 'Crak']],
		['Catherine', ['Autoportrait', 'Le Baiser', 'La Danse']],
		['Francoise', ['Autoportrait', 'Le Baiser', 'La Danse']],
		['Sylvie', ['Soleil Levant', 'Femme de Tahiti', 'La Danse']],
		['Monique', ['La Liberte', 'Mona Lisa', 'Soleil Levant']],
		['Anne', ['Le Baiser', 'Femme de Tahiti']],
		['Jean', ['La Liberte', 'Les Grandes Baigneuses', 'Mona Lisa']],
		['Christian', ['La Liberte', 'Mona Lisa']],
		['Pierre', ['La Danse', 'Guernica', 'Le Baiser', 'Autoportrait']],
		['Nicolas', ['Faites le mur', 'Crak', 'Gold Marilyn Monroe']],
		['David', ['Faites le mur', 'Crak', 'Gold Marilyn Monroe']],
		['Eric', ['Faites le mur', 'Crak']]
		];

		// $this->command->info($likes.length());
		$i=0;

		foreach ($likes as $key => $like) {
			$user = User::where('name', $like[0])->first();
			// $this->command->info($user->name);
			foreach ($like[1] as $key => $awName) {
				$aw = Artwork::where('name', $awName)->first();
				// $this->command->info($aw->name);
				$l = new Like;
				$l->artwork_id = $aw->id;
				$l->user_id = $user->id;
				$l->save();
				$i++;
			}
		}
		$this->command->info($i." lignes ajoutees");	
		// Uncomment the below to run the seeder
		// DB::table('likes')->insert($likes);
	}

}
