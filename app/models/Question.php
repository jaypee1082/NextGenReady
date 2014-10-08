<?php

use Intervention\Image\ImageManagerStatic as Image;

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
		$question->question_type_id = $data['question_type_id'];
		$question->push();
		
		$choices = $data['choices'];
		$images = $data['images'];
		$choice_ids = $data['choice_ids'];

		for($i = 0; $i < count($choices); $i++)
		{
			if($images != null)
			{
			    $destinationPath = public_path().'/assets/choice_images/';
		        $filename = $destinationPath . $images[$i]->getClientOriginalName();
				Image::make($images[$i]->getRealPath())->save($filename);
				$name = $images[$i]->getClientOriginalName();
			} else 
			{
				$name = '';
			}

			$_choice = Choice::find($choice_ids[$i]);
			$_choice->choice = $choices[$i];
			$_choice->image = $name;
			$_choice->push();
	
		}

		return Question::find($question->id);
	}

}