<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('nilai.pilih_kelas',['kelas'=>$kelas]);
    }

    public function show($id)
    {
        
        $nilai = DB::table('nilai_mapel_k_merdeka')
                    ->where('id_kelas',$id)
                    ->get();
        $kelas = Kelas::findorfail($id);
        $guru_mapel = Guru::where('id_user',Auth::user()->id)->first();
        $tahun_ajaran = TahunAjaran::all();
        return view('nilai.k_merdeka.read',['nilai'=>$nilai,'kelas'=>$kelas,'guru_mapel'=>$guru_mapel,'ta'=>$tahun_ajaran]);
    }

    public function get_nilai(Request $request)
    {
        $nilai = DB::table('nilai_mapel_k_merdeka')
                    ->join('siswa','nilai_mapel_k_merdeka.nisn_siswa','=','siswa.nisn')
                    ->where('nilai_mapel_k_merdeka.id_tahun_ajaran',$request->id_tahun_ajaran)
                    ->where('nilai_mapel_k_merdeka.id_kelas',$request->id_kelas)
                    ->get();
        // Fetch all records
        $response['data'] = $nilai;
        return response()->json($response);
    }
}
