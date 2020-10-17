<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private function productExs(){
        return [
            ["PR001","Nasi Goreng","15000","nasigoreng.jpg","No micin"],
            ["PR002","Sayur Ijo","10000","sayurijo.jpg","No gosong"],
            ["PR003","Ayam Geprek","20000","ayamgeprek.jpg","No Pedas"]
        ];
    }
    public function index(){
        $prods = $this->productExs()[0];
        return view('products/index',compact('prods'));
    }

    public function showproducts(){
        $prods = $this->productExs();
        return view('products/show',compact('prods'));
    }
}
