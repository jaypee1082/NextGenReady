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
		$activities->exercise_slug = $data['exercise_slug'];
		$activities->module_id = $data['module_id'];
		$activities->title = $data['activity_title'];
		$activities->type = $data['activity_type'];
		$activities->shortcode = $data['shortcode'];
		$activities->screenshot = $data['screenshot'];
		$activities->save();

		return Activity::find($activities->id);
	}

	public static function adminUpdateActivities($id, $data) 
	{
		$activities = Activity::find($id);
		$activities->exercise_slug = $data['exercise_slug'];
		$activities->title = $data['activity_title'];
		$activities->type = $data['activity_type'];
		$activities->shortcode = $data['shortcode'];
		$activities->screenshot = $data['screenshot'];
		$activities->push();

		return Activity::find($activities->id);
	}

}