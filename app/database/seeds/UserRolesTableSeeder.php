<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserRolesTableSeeder extends Seeder {

	public function run()
	{
		
		DB::table('user_roles')->delete(); //clear table
		
		$user_roles = array(
			array(
				'user_id' => 1,
				'role_id' => 1,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			
			array(
				'user_id' => 2,
				'role_id' => 2,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'user_id' => 3,
				'role_id' => 3,			
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'user_id' => 4,
				'role_id' => 4,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
		);
		
		DB::table('user_roles')->insert($user_roles);
	
	}

}