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
Route::group(['middleware' => ['auth']], function() {
    // your routes

	Route::get('/staff', function () {
	    return view('welcome');
	});

	Route::get('/staff/students',function(){
		return view('student');
	});
	Route::resource('student','StudentController');

Route::get('/', 'HomeController@index')->name('home');
});
