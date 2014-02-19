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


Route::resource('artists', 'ArtistsController');

Route::resource('groups', 'GroupsController');

Route::resource('likes', 'LikesController');

Route::resource('grouprates', 'GroupratesController');

Route::resource('likes', 'LikesController');

Route::resource('artworks', 'ArtworksController');