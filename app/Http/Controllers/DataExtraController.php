<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataExtraController extends Controller
{
    public function index()
    {
       

        return view('data.extra.read');
    }
}
