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

Route::resource('about', 'AboutController', ['only' => ['index']]);

Route::get('contact',[ 'as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact',['post' => 'contact_store', 'uses' => 'ContactController@store']);

Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin', ]);
Route::get('logout', ['as' => 'logout','uses' => 'Auth\AuthController@getLogout']);
Route::get('register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister', ]);

Route::resource('discounts', 'DiscountsController', ['only' => ['index']]);
//Route::get('discounts', [ 'middleware' => 'auth','uses' => 'DiscountsController@index' ]);
Route::controllers([

    'password' => 'Auth\PasswordController',
]);