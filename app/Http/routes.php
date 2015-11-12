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

Route::get('home',
  ['as' => 'home', 'uses' => 'FormController@create']);

Route::post('home', 
  ['as' => 'home_store', 'uses' => 'FormController@store']);










//  Route::get('/home', function () {

//      return view('home');
//  });

//  Route::get('contact', 'ContactController@showForm');


// Route::post('contact', 'ContactController@handleFormPost');



//http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/grab-all-comments-from-database

//http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/grab-all-comments-from-database


