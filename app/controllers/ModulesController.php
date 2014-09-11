<?php

class ModulesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /modules
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /modules/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /modules
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /modules/{id}
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
	 * GET /modules/{id}/edit
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
	 * PUT /modules/{id}
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
	 * DELETE /modules/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function getSample()
	{
		
		$user = Module::all();

		return $user;
	}

	public function storeSample()
	{
		$input = Input::all();
		$rules = array(
					'username' => 'required|min:3|unique:users',
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
				'password' => '1234aA',
				'role_id' => 4,
				'first_name' => 'WORK',
				'last_name' => 'LIKE A MAGIC',
				'gender' => 'GAY',
				);
			
			$user = User::adminStoreUser($data);
		}
	}

}