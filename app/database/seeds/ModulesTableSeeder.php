<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ModulesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('modules')->delete(); //clear table
		
		$modules = array(
			array(
				'module_name' => 'Food Chains',
				'module_slug' => 'food-chains',
				'description' => 'How would you decide how many rabbits and fox you would place in the park. In the text box provided, describe the things you would have to consider so that there are enough rabbits to maintain both a stable rabbit and fox population.',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
			
			array(
				'module_name' => 'Life Cycle of Plants',
				'module_slug' => 'life-cycle-of-plants',
				'description' => 'During planting season crops in North America farmers count on honeybees to pollinate the flowers for us to get almost a third of our food. The problem is that the honeybees are decreasing in population. No one is exactly sure why, but the honeybee colonies are in trouble and recently almost 25% of them have been lost. You have been called in to advise the department of agriculture on the problem.',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'module_name' => 'Heating and Cooling',
				'module_slug' => 'heating-and-cooling',
				'description' => 'How would you go about installing the panels to keep the company building cool in the hot summer days. Explain why your installation plan will keep the building cool.',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'module_name' => 'Natural Hazards',
				'module_slug' => 'natural-hazards',
				'description' => 'What natural hazards do you think might be in that place (you can use the list in section C)? Make a report to take your client including three areas that would offer privacy along with the possible natural hazards of the area. Describe what features you would design into the house to best protect your client from being harmed by those natural hazards.',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'module_name' => 'Doing Science',
				'module_slug' => 'doing-science',
				'description' => 'Using what you now know about being scientific, how would you go about making this decision? How would you go about doing a study that could convince your mom that her hypothesis is wrong? In the text box provided, key in the plan you would follow to make the decision as well as you would prove her hypothesis false.',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),

			array(
				'module_name' => 'Properties of Matter',
				'module_slug' => 'properties-of-matter',
				'description' => 'Suppose you were to design a house for a client who will build it. You are comparing using metal to wood for the foundation of the house.  Using what you know about properties of matter, what would you consider the benefit of each material? You need to compare the two for the client.',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			),
		);
		
		DB::table('modules')->insert($modules);
	}
}