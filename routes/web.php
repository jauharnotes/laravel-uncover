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

Route::get('/hello', function () {
    return 'Hello Laravel';
});

Route::get('/belajar', function () {
    echo '<h1>Sedang Belajar</h1>';
    echo '<p>Laravel Nih..</p>';
});

Route::get('/mahasiswa/fasilkom/johar', function () {
    echo '<h2 style="text-align: center"><u>Welcome Johar</u></h2>';
});

// Rote parameter
Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Tampilkan data mahasiswa $nama";
});

// // Rote lebih dari 1 parameter
// Route::get('/stok_barang/{jenis}/{merek}', function ($jenis, $merek) {
//     return "Cek sissa stok untuk produk $jenis dengan merek $merek";
// });

// Rote lebih dari 1 parameter dengan default parameter
Route::get('/stok_barang/{jenis?}/{merek?}', function ($jenis = 'laptop', $merek = 'apple') {
    return "Cek sissa stok untuk produk $jenis dengan merek $merek";
});