<?php

class Activity extends Eloquent {

	protected $table = 'activities';

	public function modules()
	{
		return $this->belongsTo('Module', 'module_id');
	}

	public static function adminStoreActivities($data) 
	{
		$activities = new Activity;
		$activities->exercise_slug = $data['question'];
		$activities->module_id = $data['module_id'];
		$activities->title = $data['title'];
		$activities->type = $data['type'];
		$activities->shortcode = $data['shortcode'];
		$activities->screenshot = $data['screenshot'];
		$activities->save();

		return Activity::find($activities->id);
	}

}