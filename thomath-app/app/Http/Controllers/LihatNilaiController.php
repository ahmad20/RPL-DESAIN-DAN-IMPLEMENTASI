<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function view(){
        return view('pengajar.nilai');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:name',
        ]);

        $course = Course::create(request(['name']));
        return redirect()->back();
    }
    public function edit($id){
        $course = Course::findOrFail($id);
        return view('pengajar.editcourse', compact('course'));
    }
    public function update(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required|unique:name',
        ]);

        Course::find($id)->update($validated);
        return redirect()->back();
    }
    public function destroy($id){
        Course::findOrFail($id)->delete();
        return redirect()->back();
    }
}
