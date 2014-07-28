<?php

class UsersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
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
	 * GET /users/{id}/edit
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
	 * PUT /users/{id}
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
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function userLoginAttempt() 
	{

		$data = array(
			'username' => Input::get('username'),
			'password' => Input::get('password'),
		);

		if(Auth::attempt($data)) 
		{

			$user = User::getUserInfo(Auth::user()->id)->first();

			$role = $user->role->role_name;

			if($role == 'Administrator')
			{
				return Redirect::route('admin.index');
			} 
			else if($role == 'Teacher')
			{
				return Redirect::route('teacher.index');
			}
			else if($role == 'Student')
			{
				return Redirect::route('student.index');
			}
			else
			{
				return Redirect::route('parent.index');
			}

		}
		else 
		{
			return Redirect::back()
				->with('message_error', 'Invalid username or password');
		}
	}

}