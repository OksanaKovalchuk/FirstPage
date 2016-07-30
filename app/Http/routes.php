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
<<<<<<< HEAD
//Route::group(['middleware' => 'locale'], function(){}
=======

>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
Route::get('/', function () {
    return view('welcome');
});

Route::get('painters','MainController@painters')->name('name.painters');
<<<<<<< HEAD
Route::get('painters/{painter}','MainController@paintersSingle')->name('painters.single');
Route::auth();
Route::get('/home', 'HomeController@index');
//Route::post('/language', [
////    'before' => 'csrf',
//    'as' => 'language-chooser',
//    'uses' => 'MainController@chooser'
//]);
Route::get('main','MainController@index')->name('name.main');
Route::get('pictures','MainController@stories')->name('stories');

//pictures and actions with them
=======
Route::get('painters/{painterId}','MainController@paintersSingle')->name('name.painters.single');
Route::auth();
Route::get('/home', 'HomeController@index');

Route::get('main','MainController@index')->name('name.main');
Route::get('pictures','MainController@stories')->name('stories');

//pictures and actions with them 
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
Route::get('pictures/create','MainController@pictureCreate')->name('picture.create');
Route::get('pictures/{picture}','MainController@pictureShow')->name('pictures.show');
Route::post('pictures/{picture}/update','MainController@pictureUpdate')->name('picture.update');
Route::get('pictures/{picture}/edit','MainController@pictureEdit')->name('pictures.edit')->middleware('admin');
Route::post('pictures/store','MainController@pictureStore')->name('pictures.store');
Route::delete('pictures/{picture}/','MainController@pictureDestroy')->name('picture.destroy')->middleware('admin');
//contact
Route::get('contactform',
    ['as' => 'contactform', 'uses' => 'MainController@create']);
Route::post('contactform',
    ['as' => 'contactform', 'uses' => 'MainController@store']);
//for trying sth
Route::get('training', 'MainController@train')->name('name.training');
Route::group(['middleware' => 'web'],function(){
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
//videocourse-making blog- study
Route::get('story','PostController@index')->name('story.index');
Route::get('story/create','PostController@create')->name('story.create');
Route::post('story/{story}','PostController@update')->name('story.update');
Route::get('story/{story}','PostController@show')->name('story.show');
Route::get('story/{story}/edit','PostController@edit')->name('story.edit')->middleware('admin');
Route::post('store','PostController@store')->name('story.store');
Route::delete('story/{story}/','PostController@destroy')->name('story.destroy')->middleware('admin');

Route::get('testrepo', 'PostController@allPosts');

Route::get('dashboard', [
    'middleware'=> ['web','can:admin'],
    'uses' => 'HomeController@index',
]);

<<<<<<< HEAD
//Route::get('')

Route::resource('products-list', 'RestController');
Route::resource('picture-list', 'PictureController');
=======
//Route::get('')
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
