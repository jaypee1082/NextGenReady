<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class QuestionsTableSeeder extends Seeder {

	public function run()
	{
		
		DB::table('questions')->delete(); //clear table
		
		$questions = array(
			array(
				'module_id' => 1,
				'question_type_id' => 1,
				'question' => 'Which of the following is the source of energy for all living things on Earth?',
				'answer' => 'B',
				'from_review' => 0,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'module_id' => 1,
				'question_type_id' => 1,
				'question' => 'Choose the correct statement from the following:',
				'answer' => 'C',
				'from_review' => 0,
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
		);
		
		DB::table('questions')->insert($questions);
	
	}

}