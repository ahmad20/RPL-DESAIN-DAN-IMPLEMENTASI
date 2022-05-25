<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CourseMaterial;

class CourseMaterialController extends Controller
{
    public function index(){
        $pengajar = Auth()->guard('pengajar')->user();
        $courses = Course::where('created_by', $pengajar->id_pengajar)->orderByDesc('created_at')->get();
        return view('pengajar.coursematerial', ['courses'=> $courses]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'courseName' => 'required',
        ]);
        $course = Course::where('name', $request->courseName)->first();
        $cm = CourseMaterial::where('id_course', $course->id_course)->first();
        if($cm!=null){
            $this->update($request, $cm->id_course);
        }else{
            $material = CourseMaterial::create([
                'id_course'=> $course->id_course,
                'slide'=> $request->slide,
                'video'=> $request->video,
                'kuis'=> $request->kuis,
                'tugas'=> $request->tugas,
                'referensi'=> $request->referensi]);
        }
        
        return redirect()->to('/pengajar/dashboard');
    }
    public function edit($id){
        $material = CourseMaterial::findOrFail($id);
        return view('pengajar.editcoursematerial', compact('material'));
    }
    public function update(Request $request, $id){
        CourseMaterial::find($id)->update([
            'slide'=> $request->slide,
            'video'=> $request->video,
            'kuis'=> $request->kuis,
            'tugas'=> $request->tugas,
            'referensi'=> $request->referensi]);
    }
    public function destroy($id){
        CourseMaterial::findOrFail($id)->delete();
        return redirect()->back();
    }
}
