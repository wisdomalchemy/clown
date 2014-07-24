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

//Route::get('/', function()
//{
//	return View::make('hello');
//});



//Main redirect
Route::get('/', function()
{
	Redirect::to('items');
});

Route::get('/items', 'ManageItemsController@getItems');
Route::post('/items', 'ManageItemsController@postItems');

//API Routes for autocomplete
Route::get('/api/allItemNumbers', 'AutocompleteController@getItemNumbers');
Route::get('/api/allItemDesc', 'AutocompleteController@getItemDesc');
Route::get('/api/allSlotLoc', 'AutocompleteController@getSlotLoc');
Route::get('/api/allPackSize', 'AutocompleteController@getPackSize');