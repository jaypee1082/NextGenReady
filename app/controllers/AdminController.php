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

	public function getUsersList()
	{
		$users = User::all();

		return View::make('admin.users.index')
			->with('users', $users)
			->with('title', 'Admin - List of Users');
	}

	public function getModulesList()
	{
		$users = User::all();

		return View::make('admin.users.index')
			->with('users', $users)
			->with('title', 'Admin - List of Users');
	}

	public function getQuestionsList()
	{
		$users = User::all();

		return View::make('admin.users.index')
			->with('users', $users)
			->with('title', 'Admin - List of Users');
	}

	public function getExercisesList()
	{
		$users = User::all();

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

}