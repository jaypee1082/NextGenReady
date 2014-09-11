<?php

class Choice extends Eloquent {

	protected $table = 'choices';

	public function questions()
	{
		return $this->belongsTo('Question');
	}

	public static function deleteChoices($id)
	{
		$choices = Choice::where('question_id', '=', $id)->delete();

		return $choices;
	}
}