<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', array('uses' => 'homeController@showHome', 'as' => 'home'));

Route::get('/projekt/{id}', array('uses' => 'projektController@showProjekt', 'as' => 'projekt'));
// Route::get('/home', array('uses' => 'homeController@showHome', 'as' => 'home'));



Route::get('test', function () {
    return view('test');
});
Route::get('bob', function () {
    return view('bob');
});
Route::get('/login', array('uses' => 'loginController@showLogin', 'as' => 'login'));
Route::post('/sendlogin', array('uses' => 'loginController@sendLogin', 'as' => 'sendLogin'));
Route::get('/logout', array('uses' => 'loginController@sendLogout', 'as' => 'logout'));