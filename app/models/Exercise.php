<?php

class Exercise extends Eloquent {
	
	protected $table = 'exercises';

	public function modules()
	{
		return $this->belongsTo('Module', 'module_id');
	}

	public static function adminStoreExercise($data) 
	{
		$exercise = new Exercise;
		$exercise->exercise_slug = $data['question'];
		$exercise->module_id = $data['module_id'];
		$exercise->title = $data['title'];
		$exercise->type = $data['type'];
		$exercise->shortcode = $data['shortcode'];
		$exercise->screenshot = $data['screenshot'];
		$exercise->save();

		return Exercise::find($question->id);
	}

	
}