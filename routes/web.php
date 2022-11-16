<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BlankoController;
use App\Http\Controllers\Api\MapelController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DataExtraController;
use App\Http\Controllers\DataMapelController;
use App\Http\Controllers\GuruExtraController;
use App\Http\Controllers\GuruMapelController;
use App\Http\Controllers\DataKepsekController;
use App\Http\Controllers\DataSekolah;
use App\Http\Controllers\ModelRaportController;
use App\Http\Controllers\NilaiController;

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


Route::resource('/data-kelas',KelasController::class);
Route::get('/lihat-siswa/{id}', [App\Http\Controllers\KelasController::class, 'view_siswa']);
Route::resource('/data-tha',ThaController::class);
Route::resource('/data-guru',GuruController::class);

Route::resource('/data-siswa',SiswaController::class);

Route::resource('/data-user',UserController::class);
Route::resource('/cetak-blanko',BlankoController::class);
Route::get('/print-blanko/{id}', [App\Http\Controllers\BlankoController::class, 'print_blanko']);
Route::resource('data-sekolah',DataSekolah::class);
Route::resource('format-raport',ModelRaportController::class);
Route::get('/format-raport-1/{id}', [App\Http\Controllers\ModelRaportController::class, 'format_raport_1']);
Route::get('/format-raport-2/{id}', [App\Http\Controllers\ModelRaportController::class, 'format_raport_2']);
Route::resource('data-nilai',NilaiController::class);
Route::post('data-nilai/get-nilai',[App\Http\Controllers\NilaiController::class,'get_nilai']);

// // API

// Route::apiResource('/mata-pelajaran',MapelController::class);