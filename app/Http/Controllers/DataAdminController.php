<?php

namespace App\Http\Controllers;

use App\Models\DataAdmin;
use Illuminate\Http\Request;

class DataAdminController extends Controller
{
   
    public function index()
    {
        $data_admin = DataAdmin::where('level',1)->get();
        return view('data.admin.read',['data_admin'=>$data_admin,'no'=>1]);
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
