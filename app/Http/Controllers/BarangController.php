<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class BarangController extends Controller
{
    //data object

    private function Barang(): Collection
    {
        return collect([

        ]);
    }

    public function index()
    {
        return view('barang.index');
    }

}
