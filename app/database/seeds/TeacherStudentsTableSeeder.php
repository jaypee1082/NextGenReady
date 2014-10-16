<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TeacherStudentsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('teacher_students')->delete(); //clear table
		
		$teacher_students = array(
			array(
				'student_id' => 3,
				'teacher_id' => 2,
			),
		);
		
		DB::table('teacher_students')->insert($teacher_students);
	}

}