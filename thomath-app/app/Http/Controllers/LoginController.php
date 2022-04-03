<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaliMurid;

class LoginController extends Controller
{
    public function loginWali(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        $user = WaliMurid::where('email', '=', $email)->where('password','=', $password)->exists();


        if ($user) {
            return redirect()->intended('/dashboard')
                        ->withSuccess('Signed in');
        }
        else {
            return redirect("login-wali")->withSuccess('Login details are not valid');
        }
    }
}
