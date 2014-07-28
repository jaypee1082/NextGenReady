<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		
		DB::table('users')->delete(); //clear table
		
		$users = array(
			array(
				'username' => 'admin',
				'password' => Hash::make ('1234aA'),
				'role_id' => 1,
				'first_name' => 'Raina',
				'last_name' => 'Gamboa',
				'gender' => 'Male',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			
			array(
				'username' => 'teacher',
				'password' => Hash::make ('1234aA'),
				'role_id' => 2,
				'first_name' => 'Marvin Jayson',
				'last_name' => 'Baga',
				'gender' => 'Male',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'username' => 'student',
				'password' => Hash::make ('1234aA'),
				'role_id' => 3,
				'first_name' => 'Jaypee',
				'last_name' => 'Onza',
				'gender' => 'Male',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'username' => 'parent',
				'password' => Hash::make ('1234aA'),
				'role_id' => 4,
				'first_name' => 'Erickson',
				'last_name' => 'Tudla',
				'gender' => 'Male',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			)
		);
		
		DB::table('users')->insert($users);
	
	}

}