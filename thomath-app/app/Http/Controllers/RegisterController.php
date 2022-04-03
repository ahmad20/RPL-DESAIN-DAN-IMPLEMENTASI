<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\WaliMurid;

class RegisterController extends Controller
{
    public function registerWali(){
        $this->validate(request(), [
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'no_hp' => 'required'
        ]);
        $user = WaliMurid::create(request(['nama', 'email', 'password', 'no_hp']));

        auth()->login($user);

        return redirect()->to('/dashboard');
    }
}
