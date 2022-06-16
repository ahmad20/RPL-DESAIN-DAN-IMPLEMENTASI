<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\WaliMurid;
use Illuminate\Http\Request;

class WaliMuridController extends Controller
{
    /**
     * function untuk menampilkan view dashboard dari seorang wali
     */
    public function dashboard(){
        return view('wali.dashboard');
    }
    /**
     * function untuk menampilan view landing
     */
    public function index(){
        return view('landing');
    }

    /**
     * menampilkan view login dari seorang wali
     */
    public function loginWaliView(){
        return view('wali.login');
    }
    
    /**
     * Menampilkan view register dari seorang wali
     */
    public function registerWaliView(){
        return view('wali.register');
    }

    /**
     * Function post login ke database
     */
    public function loginWali(Request $request){

        /**
         * Request inputan dari user
         * email dan password harus ada (required)
         */
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        /**
         * email dan password dari inputan 
         * dimasukkan kedalam variabel
         * email dan password
         */
        $email = $request->email;
        $password = $request->password;

        /**
         * Mengecek email dan password yang dimasukkan
         * ada dalam database table walimurd
         */
        if(Auth::guard('walimurid')->attempt(['email' => $email, 'password' => $password])){

            /** Jika ada maka akan di redirect ke dashboard walimurrid
             * dengan message Signed in
             */
             return redirect()->intended('walimurid/dashboard')
                         ->withSuccess('Signed in');
        }
        else {
            /**
             * Jika tidak ada dalam database, maka di redirect
             * ke halaman login lagi
             * dengan message Login details are not valid
             */
            return redirect("walimurid/login")->withSuccess('Login details are not valid');
        }
    }

    /**
     * Function untuk register seorang wali
     */
    public function registerWali(Request $request){
        /**
         * memvalidasi request dengan attribut
         * name, email, password, phone number required
         */
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:wali_murid',
            'password' => 'required|min:5',
            'phone_number' => 'required|regex:/^(08)[0-9]{6,15}/'
        ]);
        /**
         * inputan password di encrypt laravel
         */
        $validated['password'] = bcrypt($validated['password']);
        /**
         * Create inputan yang ada di validate
         * ke table Wali Murid
         * dan disimpan ke dalam variabel user
         */
        $user = WaliMurid::create($validated);


        // auth()->login($user);
        Auth::guard('walimurid')->login($user);

        /**di redirect ke dashboard walimurid */

        return redirect()->to('walimurid/dashboard');
    }
    /**
     * Function untuk logout
     */
    public function logout(Request $request){
        /** Menghapus session dan redirect ke landingS */
        Auth::guard('walimurid')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
