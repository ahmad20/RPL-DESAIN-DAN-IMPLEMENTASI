<?php

namespace App\Http\Controllers;
use Auth;
use Config;
use App\Models\Course;
use App\Models\Pengajar;
use App\Models\TestPaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CourseController;

class PengajarController extends Controller
{
    public function dashboard(){
        $pengajar = Auth()->guard('pengajar')->user();
        $course = Course::where('created_by', $pengajar->id_pengajar)->get();
        $arr = array();
        $i = 0;
        foreach($course as $c){
            $arr[$i] = TestPaper::where('id_course', $c->id_course)->get();
            $i = $i+1;
        }
        return view('pengajar.dashboard', ['courses'=>$course, 'testpaper' => $arr, 'pengajar'=>$pengajar]);
    }
    public function singleTestView(Request $request, $id_test){
        $test = TestPaper::find($id_test);
        return view('pengajar.singletest', ['test'=>$test]);
    }
    public function singleCourseView(Request $request, $id_course){
        $course = Course::find($id_course);
        return view('pengajar.singlecourse', ['c'=>$course]);
    }
    public function siswaTaskView($id_test, $id_siswa){
        $test = TestPaper::findOrFail($id_test);
        $test_siswa = DB::table('siswa_test_paper')
                        ->where('test_paper_id_testpaper', $id_test)
                        ->where('siswa_id_siswa', $id_siswa)->first();
        // return dd($test_siswa);
        return view('pengajar.givescore', ['test_siswa'=>$test_siswa, 'test'=>$test]);
    }
    public function giveScore(Request $request, $id_test, $id_siswa){
        $validated = $request->validate([
          'score'=>'required|integer',  
        ]);
        DB::table('siswa_test_paper')
                    ->where('test_paper_id_testpaper', $id_test)
                    ->where('siswa_id_siswa', $id_siswa)
                    ->update(['score' => $request->score]);
        return redirect()->to('/pengajar/dashboard');
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

             return redirect()->to('/pengajar/dashboard');
        }
        else {
            return redirect("/pengajar/login")->withSuccess('Login details are not valid');
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
