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

			$eventlog = new Eventlog;
			$eventlog->user_id = Auth::user()->id;
			$eventlog->action = 'login';
			$eventlog->save();

			if(Auth::user()->role_id == '1')
			{
				return Redirect::route('admin.index', Auth::user()->id);
			}
			else if(Auth::user()->role_id == '2')
			{
				return Redirect::route('teachers.index', Auth::user()->id);	
			}	
			else if(Auth::user()->role_id == '3')
			{
				//return Redirect::route('students.index', Auth::user()->id);
			}
			else if(Auth::user()->role_id == '4')
			{
				//return Redirect::route('parents.index', Auth::user()->id);
			}
			else
			{
				Auth::logout();
			}

		}
		else 
		{
			return Redirect::back()
				->with('message_error', 'Invalid username or password');
		}
	}

}