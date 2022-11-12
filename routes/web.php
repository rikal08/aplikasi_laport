<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\Api\MapelController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DataExtraController;
use App\Http\Controllers\DataMapelController;
use App\Http\Controllers\GuruExtraController;
use App\Http\Controllers\GuruMapelController;
use App\Http\Controllers\DataKepsekController;
use App\Http\Controllers\ThaController;

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
#Route::resource('/data-admin',DataAdminController::class);

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
Route::resource('/data-tha',ThaController::class);
Route::resource('/data-guru',GuruController::class);

Route::resource('/data-siswa',SiswaController::class);

Route::resource('/data-user',UserController::class);

// // API

// Route::apiResource('/mata-pelajaran',MapelController::class);