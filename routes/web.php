<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DataSekolah;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanSiswa;
use App\Http\Controllers\ThaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BlankoController;
use App\Http\Controllers\RaportController;
use App\Http\Controllers\Api\MapelController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DataExtraController;
use App\Http\Controllers\DataMapelController;
use App\Http\Controllers\GuruExtraController;
use App\Http\Controllers\GuruMapelController;
use App\Http\Controllers\NaikKelasController;
use App\Http\Controllers\DataKepsekController;
use App\Http\Controllers\NilaiExtraController;
use App\Http\Controllers\ModelRaportController;
use App\Http\Controllers\HalamanSiswaController;

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
Route::post('data-nilai/input-nilai',[App\Http\Controllers\NilaiController::class,'input_nilai']);
Route::post('data-nilai/update-nilai',[App\Http\Controllers\NilaiController::class,'update_nilai']);

Route::resource('data-nilai-extra',NilaiExtraController::class);
Route::post('data-nilai-extra/get-nilai-extra',[App\Http\Controllers\NilaiExtraController::class,'get_nilai_extra']);
Route::post('data-nilai-extra/input-nilai-extra',[App\Http\Controllers\NilaiExtraController::class,'input_nilai_extra']);
Route::post('data-nilai-extra/hapus-nilai-extra',[App\Http\Controllers\NilaiExtraController::class,'hapus_nilai_extra']);
Route::post('data-nilai-extra/hapus-nilai-extra2',[App\Http\Controllers\NilaiExtraController::class,'hapus_nilai_extra2']);


Route::get('raport/hasil-sikap-spritual-sosial',[App\Http\Controllers\RaportController::class,'hasil_sikap']);
Route::get('raport/hasil-sikap-spritual-sosial/{id}',[App\Http\Controllers\RaportController::class,'hasil_sikap_show']);
Route::post('raport/tambah-hasil-rapat',[App\Http\Controllers\RaportController::class,'tambah_data_hasil_rapat_sikap']);
Route::post('raport/update-hasil-rapat/{id}',[App\Http\Controllers\RaportController::class,'update_hasil_rapat_sikap']);

Route::get('data-kehadiran-siswa',[App\Http\Controllers\RaportController::class,'data_kehadiran_siswa']);
Route::get('data-kehadiran-siswa/{id}',[App\Http\Controllers\RaportController::class,'data_kehadiran_siswa_show']);
Route::get('set-data-kehadiran/{id}',[App\Http\Controllers\RaportController::class,'set_data_kehadiran']);
Route::post('update-kehadiran/{id}',[App\Http\Controllers\RaportController::class,'update_kehadiran']);


Route::get('cetak-raport',[App\Http\Controllers\RaportController::class,'cetak_raport']);
Route::post('print-raport',[App\Http\Controllers\RaportController::class,'print_raport']);


Route::get('raport-saya',[HalamanSiswa::class,'raport_saya']);
Route::post('print-raport-saya',[HalamanSiswa::class,'print_raport']);

Route::resource('naik-kelas',NaikKelasController::class);


// // API

// Route::apiResource('/mata-pelajaran',MapelController::class);