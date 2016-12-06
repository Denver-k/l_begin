<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function profile() {
        return view('pages.profile');
    }
    
    public function settings() {
        return view('pages.settings');
    }
}
