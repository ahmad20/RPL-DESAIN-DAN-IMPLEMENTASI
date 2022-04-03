<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsultasi;

class KonsultasiController extends Controller
{
    public function view(){
        return view('konsultasi');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'topik' => 'required',
            'tahun' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ]);

        // $konsultasi = Konsultasi::create(['email'=>$request->email, 'topik'=>$request->topik, 'tahun'=>$request->tahun, 'tanggal'=>$request->tanggal, 'deskripsi'=>$request->deskripsi]);
        $konsultasi = Konsultasi::create(request(['email', 'topik', 'tahun', 'tanggal', 'deskripsi']));

        return redirect()->to('/dashboard');
    }
}