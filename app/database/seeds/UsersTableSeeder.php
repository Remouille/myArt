<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$customers = [
			['name'=>'Marie'],
			['name'=>'Nathalie'],
			['name'=>'Isabelle'],
			['name'=>'Catherine'],
			['name'=>'Sylvie'],
			['name'=>'Monique'],
			['name'=>'Francoise'],
			['name'=>'Martine'],
			['name'=>'Jacqueline'],
			['name'=>'Anne'],
			['name'=>'Christine'],
			['name'=>'Nicole'],
			['name'=>'Sandrine'],
			['name'=>'Sophie'],
			['name'=>'Jeanne'],
			['name'=>'Chantal'], 
			['name'=>'Jean'],
			['name'=>'Michel'],
			['name'=>'Pierre'],
			['name'=>'Philippe'],
			['name'=>'Alain'],
			['name'=>'Nicolas'],
			['name'=>'Christophe'],
			['name'=>'Patrick'],
			['name'=>'Laurent'],
			['name'=>'David'],
			['name'=>'Christian'],
			['name'=>'Sebastien'],
			['name'=>'Eric'],
			['name'=>'Bernard'],
			['name'=>'Daniel'],
			['name'=>'Julien'],
			['name'=>'Pascal']
		];

		// Uncomment the below to run the seeder
		// DB::table('users')->insert($customers);
	}

}
