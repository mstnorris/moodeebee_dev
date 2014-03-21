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
	return View::make('hello');
});

Route::get('one', function()
{
    return "1";
});

Route::get('two', function()
{
    return "2";
});

Route::get('three', function()
{
    return "3";
});

Route::get('four', function()
{
    return "4";
});