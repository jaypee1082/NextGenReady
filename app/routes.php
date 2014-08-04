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
|Teacher User Routes
|-------------------------------------------------
*/
Route::resource('teachers', 'TeachersController');

/*
|-------------------------------------------------
|Student User Routes
|-------------------------------------------------
*/
Route::resource('users', 'UsersController');

/*
|-------------------------------------------------
|Administrator User Routes
|-------------------------------------------------
*/
Route::resource('admin', 'AdminController');
Route::get('admin/users/list', array('as' => 'admin.users', 'uses' => 'AdminController@getUsersList'));
Route::get('admin/users/create', array('as' => 'admin.users.create', 'uses' => 'AdminController@createUser'));
Route::post('admin/users', array('as' => 'admin.users.store', 'uses' => 'AdminController@storeUser'));
Route::get('admin/moduless/list', array('as' => 'admin.modules', 'uses' => 'AdminController@getModulesList'));
Route::get('admin/questions/list', array('as' => 'admin.questions', 'uses' => 'AdminController@getQuestionsList'));
Route::get('admin/exercises/list', array('as' => 'admin.exercises', 'uses' => 'AdminController@getExercisessList'));

/*
|-------------------------------------------------
|Student User Routes
|-------------------------------------------------
*/
Route::resource('parent', 'ParentsController');



