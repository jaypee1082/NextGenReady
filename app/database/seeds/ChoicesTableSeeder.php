<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ChoicesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('choices')->delete(); //clear table
		
		$choices = array(
			array(
				'question_id' => 1,
				'choice' => 'oil',
				'image' => '',
				'order' => 'A',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'question_id' => 1,
				'choice' => 'the sun',
				'image' => '',
				'order' => 'B',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'question_id' => 1,
				'choice' => 'plants',
				'image' => '',
				'order' => 'C',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'question_id' => 1,
				'choice' => 'fish',
				'image' => '',
				'order' => 'D',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'question_id' => 2,
				'choice' => 'Consumers produce energy for producers.',
				'image' => '',
				'order' => 'A',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'question_id' => 2,
				'choice' => 'Consumers are first-order producers.',
				'image' => '',
				'order' => 'B',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'question_id' => 2,
				'choice' => 'Producers provide energy for consumers.',
				'image' => '',
				'order' => 'C',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'question_id' => 2,
				'choice' => 'Producer populations are lower than consumer populations.',
				'image' => '',
				'order' => 'D',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
		);
		
		DB::table('choices')->insert($choices);
	}

}