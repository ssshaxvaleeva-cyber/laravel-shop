<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        $array = [
            ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => 'img/img3.jpg'],
            ['id' => 2, 'title' => 'продукт 2', 'price' => 1500, 'path' => 'img/img2.jpg'],
            ['id' => 3, 'title' => 'продукт 3', 'price' => 2500, 'path' => 'img/img3.jpg'],
            ['id' => 3, 'title' => 'продукт 4', 'price' => 3500, 'path' => 'img/img2.jpg'],
            ['id' => 3, 'title' => 'продукт 5', 'price' => 4500, 'path' => 'img/img3.jpg'],
            ['id' => 3, 'title' => 'продукт 6', 'price' => 5500, 'path' => 'img/img2.jpg'],
            ['id' => 3, 'title' => 'продукт 7', 'price' => 6500, 'path' => 'img/img3.jpg'],
            ['id' => 3, 'title' => 'продукт 8', 'price' => 7500, 'path' => 'img/img2.jpg'],
        ];

        return view('array', compact('array'));
}
}
