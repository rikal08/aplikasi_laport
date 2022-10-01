<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $guru = DB::table('guru')
                    ->join('mapel','guru.id_mapel','=','mapel.id_mapel') // join ke tabel mapel
                    ->leftjoin('extrakulikuler','guru.id_extra','=','extrakulikuler.id_extra') // join ke tabel mapel
                    ->get();
        return view('data.guru.read',['guru'=>$guru,'no'=>1]); //return ke view
    }

    public function create()
    {
        $mapel = Mapel::all();
        $extra = Extra::all();

        return view('data.guru.create',['mapel'=>$mapel,'extra'=>$extra]);
    }

    public function edit($id)
    {
        $id_true = Crypt::decrypt($id);
        $guru = Guru::findorfail($id_true);

        $mapel = Mapel::all();
        $extra = Extra::all();
        
        return view('data.guru.edit',['data'=>$guru,'mapel'=>$mapel,'extra'=>$extra]);
    }

    public function update(Request $request,$id)
    {
        $guru = Guru::findorfail($id);
        if ($request->password==true) {
            $guru->id_guru = $request->id_guru;
        $guru->name = $request->name;
        $guru->id_mapel = $request->id_mapel;
        $guru->id_extra = $request->id_extra;
        $guru->alamat = $request->alamat;
        $guru->telepon = $request->telepon;
        $guru->email = $request->email;
        $guru->password = $request->password;
        } else {
            $guru->id_guru = $request->id_guru;
        $guru->name = $request->name;
        $guru->id_mapel = $request->id_mapel;
        $guru->id_extra = $request->id_extra;
        $guru->alamat = $request->alamat;
        $guru->telepon = $request->telepon;
        $guru->email = $request->email;
        }
        
        

        $guru->save();

        return redirect()->back()->with('success','Data guru berhasil diupdate');
    }

}
