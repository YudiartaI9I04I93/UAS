@extends('layouts.app')

@section('title','Welcome')
@section('content')
@if(isset($prods))
<p>Jumlah data : {{$juml}}</p>
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{ asset('img/'.$prods->thumbnail) }}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{ $prods->name }}</h5>
        <p class="card-text">{{ $prods->desc }}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Rp.{{ $prods->price }},-</li>
    </ul>
    <div class="card-body">
        <a class="card-link">Add to cart</a>
    </div>
</div>
@else
<p>Tidak ada Data</p>
@endif
@endsection
