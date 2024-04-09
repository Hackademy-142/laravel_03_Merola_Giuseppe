<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticoliController extends Controller
{
    function articoli() {
        return view('articoli', ['articoli' => $this->arrayProdotti]);
    }

    public $arrayProdotti = [
        ['id' => 1, 'name' => 'Lampada Touch', 'categoria' => 'Luci', 'img'=> 'https://picsum.photos/200'],
        ['id' => 2, 'name' => 'Laptop', 'categoria' => 'PC', 'img'=> 'https://picsum.photos/201'],
        ['id' => 3, 'name' => 'Tastiera', 'categoria' => 'accessori', 'img'=> 'https://picsum.photos/202'],
        ['id' => 4, 'name' => 'Mouse', 'categoria' => 'accessori', 'img'=> 'https://picsum.photos/203'],
        ['id' => 5, 'name' => 'Cavo HDMI', 'categoria' => 'accessori', 'img'=> 'https://picsum.photos/204'],
    ];

    public function dettaglio($id){
        foreach ($this->arrayProdotti as $articolo){
            if ($id == $articolo['id']) {
                return view('dettaglioArticoli', ['articoli' => $articolo]);
            }
        }
    }


}
