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

//STUDENT
Route::group(['namespace' => 'Auth', 'prefix' => 'std'], function(){

Route::get('/login', 'Student\LoginController@showLoginForm')->name('std.login');
Route::post('/login', 'Student\LoginController@login')->name('std.login');
Route::post('/logout', 'Student\LoginController@logout')->name('std.logout.submit');
});
Route::group(['middleware' => ['auth:students']], function(){
Route::get('/', 'StudentController@index')->name('std.dashboard');


});
//STAFF
Route::group(['middleware' => 'auth:web'], function() {
// your routes

Route::get('/staff/home', function () {
return view('staff.welcome');
})->name('staff');


Route::get('/staff/students', function(){
return view('staff.student');
});
Route::resource('staff/student', 'StudentController');
Route::get('/staff', 'HomeController@index')->name('home');
});
Route::get('/staff/login', function () {
return view('auth.staff.login');
})->name('sLogin');
Route::get('/staff', function(){
return view('auth.staff.login');
});
        
        
