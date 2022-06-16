<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /** Menampilkan view nilai dari pengajar */
    public function view(){
        return view('pengajar.nilai');
    }
    /**
     * Menambahkan course baru
     */
    public function store(Request $request){
        /** memvalidasi inputan */
        $validated = $request->validate([
            'name' => 'required|unique:name',
        ]);

        /** menambahkan course baru ke dalam database */
        $course = Course::create(request(['name']));

        /** redirect back */
        return redirect()->back();
    }
    /** Menampilkan view edit course */
    public function edit($id){
        $course = Course::findOrFail($id);
        return view('pengajar.editcourse', compact('course'));
    }
    /**Function untuk mengupdate course */
    public function update(Request $request, $id){
        /** memvalidasi inputan */
        $validated = $request->validate([
            'name' => 'required|unique:name',
        ]);

        /** Mengupdate data didatabase dengan id = $id */
        Course::find($id)->update($validated);
        /** redirect back */
        return redirect()->back();
    }
    /** Menghapus data di database dengan id = $id */
    public function destroy($id){
        Course::findOrFail($id)->delete();
        return redirect()->back();
    }
}
