<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BlankoController extends Controller
{
    public function index()
    {
        $guru = Guru::where('id_user',Auth::user()->id)->first();
        $kelas = DB::table('kelas')
                    ->where('id_wali',$guru->id_guru)
                    ->get();
        return view('blanko.read_kelas',['kelas'=>$kelas]);
    }

    public function print_blanko($id)
    {
        $kelas = Kelas::findorfail($id);
        $siswa = Siswa::where('id_kelas',$id)->get();
        $pdf = PDF::loadView('blanko.cetak',['siswa'=>$siswa,'no'=>1,'ttdno'=>1,'kelas'=>$kelas]);
        return $pdf->download('blanko_absensi.pdf');
    }
}
