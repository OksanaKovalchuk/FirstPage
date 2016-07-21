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
Route::auth();
Route::get('/home', 'HomeController@index');

Route::get('contactform',
    ['as' => 'contactform', 'uses' => 'MainController@create']);
Route::post('contactform',
    ['as' => 'contactform', 'uses' => 'MainController@store']);
Route::get('training', 'MainController@train')->name('name.training');
Route::group(['middleware' => 'web'],function(){
Route::auth();
Route::get('form',function(){
        return view('pages.contactform');
    });
Route::get('access',function(){
     $user=Auth::user();
     if ($user->admin == true) {
         echo 'you have access';
     } else {
         echo 'you don\'t have access' ;
     }
})->middleware('auth');
});
//Route::resources(['PostController']);
Route::get('story','PostController@index')->name('story.index');
Route::get('story/create','PostController@create')->name('story.create');
Route::post('story/{story}','PostController@update')->name('story.update');
Route::get('story/{story}','PostController@show')->name('story.show');
Route::get('story/{story}/edit','PostController@edit')->name('story.edit');
Route::post('store','PostController@store')->name('story.store');
Route::delete('story/{story}/','PostController@destroy')->name('story.destroy');

Route::get('testrepo', 'PostController@allPosts');
Route::auth();

Route::get('dashboard', [
    'middleware'=> ['web','can:admin'],
    'uses' => 'HomeController@index',
]);

//Route::get('')