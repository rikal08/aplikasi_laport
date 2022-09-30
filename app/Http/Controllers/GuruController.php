<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Request;
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

        return view('data.guru.create',['mapel'=>$mapel]);
    }

}
