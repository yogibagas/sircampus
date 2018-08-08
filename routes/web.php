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
<<<<<<< HEAD
Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    // your routes

	Route::get('/', function () {
	    return view('welcome');
	});

	Route::get('/students',function(){
		return view('student');
	});
	Route::resource('student','StudentController');

Route::get('/home', 'HomeController@index')->name('home');
});
=======
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 5e604aefcf6c86a7139127a8ee898aedbe800d78
