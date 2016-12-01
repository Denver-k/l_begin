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
<<<<<<< HEAD
=======

Route::get('users', ['uses' => 'UserController@index']);

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
>>>>>>> 5931674b8a7c984fdacf17e23e43e97c9e81a45f
