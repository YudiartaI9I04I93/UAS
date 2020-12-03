<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function showProductsByCategory($catid){
        $prods = product::where('category',$catid)->get();
        $juml = $prods->count();
        return view('products/show',compact('prods','juml'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prods = product::all();
        $juml = $prods->count();
        return view('products/show',compact('prods','juml'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kats = kategori::all();
        return view('products/create',compact('kats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        product::create([
            'id' => '',
            'name' => $request->baruNama,
            'price' => $request->baruHarga,
            'desc' => $request->baruDesc,
            'thumbnail' => $request->baruGambar,
            'category' => $request->baruKategori,
            'created_at' => '',
            'updated_at' => '',
        ]);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kats = kategori::all();
        $prod = product::where('id',$id)->first();
        return view('products/edit',compact('prod','kats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
