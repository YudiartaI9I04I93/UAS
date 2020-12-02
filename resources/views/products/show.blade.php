@extends('templates.default')

@section('title','Welcome')
@section('content')
@if(isset($prods))
<p>Jumlah data : {{$juml}}</p>
@foreach($prods as $prod)
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{ asset('img/'.$prod->thumbnail) }}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{ $prod->name }}</h5>
        <p class="card-text">{{ $prod->desc }}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Rp.{{ $prod->price }},-</li>
    </ul>
    <div class="card-body">
        <a class="card-link">Add to cart</a>
    </div>
</div>
@endforeach
@else
<p>Tidak ada Data</p>
@endif
@endsection