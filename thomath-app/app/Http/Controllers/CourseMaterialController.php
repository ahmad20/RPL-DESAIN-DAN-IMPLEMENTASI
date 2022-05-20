<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseMaterialController extends Controller
{
    public function index(){
        return view('pengajar.coursematerial');
    }
    public function store(Request $request){
        $material = CourseMaterial::create(request(['name']));
        return redirect()->back();
    }
    public function edit($id){
        $material = CourseMaterial::findOrFail($id);
        return view('pengajar.editcoursematerial', compact('material'));
    }
    public function update(Request $request, $id){
        CourseMaterial::find($id)->update(request(['name']));
        return redirect()->back();
    }
    public function destroy($id){
        CourseMaterial::findOrFail($id)->delete();
        return redirect()->back();
    }
}
