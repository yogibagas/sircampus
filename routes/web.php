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
Route::group(['middleware' => 'auth:web'],function(){
Route::get('/', 'HomeController@index')->name('home');
});

Route::group(['prefix' => 'staff'], function () {
    //Login Routes...
    Route::get('/login','StaffAuth\LoginController@loginPage')->name('staff.login');
    Route::post('/login','StaffAuth\LoginController@login')->name('staff.loginPost');
    Route::get('/logout','StaffAuth\LoginController@logout')->name('staff.logout');

    // database Routes...
    
    Route::get('/register', 'StaffAuth\RegisterController@registrationPage')->name('staff.register');
    Route::post('/register', 'StaffAuth\RegisterController@register')->name('staff.registerPost');

    Route::group(['middleware' => 'auth.staff'],function(){
    Route::get('/', 'StaffController@index')->name('staff');
    Route::resource('student', 'Staff\StudentController');
    Route::get('/student/{id}/delete', 'Staff\StudentController@delete')->name('student.delete');

    Route::resource('lecture','Staff\LectureController');
    Route::get('/lecture/{id}/delete','Staff\LectureController@delete')->name('lecture.delete');
    
    Route::resource('course','Staff\CourseController');
    Route::get('/course/{id}/delete','Staff\CourseController@delete')->name('course.delete');
    
    Route::resource('course','Staff\CourseController');
    Route::get('/course/{id}/delete','Staff\CourseController@delete')->name('course.delete');
    
    Route::resource('class','Staff\KlasController');
    Route::get('/class/{id}/delete','Staff\KlasController@delete')->name('course.delete');
    
    Route::resource('schedule','Staff\ScheduleController');
    Route::get('/schedule/{id}/delete','Staff\ScheduleController@delete')->name('schedule.delete');
    });
}); 
