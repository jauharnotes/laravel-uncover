<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSatu() {
        $myArray = [1,9,3,4,5,3,5,7];
        $collection = collect($myArray);

        dump($collection);
    }

    public function collectionDua() {
        $myArray = [1,9,3,4,5,3,5,7];
        $collection = collect($myArray);

        echo $collection[0]; echo "<br>";
        echo $collection[2]; echo "<br>";

        foreach($collection as $value) {
            echo "$value ";
        }

        echo "<br>";

        echo $collection;

        echo "<br>";

        // collection dari associative array
        $collection = collect([
            "nama" => "Laura",
            "sekolah" => "SMA 5 Lampung",
            "kota" => "Lampung",
            "jurusan" => "IPA",
        ]);
        echo $collection;

        echo "<br>";

        // collection dari berbagai tipe data
        $collection = collect(["belajar", "laravel", "uncover", 1, 2, 3]);
        echo $collection;

        $varA = collect([1,2,3]);
        $varB = collect(["0" => 1, "1" => 2, "2" => 3]);
        $varC = collect(["0" => 1, "2" => 2, "3" => 3]);

        dump($varA == $varB); // true
        echo $varA;
        echo $varB;
        echo $varC;
    }

    public function collectionTiga() {
        $collection = collect([1,3,4,6,5,7,8,9,2,2,4,5]);

        // operasi Matematis
        dump($collection->sum());
        dump($collection->avg());
        dump($collection->max());
        dump($collection->min());
        dump($collection->median());
        dump($collection->random());
        dump($collection->concat([10,20,30]));
        dump($collection->contains(3));
        dump($collection->contains(10));
        dump($collection->unique());
        dump($collection->all());
        dump($collection->first());
        dump($collection->last());
        dump($collection->count());
        dump($collection->sort());
    }

    public function collectionEmpat() {
        $collection = collect([
            "nama" => "jauhar",
            "sekolah" => "Harvard",
            "kota" => "Cambridge",
        ]);

        dump($collection->get("sekolah"));
        dump($collection->get("umur", 4));
        dump($collection->has("nama"));
        dump($collection->has("umur"));
        dump($collection->flip());
        // ambil semua key
        dump($collection->keys());
        // ambil semua value
        dump($collection->values());
        dump($collection->search("Harvard"));


        // ganti isi collection
        $hasil = $collection->replace([
            "nama" => "Junaidi",
            "sekolah" => "Stanford"
        ]);

        dump($hasil);
        // hapus element
        // dump($collection->forget("nama"));
        // perulangan each()
        $collection->each(function($val, $key) {
            echo "$key : $val <br>";
        });
    }

    public function collectionLima() {
        $collection = collect([
            ["namaProduk" => "Laptop Apple", "harga" => 20000000],
            ["namaProduk" => "Laptop Lenovo", "harga" => 9000000],
            ["namaProduk" => "Laptop Xioami", "harga" => 8000000],
            ["namaProduk" => "Laptop Infinix", "harga" => 11000000],
            ["namaProduk" => "Laptop DEll", "harga" => 10000000],
        ]);

        // Urutkan berdasarkan key harga
        dump($collection->sortBy("harga"));
        dump($collection->sortByDesc("harga"));

        // Urutkan berdasarkan key harga dan tampilkan sebagai array
        dump($collection->sortBy("harga")->all());

        // Urutkan berdasarkan key harga dan tampilkan menggunakan method each()
        $collection->sortBy("harga")->each(function($val, $key) {
            echo $val["namaProduk"]. "<br>";
        });

        $hasil = $collection->filter(function($val, $key) {
            return $val["harga"] < 10000000;
        });
        dump($hasil);

        // cari element yang harga bernilai 8000000
        dump($collection->where("harga", 8000000));
        // tampilkan nama produk yang element key harga lebih dari 10000000
        dump($collection->where("harga", ">=", 10000000));

        $hasil = $collection->firstWhere("harga", 8000000);
        dump($hasil);

        $hasil = $collection->firstWhere("harga", 8000000);
        echo $hasil["namaProduk"]. "<br>";

        $hasil = $collection->where("harga", "==", 8000000)->all();
        echo "<hr>";
        foreach($hasil as $val) {
            echo $val["namaProduk"]. "<br>";
        }

        // cari element dengan harga antara 10000000 - 20000000
        dump($collection->whereBetween("harga", [10000000, 20000000]));

        // cari element dengan harga bukan di antara 10000000 - 20000000
        dump($collection->whereNotBetween("harga", [10000000, 20000000]));

        // cari element dengan harga 8000000, 10000000, 12500000
        dump($collection->whereIn("harga", [8000000, 10000000, 12500000]));

        // cari element dengan harga selain dari 8000000, 10000000, 12500000
        dump($collection->whereNotIn("harga", [8000000, 10000000, 12500000]));

        // ambil namaProduk dari semua element
        dump($collection->pluck("namaProduk"));
    }

    public function collectionEnam() {
        $siswa00 = new \stdClass();
        $siswa00->nama = "Jauhar";
        $siswa00->kampus = "Harvard";
        $siswa00->jurusan = "Business";

        $siswa01 = new \stdClass();
        $siswa01->nama = "Junaidi";
        $siswa01->kampus = "Stanford";
        $siswa01->jurusan = "Ekonomi";

        $siswa02 = new \stdClass();
        $siswa02->nama = "Agung";
        $siswa02->kampus = "MIT";
        $siswa02->jurusan = "Electronic";

        $siswa03 = new \stdClass();
        $siswa03->nama = "Fulan";
        $siswa03->kampus = "MIT";
        $siswa03->jurusan = "Electronic";

        $siswas = collect([
            0 => $siswa00,
            1 => $siswa01,
            2 => $siswa02,
            3 => $siswa03,
        ]);
        dump($siswas);

        // cara mengakses nilai collection
        echo $siswas[1]->nama;
        echo "<br>";
        echo $siswas[2]->jurusan;

        echo "<hr>";

        // perulangan foreach untuk menampilkan data
        foreach($siswas as $siswa) {
            echo $siswa->nama. "<br>";
        }
        echo "<hr>";

        // tampilkan nama sekolah dari siswa bernama jauhar
        $siswa = $siswas->where("nama", "Jauhar")->first();
        echo $siswa->kampus;
        echo "<hr>";

        $siswa = $siswas->get(2);
        dump($siswa);
        echo "$siswa->nama, $siswa->kampus, $siswa->jurusan";

        $hasil = $siswas->groupBy("jurusan");
        dump($hasil);

        $namaJurusan = $siswas->groupBy("jurusan")->get("Electronic")->pluck("nama")->all();
        echo 'Nama siswa jurusan Elecronic: ' . implode(', ', $namaJurusan);
    }

    public function collectionTujuh() {
        $matkul00 = new \stdClass();
        $matkul00->namaMatkul = "Sistem Operasi";
        $matkul00->jumlahSks = 3;
        $matkul00->semester = 3;

        $matkul001 = new \stdClass();
        $matkul001->namaMatkul = "Algoritma dan Pemrograman";
        $matkul001->jumlahSks = 4;
        $matkul001->semester = 1;

        $matkul002 = new \stdClass();
        $matkul002->namaMatkul = "Kalkulus Dasar";
        $matkul002->jumlahSks = 2;
        $matkul002->semester = 1;

        $matkul003 = new \stdClass();
        $matkul003->namaMatkul = "Basis Data";
        $matkul003->jumlahSks = 2;
        $matkul003->semester = 3;

        $matkuls = collect([$matkul00, $matkul001, $matkul002, $matkul003]);

        // tampilkan semua mata kuliah di semester 3
        $hasil = $matkuls->groupBy("semester")->get(3)->pluck("namaMatkul")->all();
        echo 'Nama mata kuliah di semester 3: ' . implode(', ', $hasil);

        echo "<hr>";

        // urutkan mata kuliah berdasarkan jumlah sks (dari sks terbesar ke sks terkecil), lalu tampilkan sebagai string
        $matkulsSort = $matkuls->sortByDesc("jumlahSks");
        $stringMatkul = "";
        foreach($matkulsSort as $matkul) {
            $stringMatkul .= "$matkul->namaMatkul ($matkul->jumlahSks), ";
        }
        echo 'Nama mata kuliah: ' . substr($stringMatkul, 0, -2);
    }


}
