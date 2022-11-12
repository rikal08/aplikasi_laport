<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $user=DB::table('users')
                    ->where('level',2)
                    ->orWhere('level',1)
                    ->get();
        return view('data.user.read',['user'=>$user,'no'=>1]);
    }
}
