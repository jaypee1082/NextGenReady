<?php

class Eventlog extends Eloquent {

	protected $table = 'eventlogs';

	public function users()
	{
		return $this->belongsTo('User', 'user_id');
	}

}