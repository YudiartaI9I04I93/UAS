<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ProductController extends Controller
{

    public function index(){
        $prods = product::all();
        $juml = $prods->count();
        return view('products/show',compact('prods','juml'));
    }

    public function showProductsByCategory($catid){
        $prods = product::where('category',$catid)->get();
        $juml = $prods->count();
        return view('products/show',compact('prods','juml'));
    }
}
