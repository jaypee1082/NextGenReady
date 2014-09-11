<?php

class Question extends Eloquent {

	protected $table = 'questions';

	public function questionTypes()
	{
		return $this->hasOne('QuestionType', 'id', 'question_type_id');;
	}

	public function choices()
	{
		return $this->hasMany('Choice');
	}

	public function modules()
	{
		return $this->belongsTo('Module', 'module_id');
	}

	public static function adminStoreQuestion($data) 
	{
		$question = new Question;
		$question->question = $data['question'];
		$question->module_id = $data['module_id'];
		$question->question_type_id = $data['question_type'];
		$question->answer = $data['answer'];
		$question->save();

		$choice_1 = new Choice;
		$choice_1->question_id = $question->id;
		$choice_1->choice = $data['choice_1'];
		$choice_1->order = 'A';
		$choice_1->save();

		$choice_2 = new Choice;
		$choice_2->question_id = $question->id;
		$choice_2->choice = $data['choice_2'];
		$choice_2->order = 'B';
		$choice_2->save();

		$choice_3 = new Choice;
		$choice_3->question_id = $question->id;
		$choice_3->choice = $data['choice_3'];
		$choice_3->order = 'C';
		$choice_3->save();

		$choice_4 = new Choice;
		$choice_4->question_id = $question->id;
		$choice_4->choice = $data['choice_4'];
		$choice_4->order = 'D';
		$choice_4->save();


		return Question::find($question->id);
	}

}