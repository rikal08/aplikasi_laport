<?php

namespace App\Http\Controllers;

use App\Models\DataKepsek;
use Illuminate\Http\Request;

class DataKepsekController extends Controller
{
    
    public function index()
    {
        $kepsek = DataKepsek::where('level',2)->get();

        return view('data.kepsek.read',['no'=>1,'kepsek'=>$kepsek]);
    }

    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
