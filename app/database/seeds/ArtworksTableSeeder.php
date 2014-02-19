<?php

class ArtworksTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('artworks')->truncate();
		$artworks = [
			['name' => 'Faites le mur', 'artist_id' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")], 
			['name' => 'Iris', 'artist_id' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Guernica', 'artist_id' => 3, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Mona Lisa', 'artist_id' => 4, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Le Grand Masturbateur', 'artist_id' => 5, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Gold Marilyn Monroe', 'artist_id' => 6, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'La Liberte', 'artist_id' => 7, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Inside Out', 'artist_id' => 8, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Fontaine', 'artist_id' => 9, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Soleil Levant', 'artist_id' => 10, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Les Grandes Baigneuses', 'artist_id' => 11, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Femme de Tahiti', 'artist_id' => 12, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Crak', 'artist_id' => 13, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Debbie Dick', 'artist_id' => 14, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'La Danse', 'artist_id' => 15, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Autoportrait', 'artist_id' => 16, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['name' => 'Le Baiser', 'artist_id' => 17, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")]
		];

		// Uncomment the below to run the seeder
		DB::table('artworks')->insert($artworks);

	}

}
