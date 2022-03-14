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

// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = ["Jauharuddin", "Junaidi", "Ahmad Hana Agung"];
//     return view('universitas.mahasiswa', ["mahasiswa" => $arrMahasiswa]);
// });

// mengirim data ke view menggunakan method with
Route::get('/mahasiswa', function () {
    $arrMahasiswa = ["Jauharuddin", "Junaidi", "Ahmad Hana Agung", "Tutik Alawiyah"];
    return view('universitas.mahasiswa')->with('mahasiswa', $arrMahasiswa);
});

Route::get('/dosen/{nama}/{umur}/{kotaAsal}', function ($nama, $umur, $kotaAsal) {
    return view('universitas.dosen')
    ->with('nama', $nama)
    ->with('umur', $umur)
    ->with('kotaAsal', $kotaAsal);
});

/*
Route::get('/hello', function () {
    $hello = ['Hello Laravel', 2 => ['Hello Jakarta', 'Hello Depok']];
    // print_r($hello);
    dd($hello);
    die();
    return $hello;
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
Route::get('/stok_barang/{jenis}/{merek}', function ($jenis, $merek) {
    return "Cek sissa stok untuk produk $jenis dengan merek $merek";
});

// Rote lebih dari 1 parameter dengan default parameter
Route::get('/stok_barang/{jenis?}/{merek?}', function ($jenis = 'laptop', $merek = 'apple') {
    return "Cek sissa stok untuk produk $jenis dengan merek $merek";
});

// Route parameter dengan Regular Expression
// Route::get('/user/{id}', function ($id) {
//     return "Tampilkan user dengan id = $id";
// })->where('id', '[0-9]+');

Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
})->where('id', '[A-Z]{2}[0-9]+');

// Route Redirect
Route::get('/hubungi-kami', function () {
    return '<h1>Hubungi Kami</h1>';
});
Route::redirect('/contact-us', '/hubungi-kami');

// Route Group
Route::prefix('/admin')->group(function () {
    Route::get('/mahasiswa', function () {
        echo '<h1>Daftar Mahasiswa</h1>';
    });
    Route::get('/dosen', function () {
        echo '<h1>Daftar Dosen</h1>';
    });
    Route::get('/karyawan', function () {
        echo '<h1>Daftar Karyawan</h1>';
    });
});

// Route Fallback
Route::fallback(function() {
    return 'Maaf, alamat tidak ditemukan';
});

// Route priority
// tanpa parameter
Route::get('/buku/1', function () {
    return "Buku ke-1";
});

Route::get('/buku/1', function () {
    return "Buku saya ke-1";
});

Route::get('/buku/1', function () {
    return "Buku kita ke-1";
});

// Route priority
// dengan parameter
Route::get('/buku/{a}', function ($a) {
    return "Buku ke-$a";
});

Route::get('/buku/{b}', function ($b) {
    return "Buku saya ke-$b";
});

Route::get('/buku/{c}', function ($c) {
    return "Buku kita ke-$c";
});

*/