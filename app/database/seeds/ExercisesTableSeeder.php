<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ExercisesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('modules')->delete(); //clear table
		
		$modules = array(
			array(
				'exercise_slug' => 'food-chains-qc1',
				'module_id' => 1,
				'title' => 'Quick Check # 1',
				'type' => 0,
				'shortcode' => 'QC#1',
				'screenshot' => ,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'exercise_slug' => 'food-chains-qq1',
				'module_id' => 1,
				'title' => 'Quick Question # 1',
				'type' => 1,
				'shortcode' => 'QQ#1',
				'screenshot' => ,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'exercise_slug' => 'life-cycle-of-plants-qc1',
				'module_id' => 2,
				'title' => 'Quick Check # 1',
				'type' => 0,
				'shortcode' => 'QC#1',
				'screenshot' => ,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'exercise_slug' => 'life-cycle-of-plants-qq1',
				'module_id' => 2,
				'title' => 'Quick Question # 1',
				'type' => 1,
				'shortcode' => 'QQ#1',
				'screenshot' => ,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'exercise_slug' => 'natural-hazards-qc1',
				'module_id' => 4,
				'title' => 'Quick Check # 1',
				'type' => 0,
				'shortcode' => 'QC#1',
				'screenshot' => ,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'exercise_slug' => 'natural-hazards-qq1',
				'module_id' => 4,
				'title' => 'Quick Question # 1',
				'type' => 1,
				'shortcode' => 'QQ#1',
				'screenshot' => ,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			
		);
		
		DB::table('modules')->insert($modules);
	}

}