<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function index()
    {
        return view('fibonacci');
    }

    public function hasil(Request $request)
    {
        $awal = 0;
        $akhir = 1;

        $rows = $request->rows;
        $columns = $request->columns;
        $array = array();

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $columns; $j++) {
                $array[$i][$j] = $awal;
                $temp = $awal + $akhir;
                $awal = $akhir;
                $akhir = $temp;
            }
        }
        // dd($array);
        return view('fibonacci', compact('array'));
    }
}