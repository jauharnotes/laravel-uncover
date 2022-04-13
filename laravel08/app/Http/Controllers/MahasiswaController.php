<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function insert() {
        $result = DB::table('mahasiswa')->insert(
            [
                'nim' => '19003036',
                'nama' => 'Sari Lestari',
                'tanggal' => '2001-12-31',
                'ipk' => 3.5,
                'created_at' => now(),
                'updated_at' => now(),
            ]
            );
            dump($result);
    }
}
