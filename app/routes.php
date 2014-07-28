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

/*-------------------------------------------------*/
/*----------------- Login Routes ------------------*/
/*-------------------------------------------------*/
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'));

/*-------------------------------------------------*/
/*---------------- User Routes -----------------*/
/*-------------------------------------------------*/
Route::resource('users', 'UsersController');
Route::post('users/login/attempt', array('as' => 'users.login.attempt', 'uses' => 'UsersController@userLoginAttempt'));

Route::get('logout',  array('as' => 'users.logout', function() {
    Auth::logout();
    return Redirect::to('/');
}));

/*-------------------------------------------------*/
/*---------------- Teacher Routes -----------------*/
/*-------------------------------------------------*/
Route::resource('teachers', 'TeachersController');

/*-------------------------------------------------*/
/*----------------- Admin Routes ------------------*/
/*-------------------------------------------------*/
Route::resource('admin', 'AdminController');