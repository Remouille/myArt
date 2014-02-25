<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$customers = [
			['name'=>'Marie', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Nathalie', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Isabelle', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Catherine', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Sylvie', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Monique', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Francoise', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Martine', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Jacqueline', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Anne', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Christine', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Nicole', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Sandrine', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Sophie', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Jeanne', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Chantal', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)], 
			['name'=>'Jean', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Michel', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Pierre', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Philippe', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Alain', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Nicolas', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Christophe', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Patrick', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Laurent', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'David', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Christian', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Sebastien', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Eric', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Bernard', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Daniel', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Julien', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)],
			['name'=>'Pascal', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s"), 'group_id' => rand(1,4)]
		];
		
		// Uncomment the below to run the seeder
		DB::table('users')->insert($customers);
	}

}
