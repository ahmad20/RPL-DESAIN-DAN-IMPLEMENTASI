<?php

namespace App\Http\Controllers;

use App\Models\WaliMurid;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonsultasiController extends Controller
{
    /**
     * Function untuk menampilkan view konsultasi dari wali
     */
    public function view(){
        return view('wali.konsultasi');
    }

    /**
     * Function untuk membuat konsultasi baru
     * dengan parameter request, id_wali_murid
     */
    public function store(Request $request, $id_wali_murid){

        /**
         * Memvalidasi inputan email, topik
         * tahun, tanggal, deskripsi
         */
        $validated = $request->validate([
            'email' => 'required|email',
            'topik' => 'required',
            'tahun' => 'required',
            'tanggal' => 'required|after_or_equal:today',
            'deskripsi' => 'required',
        ]);

        /** Create data ke database ke table konsultasi */
        $konsultasi = Konsultasi::create(request(['email', 'topik', 'tahun', 'tanggal', 'deskripsi']));
        /** Mencari wali murid dengan id = id_wali_murid */
        $wali = WaliMurid::findOrFail($id_wali_murid);
        /** Mengupdate  attribut id_konsultasi pada wali
         * dengan id konsultasi yang baru
        */
        $wali->update(array('id_konsultasi' => $konsultasi->id_konsultasi));
        
        /** redirect ke dashboard walimurid */
        return redirect()->to('walimurid/dashboard');
    }
    /**Function untuk menampilkan semua data konsultasi yang ada didatabase */
    public function show(){
        $konsultasi = Konsultasi::get();

        return view('pengajar.konsultasi', ['data'=>$konsultasi]);
    }

    /** function Menambahkan konsultasi ke pengajar */
    public function assign(Request $request, $id_konsultasi){
        $konsultasi = Konsultasi::findOrFail($id_konsultasi);
        $pengajar = Auth::guard('pengajar')->user();
        /** Mengupdate  attribut id_konsultasi pada pengajar
         * dengan id konsultasi yang baru
        */
        $pengajar->update(array('id_konsultasi' => $konsultasi->id_konsultasi));
        /**redirect ke dashboard pengajar */
        return redirect()->to('pengajar/dashboard');
    }
}