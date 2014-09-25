<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

			$this->call('UsersTableSeeder');
			$this->call('RolesTableSeeder');
			$this->call('ModulesTableSeeder');
			$this->call('QuestionsTableSeeder');
			$this->call('QuestionTypesTableSeeder');
			$this->call('ChoicesTableSeeder');
			$this->call('ActivitiesTableSeeder');
	}

}
