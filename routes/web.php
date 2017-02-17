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

Route::get('/', function () {
	return 'hola';
});

Route::get('lawyers', function () {
	
	$lawyers = App\Lawyer::all();
	
	return view('lawyers', compact('lawyers'));
});

Route::get('users', function () {
	$users  = App\User::all();
	return view('users', compact('users'));
});