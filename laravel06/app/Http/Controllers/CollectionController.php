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
    }
}
