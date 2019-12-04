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

Route::permanentRedirect('/', 'buildings/select');

Route::get('dashboard', function() {
    return view('dashboard');
})
	->middleware('auth')
	->name('dashboard');

Route::resource('meters', 'MeterController')
	->except(['show'])
	->middleware('auth');

Route::resource('contacts', 'ContactController')
	->except(['show'])
	->middleware('auth');

Route::resource('contracts', 'ContractController')
	->except(['show'])
	->middleware('auth');

Route::resource('buildings', 'BuildingController')
	->except(['show'])
	->middleware('auth');

Route::resource('flats', 'FlatController')
	->except(['show'])
	->middleware('auth');

Route::get('buildings/select', 'BuildingSelectController@index')
	->middleware('auth')
	->name('buildings.select.index');

Route::post('buildings/select', 'BuildingSelectController@select')
	->middleware('auth')
	->name('buildings.select.select');
