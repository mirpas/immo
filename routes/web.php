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

// GET ROUTES

Route::permanentRedirect('/', '/dashboard');

Auth::routes();

Route::get('/dashboard', function() {
    return view('home');
})->middleware('auth');

Route::get('/building', 'BuildingController@index')->middleware('auth');
Route::get('/building/{building}/edit', 'BuildingController@edit')->middleware('auth');

Route::get('/flat', function() {
    return view('home');
})->middleware('auth');

Route::get('/tenant', function() {
    return view('home');
})->middleware('auth');

Route::get('/contract', function() {
    return view('home');
})->middleware('auth');

Route::get('/meter', function() {
    return view('home');
})->middleware('auth');

Route::get('/meter-status', function() {
    return view('home');
})->middleware('auth');

// POST ROUTES


/*

// GET ROUTES

Route::get('/', 'PostsController@index');
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');

// POST ROUTES

Route::post('/posts', 'PostsController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');

*/
