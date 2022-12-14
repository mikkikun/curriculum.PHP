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
    return view('users/login');
});

Route::group(['prefix' => 'users'], function() {
    Route::get('login', 'Users\LoginController@add');
    Route::get('register', 'Users\RegisterController@getRegister');
    Route::post('register', 'Users\RegisterController@postRegister');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('posts', 'Admin\PostsController@add');
});

