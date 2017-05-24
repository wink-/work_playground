<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Pages\PagesController@solutions');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::resource('posts', 'PostsController');
    Route::get('solutions', 'Pages\PagesController@solutions');
    Route::get('analysis', 'Pages\PagesController@solutions');
    Route::get('ovens', 'Pages\PagesController@ovens');
    Route::get('amps', 'Pages\PagesController@amps');
});
