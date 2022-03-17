<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use illuminate\Support\Str;

class PageController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function tampil() {
        $arrMahasiswa = ["Risa Lestari", "Rudi Hermawan", "Bambang Kusumo", "Lisa Permata"];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }

    public function cobaFacade() {
        echo Str::snake('SedangBelajarLaravelUncover');
        echo "<br>";
        echo Str::kebab('SedangBelajarLaravelUncover');
    }
}
