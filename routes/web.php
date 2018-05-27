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

/*

Route::get('/', function () {
    return view('welcome');
});

*/

Auth::routes();


//Route::get('/home', 'HomeController@index');

Route::get('/',         ['as' => 'front.home',   'uses' => 'Front\PagesController@getHome']);
Route::get('/admin', ['as' => 'admin.dashboard', 'uses' => 'Admin\PagesController@getDashboard']);
Route::get('/admin/blank', ['as' => 'admin.blank', 'uses' => 'Admin\PagesController@getBlank']);

// registration activation routes

Route::get('activation/key/{activation_key}', ['as' => 'activation_key', 'uses' => 'Auth\ActivationKeyController@activateKey']);
Route::get('activation/resend', ['as' =>  'activation_key_resend', 'uses' => 'Auth\ActivationKeyController@showKeyResendForm']);
Route::post('activation/resend', ['as' =>  'activation_key_resend.post', 'uses' => 'Auth\ActivationKeyController@resendKey']);

// forgot_username

Route::get('username/reminder', ['as' =>  'username_reminder', 'uses' => 'Auth\ForgotUsernameController@showForgotUsernameForm']);
Route::post('username/reminder', ['as' =>  'username_reminder.post', 'uses' => 'Auth\ForgotUsernameController@sendUserameReminder']);


//users controlling.....



Route::group(['middleware'=>'admin'], function (){

    Route::resource('admin/users','Admin\AdminUsersController');

});

//Route::resource('admin/users','Admin\AdminUsersController');
