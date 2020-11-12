<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ProductController extends Controller
{
    public function index(){
        $prods = product::first();
        return view('products/index',compact('prods'));
    }

    public function showproducts(){
        $prods = product::all();
        return view('products/show',compact('prods'));
    }
}
