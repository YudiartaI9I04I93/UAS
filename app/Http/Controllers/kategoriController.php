<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juml = kategori::count();
        $kats = kategori::all();

        $kats = kategori::get();
        $role = array("Role"=>"Blue");
        $a = array("Element","totalProducts",$role);
        $stats = array($a);

        foreach ($kats as $kat) {
            $prod = product::where("category",$kat->id)->get();
            $jml = 0;
            foreach($prod as $ix){
                $jml += $ix->qty;
            }
            array_push($stats,array($kat->Kategori,$jml,"yellow"));
        }

        return view('kategori.index', compact('kats', 'juml'))
        ->with('JNS','BAR')
        ->with('JudulGrafik',"Total Produk per Kategori")
        ->with('Stats',$stats);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori/create');
    }

    public function getStatisticData(){
        $kats = kategori::get();
        $role = array("Role"=>"Blue");
        $a = array("Element","totalProducts",$role);
        $stats = array($a);

        foreach ($kats as $kat) {
            $prod = product::where("category",$kat->id)->get();
            $jml = 0;
            foreach($prod as $ix){
                $jml += $ix->qty;
            }
            array_push($stats,array($kat->category,$jml,"yellow"));
            var_dump($stats);
        }

        return view('kategori.chart')
        ->with('JNS','BAR')
        ->with('JudulGrafik',"Total Produk per Kategori")
        ->with('Stats',json_encode($stats));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kategori::create([
            'id' => '',
            'Kategori' => $request->baruKategori,
            'Keterangan' => $request->baruKeterangan,
        ]);
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kat = kategori::where('id', $id)->first();
        return view('kategori/edit', compact('kat'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kategori::where('id', $id)->delete();
        return redirect()->route('kategori.index');
    }
}
