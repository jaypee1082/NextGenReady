<?php

class Role extends Eloquent {
	protected $table = 'roles';

	public function users()
	{
		return $this->belongsToMany('User', 'user_id', 'id');
	}
}