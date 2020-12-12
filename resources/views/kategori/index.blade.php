@extends('templates.default')

@section('title','Welcome')
@section('content')
@if(isset($kats))
<p>Jumlah data : {{$juml}}</p>
@foreach($kats as $kat)
<a href="/products/category/{{$kat->id}}" style="color:inherit">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $kat->Kategori }}</h5>
            <p class="card-text">{{ $kat->Keterangan }}</p>
        </div>
    </div>
</a>
@endforeach
@else
<p>Tidak ada Data</p>
@endif
@endsection