<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use App\Models\Extra;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $guru = DB::table('guru')
                    ->leftjoin('mapel','guru.id_mapel','=','mapel.id_mapel') // join ke tabel mapel
                    ->leftjoin('extrakulikuler','guru.id_extra','=','extrakulikuler.id_extra') // join ke tabel mapel
                    ->leftjoin('users','guru.id_user','=','users.id') // join ke tabel user
                    ->get();
        return view('data.guru.read',['guru'=>$guru,'no'=>1]); //return ke view
    }

    public function create()
    {
        $mapel = Mapel::all();
        $extra = Extra::all();

        return view('data.guru.create',['mapel'=>$mapel,'extra'=>$extra]);
    }

    public function store(Request $request)
    {
        $id = rand(100,900);
        Guru::create([
            'nip'=>$request->nip,
            'nama_guru'=>$request->nama_guru,
            'alamat'=>$request->alamat,
            'telepon'=>$request->telepon,
            'id_mapel' => $request->id_mapel,
            'id_extra'=>$request->id_extra,
            'id_user'=>$id,
            
        ]);

        User::create([
            'id'=>$id,
            'name'=>$request->nama_guru,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'level'=>3
        ]);


        return redirect()->back()->with('success','Data guru berhasil disimpan');
    }

    public function edit($id)
    {
        $id_true = Crypt::decrypt($id);
        $guru = DB::table('guru')
                    ->join('users','guru.id_user','=','users.id')
                    ->where('guru.id_guru',$id_true)
                    ->first();

        $mapel = Mapel::all();
        $extra = Extra::all();
        
        return view('data.guru.edit',['data'=>$guru,'mapel'=>$mapel,'extra'=>$extra]);
    }

    public function update(Request $request,$id)
    {
        $guru = Guru::findorfail($id);
        if ($request->password==true) {
       
        $guru->nama_guru = $request->nama_guru;
        $guru->id_mapel = $request->id_mapel;
        $guru->id_extra = $request->id_extra;
        $guru->alamat = $request->alamat;
        $guru->telepon = $request->telepon;
        $guru->email = $request->email;
        $guru->password = $request->password;
        } else {
       
        $guru->nama_guru = $request->nama_guru;
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
