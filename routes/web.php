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
    return view('welcome');
});
Route::get('/home', function () {
    return view('index');
});
//Route::get('course/present', 'CourseController@present')->name('course.present');
//Route::get('user/create', 'UserController@create')->name('user.create');
Route::post('/user/store', 'UserController@store');
Route::get('/user/create', 'UserController@create')->name('user.create');
/*Route::post('/user/create', function () {
    return view('user.create');
});*/