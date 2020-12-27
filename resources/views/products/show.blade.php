@extends('layouts.app')
@section('title','Welcome')
@section('content')
@if(isset($prods))
<p>Jumlah data : {{$juml}}</p>
<div class="container">
    <div class="row">
        @foreach($prods as $prod)
        <div class="col-12 col-md-4">
            <div class="card mb-4" style="width: 18rem;">
                <img class="card-img-top" style="height:200px" src="{{ asset('img/'.$prod->thumbnail) }}" alt="Card image cap">
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
        </div>
        @endforeach
    </div>
</div>
@else
<p>Tidak ada Data</p>
@endif
@endsection
