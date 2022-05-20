<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\WaliMurid;
use Illuminate\Http\Request;

class WaliMuridController extends Controller
{
    public function dashboard(){
        return view('wali.dashboard');
    }
    public function index(){
        return view('landing');
    }

    public function loginWaliView(){
        return view('wali.login');
    }
    
    public function registerWaliView(){
        return view('wali.register');
    }
    public function loginWali(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;
        if(Auth::guard('walimurid')->attempt(['email' => $email, 'password' => $password])){

             return redirect()->intended('walimurid/dashboard')
                         ->withSuccess('Signed in');
        }
        else {
            return redirect("walimurid/login")->withSuccess('Login details are not valid');
        }
    }
    public function registerWali(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:wali_murid',
            'password' => 'required|min:5',
            'phone_number' => 'required|regex:/^(08)[0-9]{6,15}/'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        $user = WaliMurid::create($validated);

        // auth()->login($user);
        Auth::guard('walimurid')->login($user);

        return redirect()->to('walimurid/dashboard');
    }
    public function logout(Request $request){
        Auth::guard('walimurid')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
