<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherTestController extends Controller
{
    public function index(){
        return view('pengajar.test');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:name',
            'due_date' => 'required',
        ]);
        $testpaper = TestPaper::create(request(['name', 'due_date', 'id_course']));
        return redirect()->back();
    }
    public function edit($id){
        $testpaper = TestPaper::findOrFail($id);
        return view('pengajar.editcourse', compact('course'));
    }
    public function update(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required|unique:name',
            'due_date' => 'required',
        ]);

        TestPaper::find($id)->update($validated);
        return redirect()->back();
    }
    public function destroy($id){
        TestPaper::findOrFail($id)->delete();
        return redirect()->back();
    }
}
