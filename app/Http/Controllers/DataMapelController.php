<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataMapelController extends Controller
{
    public function index()
    {
       

        return view('data.mapel.read');
    }
}