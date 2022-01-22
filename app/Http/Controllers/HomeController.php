<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Karyawan;

class HomeController extends Controller
{
    public function index(){
        $tetap = Karyawan::where('status_kerja','Karyawan Tetap')->get();
        $training = Karyawan::where('status_kerja','Karyawan Training')->get();
        $kontrak = Karyawan::where('status_kerja','Karyawan Kontrak')->get();
        return view("/home",compact('tetap','training','kontrak'));
    }
}
