<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Auth 
//Register
Route::get('/register',function(){
    return view('Log.register');
});

Route::post('/register','Auth\RegisterController@register');

//Logout
Route::get('/logout','Auth\LoginController@logout');

//Login
Route::get('/login',function(){
    return view('Log.login');
});

Route::post('/login','Auth\LoginController@login');

Route::group(['prefix' => 'admin' ,'middleware' =>'auth'],function(){

    Route::get('/managers','ManagerController@index');
    Route::get('/supervisors','Supervisorcontroller@index');
    Route::get('/staff','StaffController@index');
    Route::get('/normaluser','NormalUserController@index');

    Route::get('/home','UserController@index');
    Route::get('/user/{id}/edit','UserController@edit');
    Route::post('/user/{id}/edit','UserController@update');
});





