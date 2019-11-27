<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::permanentRedirect('/', '/dashboard');
Route::get('/dashboard', function() {
    return view('home');
})->middleware('auth');

/*** BUILDING ***/

Route::get('/buildings', 'BuildingController@index')->middleware('auth');
Route::get('/buildings/create', 'BuildingController@create')->middleware('auth');
Route::post('/buildings', 'BuildingController@store')->middleware('auth');
//Route::get('/buildings/{building}', 'BuildingController@show')->middleware('auth');
Route::get('/buildings/{building}/edit', 'BuildingController@edit')->middleware('auth');
Route::patch('/buildings/{building}', 'BuildingController@update')->middleware('auth');
Route::delete('/buildings/{building}', 'BuildingController@destroy')->middleware('auth');

/*
Route::post('/posts/{post}/comments', 'CommentsController@store');
*/


/*
 * Naming conventions (Tutorial Part 11 from minute 6)
 *
 * GET /posts               ->      View all the Posts
 *
 * GET /posts/{id}          ->      View a specific Post
 *
 * GET /posts/create        ->      Display a form to create a new Post
 *
 * POST /posts              ->      Create a new Post in the database (Target for form-action)
 *
 * GET /posts/{id}/edit     ->      Display a form to edit a specified Post
 *
 * PATCH /posts/{id}        ->      Submit the edit form to this one
 *
 * DELETE /posts/{id}       ->      Delete a post
 *
 */
