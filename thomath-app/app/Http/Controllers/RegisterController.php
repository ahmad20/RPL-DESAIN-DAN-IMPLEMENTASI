<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\WaliMurid;

class RegisterController extends Controller
{
    public function registerWali(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:wali_murid',
            'password' => 'required|min:5',
            'phone_number' => 'required|regex:/^(08)[0-9]{6,15}/'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        $user = WaliMurid::create($validated);

        auth()->login($user);

        return redirect()->to('walimurid/dashboard');
    }
}
