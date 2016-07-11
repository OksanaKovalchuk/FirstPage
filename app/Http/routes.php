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

Route::get('/', function () {
    return view('welcome');
});

Route::get('main','MainController@index')->name('name.main');
Route::get('stories','MainController@stories')->name('name.stories');
Route::get('painters','MainController@painters')->name('name.painters');
Route::get('contact','MainController@contact')->name('name.contact');
Route::auth();

Route::get('/home', 'HomeController@index');
