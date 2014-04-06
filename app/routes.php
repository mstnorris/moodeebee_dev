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

Route::resource('users', 'UsersController');
Route::resource('artists', 'ArtistsController');
Route::resource('albums', 'AlbumsController');
Route::resource('tracks', 'TracksController');

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

Route::get('five', function()
{
    return "5";
});

Route::get('six', function()
{
    return "6";
});

Route::get('seven', function()
{
    return "7";
});