<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /*class yang mengandung fungsi CRUD course*/
    public function index(){
        //fungsi yang menampilkan halaman formulir course
        //hanya dapat diakses oleh pengajar
        return view('pengajar.course');
    }
    public function store(Request $request){
        /*fungsi menerima dan menyimpan request dari formulir*/
        //validasi request
        $validated = $request->validate([
            //validasi kolom name dengan aturan required dan unique
            'name' => 'required|unique:name',
        ]);
        //membuat course dengan parameter name
        $course = Course::create(request(['name']));
        //kembali ke halaman sebelumnya
        return redirect()->back();
    }
    public function edit($id){
        /*fungsi menampilkan formulir edit*/
        //mencari id course dan jika tidak ditemukan maka akan gagal
        $course = Course::findOrFail($id);
        //jika id ditemukan maka akan menuju halaman formulir edit course
        return view('pengajar.editcourse', compact('course'));
    }
    public function update(Request $request, $id){
        /*fungsi menerima dan memperbaharui tabel course berdasarkan id*/
        //validasi request
        $validated = $request->validate([
            //validasi kolom name dengan aturan required dan unique
            'name' => 'required|unique:name',
        ]);
        //mencari id yang berkesesuaian dan melakukan update berdasarkan data yang sudah divalidasi
        Course::find($id)->update($validated);
        //kembali ke halaman sebelumnya
        return redirect()->back();
    }
    public function destroy($id){
        /*fungsi menghapus data course berdasarkan id*/
        //mencari id course dan jika tidak ditemukan maka akan gagal
        //menghapus id tersebut
        Course::findOrFail($id)->delete();
        //kembali ke halaman sebelumnya
        return redirect()->back();
    }
}


