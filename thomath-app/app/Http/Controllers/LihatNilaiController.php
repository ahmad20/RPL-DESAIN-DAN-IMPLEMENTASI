<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LihatNilaiController extends Controller
{
    /** Menampilkan view nilai dari pengajar */
    public function view(){
        return view('pengajar.nilai');
    }
    /**
     * Menambahkan course baru
     */
    public function scoreView(){
        
        $siswa = Auth()->guard('siswa')->user();
        $wali_murid = Auth()->guard('walimurid')->user();
        $view = 'siswa.showscore';
        if ($wali_murid){
            $siswa = $wali_murid->siswa;
            $view = 'wali.showscore';  
        }
        $siswa_test = DB::table('siswa_test_paper')
                ->where('siswa_id_siswa', $siswa->id_siswa)->orderBy('test_paper_id_testpaper')->get();
        return view($view, ['test_siswa'=>$siswa_test]);
    }
}
