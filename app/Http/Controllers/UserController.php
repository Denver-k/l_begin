<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        //return $users;
        return view('admin.users.index', compact('users'));
    }
    
    public function create(){
        return view('admin.users.create');
    }
    
    public function store(Request $request){
        
        User::create($request->all());
        return 'success';
        //return $request->all();
    }
}
