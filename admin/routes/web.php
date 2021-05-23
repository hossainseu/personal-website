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

Route::get('/','HomeController@HomeIndex');

Route::get('/visitor','VisitorController@VisitorIndex');



Route::get('/courses', 'CoursesController@CoursesIndex');
Route::get('/getCoursesData', 'CoursesController@getCoursesData');
Route::post('/CoursesDelete', 'CoursesController@CoursesDelete');
Route::post('/CoursesDetails', 'CoursesController@getCoursesDetails');
Route::post('/CoursesUpdate', 'CoursesController@CoursesUpdate');
Route::post('/CoursesAdd', 'CoursesController@CoursesAdd');