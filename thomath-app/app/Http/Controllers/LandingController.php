<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('landing');
    }

    public function loginWaliView(){
        return view('wali.login');
    }
    
    public function registerWaliView(){
        return view('wali.register');
    }
}
