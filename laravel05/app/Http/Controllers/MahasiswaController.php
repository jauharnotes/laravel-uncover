<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function mahasiswa() {
        $arrMahasiswa = ["Risa Lestari", "Rudi Hermawan", "Bambang Kusumo", "Lisa Permata"];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }

    public function dosen() {
        $arrDosen = ["Maya Fiitrianti", "Silvia", "Umar Agustinus", "Syahrial"];
        return view('dosen')->with('dosen', $arrDosen);
    }

    public function galery() {
        return view('galery');
    }

    public function info($fakultas, $jurusan) {
        $data = [$fakultas, $jurusan];
        return view('informasi')->with('data', $data);
    }
}
