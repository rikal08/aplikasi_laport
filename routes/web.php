<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\Api\MapelController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DataExtraController;
use App\Http\Controllers\DataMapelController;
use App\Http\Controllers\GuruExtraController;
use App\Http\Controllers\GuruMapelController;
use App\Http\Controllers\DataKepsekController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();
// data admin routes
Route::resource('/data-admin',DataAdminController::class);

// data kepsek routes
Route::resource('/data-kepsek', DataKepsekController::class);
// data mapel
Route::resource('/data-mapel', DataMapelController::class);
// data extra
Route::resource('/data-extra', DataExtraController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route sementara
Route::get('/data-kelas',function ()
{
   return view('data.kelas.read'); 
});
Route::get('/data-tha',function ()
{
   return view('data.tha.read'); 
});
// Route::resource('/data-guru',GuruController::class);
Route::resource('guru-mapel',GuruMapelController::class);
Route::resource('guru-extra',GuruExtraController::class);
Route::get('/data-siswa',function ()
{
   return view('data.siswa.read'); 
});

// // API

// Route::apiResource('/mata-pelajaran',MapelController::class);