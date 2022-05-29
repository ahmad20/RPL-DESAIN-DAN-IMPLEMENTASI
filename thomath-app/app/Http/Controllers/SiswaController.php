<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function dashboard(){
        $siswa = Auth()->guard('siswa')->user();
        $courses = $siswa->course;
        return view('siswa.dashboard',['siswa'=>$siswa,'courses'=>$courses]);
    }
    public function courseView(){
        $siswa = Auth()->guard('siswa')->user();
        $courses = Course::all();
        // return dd($courses);
        return view('siswa.course', ['siswa'=>$siswa,'courses'=>$courses]);
    }
    public function assignCourse(Request $request, $id_course){
        $siswa = Auth()->guard('siswa')->user();
        $course = Course::findOrFail($id_course);
        // if($siswa->id_siswa==)

        foreach($siswa->course->all() as $ss){
            //siswa sudah terdaftar di course tersebut
            if($course->id_course==$ss->id_course){
                //bisa redirect ke course langsung
                return redirect()->to('siswa/dashboard')->with('success', 'Kamu Sudah Masuk');
            }
        }
        $siswa->course()->attach($course);
        return redirect()->to('siswa/dashboard')->with('success', 'berhasil menambahkan');
    }
    public function singleCourseView($id_course){
        $course = Course::findOrFail($id_course);
        $cm = $course->coursematerial;
        if ($cm==null){
            $cm="Kosong";
        }
        return view('siswa.singlecourse', ['course'=>$course, 'cm'=>$cm]);
    }
    public function loginSiswaView(){
        return view('siswa.login');
    }
    
    public function registerSiswaView(){
        return view('siswa.register');
    }
    public function loginSiswa(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;
        if(Auth::guard('siswa')->attempt(['email' => $email, 'password' => $password])){

             return redirect()->to('/siswa/dashboard');
                        //  ->withSuccess('Signed in');
        }
        else {
            return redirect("siswa/login")->withSuccess('Login details are not valid');
        }
    }
    public function registerSiswa(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:siswa',
            'password' => 'required|min:5',
            'phone_number' => 'required|regex:/^(08)[0-9]{6,15}/'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        $user = Siswa::create($validated);

        Auth::guard('siswa')->login($user);

        return redirect()->to('siswa/dashboard');
    }
    public function logout(Request $request){
        Auth::guard('siswa')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
