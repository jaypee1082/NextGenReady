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

		$choices = $data['choices'];
		$ctr = 0;

		foreach($choices as $choice)
		{
			$_choice = new Choice;
			$_choice->question_id = $question->id;
			$_choice->choice = $choice;
			$_choice->order = Choice::getOrder($ctr);
			$_choice->save();

			$ctr++;
		}

		return Question::find($question->id);
	}

	public static function adminUpdateQuestion($id, $data)
	{
		$question = Question::find($id);
		$question->question = $data['question'];
		$question->answer = $data['answer'];
		$question->push();
		
		/*$choice_1 = Choice::find($choice_id_1);
		$choice_1->choice = $data['choice_1'];
		$choice_1->push();

		$choice_2 = Choice::find($choice_id_2);
		$choice_2->choice = $data['choice_2'];
		$choice_2->push();

		$choice_3 = Choice::find($choice_id_3);
		$choice_3->choice = $data['choice_3'];
		$choice_3->push();

		$choice_4 = Choice::find($choice_id_4);
		$choice_4->choice = $data['choice_4'];
		$choice_4->push();*/

		$choices = $data['choices'];
		$choice_ids = $data['choice_ids'];

/*		foreach($choice_ids as $choice_id)
		{
			echo '<pre>';
			print_r($choice_id);
			echo '</pre>';
		}
		die;*/

		for($i = 0; $i < count($choices); $i++)
		{
			$_choice = Choice::find($choice_ids[$i]);
			$_choice->choice = $choices[$i];
			$_choice->push();
		} 

		return Question::find($question->id);
	}

}