<?php
namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        /**
         * @description Membuat public function bernama index yang akan menampilkan halaman formulir course
        */
        // $pengajar = Auth()->guard('pengajar')->user();
        // $course = Course::where('created_by', $pengajar->id_pengajar)->get();
        // return view('pengajar.dashboard', ['courses'=>$course]);
        return view('pengajar.course');
    }
    public function store(Request $request, $id_pengajar){
        /**
         * @description Membuat public function bernama store yang akan menerima dan menyimpan request dari formulir
         * @param  Request $request
         * @return view back
        */
        //validasi request
        $validated = $request->validate([
            'name' => 'required|unique:course', //validasi kolom name dengan aturan required dan unique
        ]);
        
        //membuat course dengan parameter name
        $course = Course::create([
            'name'=>$request->name,
            'description' =>$request->description, 
            'created_by'=>$id_pengajar
        ]);
        //kembali ke halaman sebelumnya
        return redirect()->to('/pengajar/course-material')->with('course', $course->name);
    }
    public function edit($id){
        /**
         * @description Membuat public function bernama edit yang akan menampilkan formulir edit
         * @param  int $id
         * @return view back
        */
        $course = Course::findOrFail($id);//mencari id course dan jika tidak ditemukan maka akan gagal
        return view('pengajar.editcourse', compact('course'));//jika id ditemukan maka akan menuju halaman formulir edit course
    }
    public function update(Request $request, $id){
        /**
         * @description Membuat public function bernama update yang akan menerima dan memperbaharui tabel course berdasarkan id
         * @param  int $id, Request $request
         * @return view back
        */
        //validasi request
        $validated = $request->validate([
           'name' => 'required|unique:name', //validasi kolom name dengan aturan required dan unique
        ]);
        Course::find($id)->update($validated);//mencari id yang berkesesuaian dan melakukan update berdasarkan data yang sudah divalidasi
        return redirect()->back();//kembali ke halaman sebelumnya
    }
    public function destroy($id){
        /**
         * @description Membuat public function bernama destroy yang akan menghapus data course berdasarkan id
         * @param  int $id
         * @return view back
        */
        Course::findOrFail($id)->delete();
        return redirect()->back();//kembali ke halaman sebelumnya
    }
}




