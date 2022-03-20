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

}
