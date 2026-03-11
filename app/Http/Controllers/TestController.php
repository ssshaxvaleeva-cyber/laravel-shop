<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show()
    {
        $num = 13;
        $str = 'Hello';
        $mas = [5, 2, 9, -7];
        return view('second', compact('num', 'str', 'mas'));
    }
}
