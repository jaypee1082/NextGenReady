<?php

class AdminController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /teachermodules
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('admin.dashboard')
			->with('title', 'Admin - Dashboard');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /teachermodules/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /teachermodules
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /teachermodules/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /teachermodules/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /teachermodules/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /teachermodules/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	//admin users

	public function getUsersList()
	{
		$users = User::orderBy('created_at', 'desc')
				->get();

		return View::make('admin.users.index')
			->with('users', $users)
			->with('title', 'Admin - List of Users');
	}

	public function createUser()
	{
		$roles = Role::all();

		return View::make('admin.users.create')
			->with('roles', $roles)
			->with('title', 'Create User');
	}

	public function storeUser()
	{
		$input = Input::all();
		$rules = array(
					'username' => 'required|min:3|unique:users',
					'password' => 'required|min:6',
					'confirm_password' => 'required|same:password',
					);

		$validation = Validator::make($input, $rules);
		if($validation->fails()) 
		{
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else 
		{
			$data = array(
				'username' => Input::get('username'),
				'password' => Input::get('password'),
				'role_id' => Input::get('role_id'),
				'first_name' => Input::get('first_name'),
				'last_name' => Input::get('last_name'),
				'gender' => Input::get('gender'),
				);
			
			$user = User::adminStoreUser($data);
			return Redirect::route('admin.users.create')
				->with('message', 'Successfully Added New User!');
		}
	}

	public function editUser($id)
	{
		$user = User::find($id);
		$roles = Role::all();

		return View::make('admin.users.edit')
			->with('title', 'Edit User')
			->with('roles', $roles)
			->with('user', $user);
	}

	public function updateUser($id)
	{
		$input = Input::all();

		$rules = array(
			'username' => 'required|min:3',
			'first_name' => 'required|min:3',
			'last_name' => 'required|min:3',
		);

		$validation = Validator::make($input, $rules);

		if($validation->fails())
		{
			return Redirect::back()->withErrors($validation);
		}
		else
		{			
			$data = array(
				'username' => Input::get('username'),
				'first_name' => Input::get('first_name'),
				'last_name' => Input::get('last_name'),
				'role_id' => Input::get('role_id'),
				'gender' => Input::get('gender'),
				);

			$user = User::adminUpdateUser($id, $data);

			return Redirect::route('admin.users.edit', $id)
							->with('message', 'Update Successful!');
		}

	}

	public function editUserPassword($id)
	{
		$user = User::find($id);

		return View::make('admin.users.password')
			->with('title', 'Edit User Password')
			->with('user', $user);
	}

	public function updateUserPassword($id)
	{
		$input = Input::all();

		$rules = array(
			'password' => 'required|min:3',
			'confirm_password' => 'required|same:password',
		);

		$validation = Validator::make($input, $rules);

		if($validation->fails())
		{
			return Redirect::back()->withErrors($validation);
		}
		else
		{			
			$data = array(
					'password' => Input::get('password')
						);
			$user = User::updateUserPassword($id, $data);
			return Redirect::route('admin.users.password.edit', $id)
					->with('message', 'Change password successful.');
		}
	}

	public function destroyUser($id)
	{
		$user = User::find($id)->delete();

		return Redirect::route('admin.users');
	}

	public function destroyMultipleUser()
	{	
		$users = (Input::get('user_checkboxes'));

		if($users)
		{
			foreach($users as $user)
			{
				$user = User::destroy($user);
			}
		}
		return Redirect::back();

		//$ids = Input::get('user_checkboxes') ? true : false;

	}

	//admin modules

	public function getModulesList()
	{
		$modules = Module::orderBy('created_at', 'desc')
				->get();

		return View::make('admin.modules.index')
			->with('modules', $modules)
			->with('title', 'Admin - List of Users');
	}

	public function createModule()
	{
		return View::make('admin.modules.create')
			->with('title', 'Create Module');
	}

	public function storeModule()
	{
		$input = Input::all();
		$rules = array(
					'module_name' => 'required|min:3|unique:modules',
					'module_slug' => 'required|min:3|unique:modules',
					'description' => 'required|min:20',
					);

		$validation = Validator::make($input, $rules);
		if($validation->fails()) 
		{
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else 
		{
			$data = array(
				'module_name' => Input::get('module_name'),
				'module_slug' => Input::get('module_slug'),
				'description' => Input::get('description'),
				);
			
			$user = Module::adminStoreModule($data);
			return Redirect::route('admin.modules.create')
				->with('message', 'Successfully Added New Module.');
		}
	}

	public function showModule($slug)
	{
		$module = Module::where('module_slug', '=', $slug)->first();

		return Redirect::to('../../'. $module->module_slug . '/1.php');
	}

	public function editModule($slug)
	{
		$module = Module::where('module_slug', '=', $slug)->first();

		return View::make('admin.modules.edit')
			->with('title', 'Edit User')
			->with('module', $module);
	}

	public function updateModule($slug)
	{
		$input = Input::all();

		$rules = array(
			'module_name' => 'required|min:3',
			'module_slug' => 'required|min:3',
			'description' => 'required|min:20',
		);

		$validation = Validator::make($input, $rules);

		if($validation->fails())
		{
			return Redirect::back()->withErrors($validation);
		}
		else
		{			
			$data = array(
				'module_name' => Input::get('module_name'),
				'module_slug' => Input::get('module_slug'),
				'description' => Input::get('description'),
				);

			$module = Module::where('module_slug', '=', $slug)->first();

			Module::adminUpdateModule($module->module_slug, $data);

			return Redirect::route('admin.modules')
							->with('message', 'Update Successful!');
		}

	}

	public function destroyModule($slug)
	{
		$module = Module::where('module_slug', '=', $slug)->delete();

		return Redirect::route('admin.modules');
	}

	public function destroyMultipleModule()
	{	
		$modules = (Input::get('module_checkboxes'));

		if($modules)
		{
			foreach($modules as $module)
			{
				Module::destroy($module);
		/*		echo '<pre>';
				dd($module);
				echo '<pre>';*/
			}
		}
		return Redirect::back();
	}

	//admin questions

	public function getQuestionsList($slug)
	{
		$module = Module::where('module_slug', '=', $slug)->first();

		Session::put('module_slug', $module->module_slug);

		$questions = Question::where('module_id', '=', $module->id)->get();

		return View::make('admin.questions.index')
			->with('module', $module)
			->with('questions', $questions)
			->with('title', 'Admin - List of Module Questions');
	}

	public function createQuestion($slug)
	{
		$module = Module::where('module_slug', '=', $slug)->first();
		$question_types = QuestionType::all();

		return View::make('admin.questions.create')
			->with('module', $module)
			->with('question_types', $question_types)
			->with('title', 'Create Questions');
	}

	public function storeQuestion($slug)
	{
		$module = Module::where('module_slug', '=', $slug)->first();

/*		echo '<pre>';
		dd($module);
		echo '</pre>';*/

		$input = Input::all();
		$rules = array(
					'question' => 'required|min:20',
					'answer' => 'required|min:1',
					);

		$validation = Validator::make($input, $rules);
		if($validation->fails()) 
		{
			return Redirect::back()->withErrors($validation)->withInput();
		}
		else 
		{
			$data = array(
				'question_type' => Input::get('question_type'),
				'question' => Input::get('question'),
				'module_id' => $module->id,
				'choices' => Input::get('choices'),
				'answer' => Input::get('answer')
				);
			
			
			$question = Question::adminStoreQuestion($data);
			return Redirect::route('admin.questions.create', $module->module_slug)
				->with('message', 'Successfully Added New Question.');
		}
	}

	public function editQuestion($id)
	{
		$question = Question::find($id);
		$choices = Choice::where('question_id', '=', $question->id)->get();

	/*	foreach($choices as $choice)
		{
			echo '<pre>';
			print_r($choice->choice);
			echo '</pre>';
		}*/
		

		return View::make('admin.questions.edit')
			->with('question', $question)
			->with('choices', $choices)
			->with('title', 'Edit Question');
			
	}

	public function updateQuestion($id)
	{
		Session::put('question_id', $id);

		$input = Input::all();

		$rules = array(
			'question' => 'required|min:10',
			'answer' => 'required|min:1',
		);

		$validation = Validator::make($input, $rules);

		if($validation->fails())
		{
			return Redirect::back()->withErrors($validation);
		}
		else
		{			
			$data = array(
				'question' => Input::get('question'),
				'answer' => Input::get('answer'),
				'choices' => Input::get('choices'),
				'choice_ids' => Input::get('choice_ids'),
				);
		
			$module = Question::adminUpdateQuestion($id, $data);

			return Redirect::route('admin.questions.edit', Session::get('question_id'))
							->with('message', 'Update Successful!');
		}

	}

	public function destroyQuestion($id)
	{

		$module_slug = Session::get('module_slug');
		$question = Question::find($id)->delete();
		$choices = Choice::deleteChoices($id);

		return Redirect::route('admin.questions', $module_slug);
	}

	//admin exercises

	public function getExercisesList()
	{
		$modules = Module::all();

		return View::make('admin.exercises.index')
			->with('modules', $modules)
			->with('title', 'Admin - List of Exercises');
	}

}