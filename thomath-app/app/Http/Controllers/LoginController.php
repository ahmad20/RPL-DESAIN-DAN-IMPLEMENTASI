<?php

namespace App\Http\Controllers;

use App\Models\WaliMurid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginWali(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        // $user = WaliMurid::where('email', '=', $email)->where('password','=', $password)->exists();
        if(Auth::guard('walimurid')->attempt(['email' => $email, 'password' => $password])){

             return redirect()->intended('walimurid/dashboard')
                         ->withSuccess('Signed in');
        }
        else {
            return redirect("walimurid/login")->withSuccess('Login details are not valid');
        }

        // if ($user) {
        //     return redirect()->intended('/dashboard')
        //                 ->withSuccess('Signed in');
        // }
        // else {
        //     return redirect("login-wali")->withSuccess('Login details are not valid');
        // }
    }
}
