<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    $arrMahasiswa = ["Risa Lestari", "Rudi Hermawan", "Bambang Kusumo", "Lisa Permata"];
    return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
})->name('mahasiswa');

Route::get('/dosen', function () {
    $arrDosen = ["Maya Fitrianti", "Silvia", "Umar Agustinus", "Syahrial"];
    return view('dosen')->with('dosen', $arrDosen);
})->name('dosen');

Route::get('/galery/teknik-informatika', function () {  
    return view('galery');
})->name('gambar');

Route::get('/mahasiswa-baru', function () {
    $nama = 'Junaidi';
    $nilai = [50, 30, 40, 60, 70];
    return view('mahasiswa-baru', compact('nama', 'nilai'));
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('informasi/{fakultas}/{jurusan}', function ($fakultas, $jurusan) {
    $data = [$fakultas, $jurusan];
    return view('informasi')->with('data', $data);
})->name('info');
