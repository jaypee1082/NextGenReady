<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/* 
	|--------------------------------------------------------------------------
	| Relationship
	|--------------------------------------------------------------------------
 	*/

	public function role()
	{
		return $this->hasOne('Role', 'id', 'role_id');
	}

	public static function adminStoreUser($data) 
	{
		$user = new User;
		$user->username = $data['username'];
		$user->password = Hash::make($data['password']);
		$user->role_id = $data['role_id'];
		$user->first_name = $data['first_name'];
		$user->last_name = $data['last_name'];
		$user->gender = $data['gender'];
		$user->save();

		return User::find($user->id);
	}

	public static function adminUpdateUser($id, $data) 
	{
		$user = User::find($id);
		$user->username = $data['username'];
		$user->role_id = $data['role_id'];
		$user->first_name = $data['first_name'];
		$user->last_name = $data['last_name'];
		$user->gender = $data['gender'];
		$user->push();
	}

	public static function updateUserPassword($id, $data) 
	{
		$user = User::find($id);
		$user->password = Hash::make($data['password']);
		$user->push();
	}
}
