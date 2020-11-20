@extends('templates.default')

@section('title','Welcome')
@section('content')
@if(isset($kats))
<p>{{ "Ada" }}</p>
@foreach($kats as $kat)
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $kat->Kategori }}</h5>
        <p class="card-text">{{ $kat->Keterangan }}</p>
    </div>
</div>
@endforeach
@else
<p>Tidak ada Data</p>
@endif
@endsection