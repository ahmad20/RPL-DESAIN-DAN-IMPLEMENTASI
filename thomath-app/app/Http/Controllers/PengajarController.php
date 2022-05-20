<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Pengajar;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function dashboard(){
        return view('pengajar.dashboard');
    }
    public function index(){
        return view('landing');
    }

    public function loginPengajarView(){
        return view('pengajar.login');
    }
    
    public function registerPengajarView(){
        return view('pengajar.register');
    }
    public function loginPengajar(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;
        if(Auth::guard('pengajar')->attempt(['email' => $email, 'password' => $password])){

             return redirect()->intended('pengajar/dashboard')
                         ->withSuccess('Signed in');
        }
        else {
            return redirect("pengajar/login")->withSuccess('Login details are not valid');
        }
    }
    public function registerPengajar(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:pengajar',
            'password' => 'required|min:5',
            'phone_number' => 'required|regex:/^(08)[0-9]{6,15}/'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        $user = Pengajar::create($validated);

        Auth::guard('pengajar')->login($user);

        return redirect()->to('pengajar/dashboard');
    }
    public function logout(Request $request){
        Auth::guard('pengajar')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
