<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		
		DB::table('users')->delete(); //clear table
		
		$users = array(
			array(
				'username' => 'Xcrasher',
				'password' => Hash::make ('1234aA'),
				'first_name' => 'Jaypee',
				'last_name' => 'Onza',
				'gender' => 'M',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			
			array(
				'username' => 'Calmir',
				'password' => Hash::make ('1234aA'),
				'first_name' => 'Erickson',
				'last_name' => 'Tudla',
				'gender' => 'M',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			
			array(
				'username' => 'Mavka',
				'password' => Hash::make ('1234aA'),
				'first_name' => 'Michelle',
				'last_name' => 'Yang',
				'gender' => 'F',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			)
		);
		
		DB::table('users')->insert($users);
	
	}

}