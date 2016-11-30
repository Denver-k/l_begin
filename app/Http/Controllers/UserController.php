<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
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
    }
}
