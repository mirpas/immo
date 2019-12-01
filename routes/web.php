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

Auth::routes([
	'register' => false
]);

Route::permanentRedirect('/', '/dashboard');

Route::get('dashboard', function() {
    return view('dashboard');
})->middleware('auth');

Route::resource('buildings', 'BuildingController', [
	'except' => 'show']
)->middleware('auth');

Route::resource('flats', 'FlatController', [
	'except' => 'show'
])->middleware('auth');

Route::resource('meters', 'MeterController', [
	'except' => 'show'
])->middleware('auth');

Route::resource('contacts', 'ContactController', [
	'except' => 'show'
])->middleware('auth');

Route::resource('contracts', 'ContractController', [
	'except' => 'show'
])->middleware('auth');
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
