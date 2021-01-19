@extends('layouts.app')

@section('title','Welcome')
@section('content')
<h2>Edit Kategori ID : {{$kat->id}}</h2>

<form method="POST" action="/kategori">
    @csrf()
    @method('POST')
    <div class="form-group">
        <label for="namaKategori">Nama kategori</label>
        <input type="text" class="form-control" id="namaKategori" placeholder="goreng" name="namaKategori" value="{{$kat->Kategori}}">
    </div>
    <div class="form-group">
        <label for="descMakanan">Deskripsi</label>
        <textarea class="form-control" id="descMakanan" rows="3" name="baruDesc" placeholder='digituin'>{{$kat->Keterangan}}</textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-lg btn-block" id="submitEdit" value="Simpan"/>
    </div>
</form>
@csrf
@method('DELETE')
<form method="POST" action="/kategori">
    <div class="form-group">
        <input type="submit" class="btn btn-danger btn-lg btn-block" id="Hapus" value="Hapus"/>
    </div>
</form>
@endsection
