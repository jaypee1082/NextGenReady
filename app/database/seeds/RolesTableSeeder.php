<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder {

	public function run()
	{
		
		DB::table('roles')->delete(); //clear table
		
		$roles = array(
			array(
				'role_name' => 'Administrator',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			
			array(
				'role_name' => 'Teacher',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'role_name' => 'Student',				
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'role_name' => 'Parent',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
		);
		
		DB::table('roles')->insert($roles);
	
	}

}