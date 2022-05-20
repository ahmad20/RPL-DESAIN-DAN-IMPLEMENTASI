<?php

namespace App\Http\Controllers;

use App\Models\WaliMurid;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonsultasiController extends Controller
{
    public function view(){
        return view('wali.konsultasi');
    }

    public function store(Request $request, $id_wali_murid){

        $validated = $request->validate([
            'email' => 'required|email',
            'topik' => 'required',
            'tahun' => 'required',
            'tanggal' => 'required|after_or_equal:today',
            'deskripsi' => 'required',
        ]);

        $konsultasi = Konsultasi::create(request(['email', 'topik', 'tahun', 'tanggal', 'deskripsi']));
        $wali = WaliMurid::findOrFail($id_wali_murid);
        $wali->update(array('id_konsultasi' => $konsultasi->id_konsultasi));
        
        return redirect()->to('walimurid/dashboard');
    }
    public function show(){
        $konsultasi = Konsultasi::get();

        return view('pengajar.konsultasi', ['data'=>$konsultasi]);
    }

    public function assign(Request $request, $id_konsultasi){
        $konsultasi = Konsultasi::findOrFail($id_konsultasi);
        $pengajar = Auth::guard('pengajar')->user();
        $pengajar->update(array('id_konsultasi' => $konsultasi->id_konsultasi));
        return redirect()->to('pengajar/dashboard');
    }
}