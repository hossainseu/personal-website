<?php
Route::get('/','HomeController@HomeIndex');


Route::get('/Courses','CoursesController@CoursePage');
Route::get('/Policy','PolicyController@PolicyPage');
Route::get('/Terms','TermsController@TermsPage');

