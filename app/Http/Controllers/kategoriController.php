<?php

namespace App\Http\Controllers;

use App\Models\kategori;

class kategoriController extends Controller
{
    public function index(){
        $juml = kategori::count();
        $kats = kategori::all();

        return view('kategori/index',compact('kats','juml'));
    }

}
