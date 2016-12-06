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

Route::get('users', ['uses' => 'UserController@index']);

Route::get('users/create',['uses'=>'UserController@create']);

Route::post('users', ['uses'=>'UserController@store']);

/*
Route::get('users', function () {
    $users = [
        '0'=> [
            'first_name'=>'Denis',
            'last_name'=>'Koshel',
            'location'=>'Ukraine'
        ],
        '1'=> [
            'first_name'=>'Igor',
            'last_name'=>'Buliuk',
            'location'=>'Ukraine'
        ]
    ];
    return $users;
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/profile', ['uses' => 'PagesController@profile']);

Route::get('/settings', ['uses' => 'PagesController@settings']);