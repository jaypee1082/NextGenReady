<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
|-------------------------------------------------
|Login Routes
|-------------------------------------------------
*/
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'));

Route::post('users/login/attempt', array('as' => 'users.login.attempt', 'uses' => 'UsersController@userLoginAttempt'));
Route::get('logout',  array('as' => 'users.logout', function() {
    Auth::logout();
   //Session::flush();
    return Redirect::to('/');
}));

/*
|-------------------------------------------------
|Teacher Routes
|-------------------------------------------------
*/
Route::resource('teachers', 'TeachersController');

/*
|-------------------------------------------------
|Student Routes
|-------------------------------------------------
*/
Route::resource('users', 'UsersController');

/*
|-------------------------------------------------
|Parents Routes
|-------------------------------------------------
*/
Route::resource('parent', 'ParentsController');

/*
|-------------------------------------------------
|Administrator Routes
|-------------------------------------------------
*/
Route::resource('admin', 'AdminController');

/* -- Administrator User Routes -- */

Route::get('admin/users/list', array('as' => 'admin.users', 'uses' => 'AdminController@getUsersList'));
Route::get('admin/users/create', array('as' => 'admin.users.create', 'uses' => 'AdminController@createUser'));
Route::post('admin/users', array('as' => 'admin.users.store', 'uses' => 'AdminController@storeUser'));
Route::get('admin/user/{id?}/edit', array('as' => 'admin.users.edit', 'uses' => 'AdminController@editUser'));
Route::patch('admin/user/{id?}/update', array('as' => 'admin.users.update', 'uses' => 'AdminController@updateUser'));
Route::get('admin/user/{id?}/password/edit', array('as' => 'admin.users.password.edit', 'uses' => 'AdminController@editUserPassword'));
Route::patch('admin/user/{id?}/password/update', array('as' => 'admin.users.password.update', 'uses' => 'AdminController@updateUserPassword'));
Route::get('admin/user/{id?}/delete', array('as' => 'admin.users.destroy', 'uses' => 'AdminController@destroyUser'));
Route::post('admin/users/delete', array('as' => 'admin.users.multiple.destroy', 'uses' => 'AdminController@destroyMultipleUser'));

/* -- Administrator Module Routes -- */

Route::get('admin/modules/list', array('as' => 'admin.modules', 'uses' => 'AdminController@getModulesList'));
Route::get('admin/modules/create', array('as' => 'admin.modules.create', 'uses' => 'AdminController@createModule'));
Route::post('admin/modules', array('as' => 'admin.modules.store', 'uses' => 'AdminController@storeModule'));
Route::get('admin/module/{id?}/edit', array('as' => 'admin.modules.edit', 'uses' => 'AdminController@editModule'));
Route::patch('admin/module/{id?}/update', array('as' => 'admin.modules.update', 'uses' => 'AdminController@updateModule'));
Route::get('admin/module/{id?}/delete', array('as' => 'admin.modules.destroy', 'uses' => 'AdminController@destroyModule'));

/* -- Administrator Question Routes -- */

Route::get('admin/module/questions/list/{id?}', array('as' => 'admin.questions', 'uses' => 'AdminController@getQuestionsList'));
Route::get('admin/modules/questions/{id?}/create', array('as' => 'admin.questions.create', 'uses' => 'AdminController@createQuestion'));
Route::post('admin/modules/questions', array('as' => 'admin.questions.store', 'uses' => 'AdminController@storeQuestion'));
Route::get('admin/module/question/{id?}/edit', array('as' => 'admin.questions.edit', 'uses' => 'AdminController@editQuestion'));
Route::get('admin/module/{id?}/delete', array('as' => 'admin.questions.destroy', 'uses' => 'AdminController@destroyQuestion'));

/* -- Administrator Exercise Routes -- */

Route::get('admin/exercises/list', array('as' => 'admin.exercises', 'uses' => 'AdminController@getExercisesList'));

//Route::get('admin/module/sample', array('as' => 'admin.module.sample', 'uses' => 'ModulesController@getSample'));
//Route::post('admin/module/store', array('as' => 'admin.module.store', 'uses' => 'ModulesController@storeSample'));

Route::get('admin/module/{id?}/show', array('as' => 'admin.modules.show', 'uses' => 'AdminController@showModule'));





