<?php

namespace App\Http\Controllers;

use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class ThaController extends Controller
{
    public function index()
    {
        $tha = TahunAjaran::all();
        return view('data.tha.read',['tha'=>$tha,'no'=>1]);
    }

    public function destroy($id)
    {
        $tha = TahunAjaran::findorfail($id);
        $tha->delete();
        return redirect()->back()->with('delete','Data Berhasil dihapus');
    }
}
