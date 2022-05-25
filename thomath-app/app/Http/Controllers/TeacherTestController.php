<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\TestPaper;
use Illuminate\Http\Request;

class TeacherTestController extends Controller
{
    public function index(){
        $pengajar = Auth()->guard('pengajar')->user();
        $courses = Course::where('created_by', $pengajar->id_pengajar)->orderByDesc('created_at')->get();
        return view('pengajar.test', ['courses'=> $courses]);
    }
    public function store(Request $request){
        $course = Course::where('name', $request->courseName)->first();
        $validated = $request->validate([
            'courseName' => 'required',
            'dueDate' => 'required|after_or_equal:today',
            'question' => 'required',
        ]);
        $testpaper = TestPaper::create([
            'due_date' => $request->dueDate,
            'question' => $request->question,
            'id_course' => $course->id_course,
        ]);
        return redirect()->to('/pengajar/dashboard');
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
