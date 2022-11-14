<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $siswa = Siswa::all();
        $guru = Guru::all();
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        $tha = TahunAjaran::where('status',2)->first();
        return view('home',['siswa'=>$siswa,'guru'=>$guru,'kelas'=>$kelas,'mapel'=>$mapel,'tha'=>$tha]);
    }
}
