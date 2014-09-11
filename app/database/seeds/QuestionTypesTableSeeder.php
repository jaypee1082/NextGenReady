<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class QuestionTypesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('question_types')->delete(); //clear table
		
		$question_types = array(
			array(
				'question_type' => 'Multiple Choice'
			),
			array(
				'question_type' => 'Image'
			),
			array(
				'question_type' => 'Checkbox'
			),
			array(
				'question_type' => 'Image Checkbox'
			),
		);
		
		DB::table('question_types')->insert($question_types);
	}

}