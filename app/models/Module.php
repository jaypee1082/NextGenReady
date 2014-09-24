<?php

class Module extends Eloquent {

	protected $table = 'modules';

	public static function adminStoreModule($data) 
	{
		$module = new Module;
		$module->module_name = $data['module_name'];
		$module->module_slug = $data['module_slug'];
		$module->description = $data['description'];
		$module->save();

		return Module::find($module->id);
	}

	public static function adminUpdateModule($slug, $data) 
	{
		$module = Module::where('module_slug', '=', $slug)->first();
		$module->module_name = $data['module_name'];
		$module->module_slug = $data['module_slug'];
		$module->description = $data['description'];
		$module->push();
	}

	public function questions()
	{
		return $this->hasMany('Question');
	}

	public function exercises()
	{
		return $this->hasMany('Exercise');
	}
}