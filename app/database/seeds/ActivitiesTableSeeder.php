<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ActivitiesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('activities')->delete(); //clear table
		
		$activities = array(
			array(
				'exercise_slug' => 'food-chain-qc1',
				'module_id' => 1,
				'title' => 'Quick Check # 1',
				'type' => 0,
				'shortcode' => 'QC#1',
				'screenshot' => 'qc1-answer.jpg',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
		);
		
		DB::table('activities')->insert($activities);
	}

}