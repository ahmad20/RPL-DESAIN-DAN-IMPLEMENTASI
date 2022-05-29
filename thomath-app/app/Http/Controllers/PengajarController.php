<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Course;
use App\Models\Pengajar;
use App\Models\TestPaper;
use Illuminate\Http\Request;
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
        // $testpaper = TestPaper::where('id_course', $course->id_course)->get();
        return view('pengajar.dashboard', ['courses'=>$course, 'testpaper' => $arr, 'pengajar'=>$pengajar]);
    }
    public function singleCourseView(Request $request, $id_course){
        $course = Course::find($id_course);
        return view('pengajar.singlecourse', ['c'=>$course]);
    }
    // public function index(){
    //     return view('landing');
    // }
    public function searchVideoView(){
        return view('ai.video', ['data'=>"Silakan Lakukan Pencarian"]);
    }
    public function searchVideo(Request $request){
        /**$curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://google-search3.p.rapidapi.com/api/v1/video/q=bilanagn%20bulat",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-Proxy-Location: ID",
                "X-RapidAPI-Host: google-search3.p.rapidapi.com",
                "X-RapidAPI-Key: 4c4c9aa20fmsh40a041d870ab982p16525djsnae558fbca168",
                "X-User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data = json_decode($response, TRUE);
            return view('ai/video', ['data'=>$data['results']]);
            // echo "<pre>";
            // print_r($data['results']);
            // echo "</pre>";
        }*/
        //google api
        // $apikey = 'AIzaSyC_i8mvnDIxnV1aMH72_Kzq7m7X_m0lHm4';
        //alternate1
        $apikey = 'AIzaSyCyTioJlnSQb-CdHG8Pq_wHKdd9BLjQ9QQ';
        $keyword = urlencode($request->keyword);
        $blockWords = ['sexy', 'sex', 'xxx', 'hiburan', 'lucu', 'bokep', 'mobile+legend', 'mobile+legends', '+18', 'funny'];
        if(0 < count(array_intersect(array_map('strtolower', explode(' ', $keyword)), $blockWords))){
            $value['items'] = null;
            return view('ai.video', ['data'=>"Hasil Pencarian Tidak Ditemukan"]);
        }else{
            $googleApiUrl = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . $keyword . '&maxResults=' . 12 . '&key=' . $apikey;
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_VERBOSE, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);

            curl_close($ch);
            $data = json_decode($response);
            $value = json_decode(json_encode($data), true);
        }
        
        // return response()->json(['value'=>$value]);
        return view('ai.video', ['data'=>$value['items']]);
        // return dd($value['items']);
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
                        //  ->withSuccess('Signed in');
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
