<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function index(){
        $kats = kategori::all();
        return view('kategori/index',compact('kats'));
    }
}
