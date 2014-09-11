<?php

class QuestionType extends Eloquent {
	protected $table = 'question_types';

	public function questions()
	{
		return $this->belongsToMany('Question', 'question_type_id','id');
	}
}