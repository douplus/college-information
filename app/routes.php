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

Route::get('/', function()
{
	return View::make('departments');
});

Route::get('/courses/{id}', array('as'=>'courses', function($id)
{
	return View::make('courses');
}));

Route::resource('/api/departments', 'DepartmentApiController');
