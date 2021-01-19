@extends('layouts.app')

@section('title','Welcome')
@section('content')
<form method="POST" action="/kategori">
    @csrf()
    @method('POST')
    <div class="form-group">
        <label for="namaKategori">Nama Kategori</label>
        <input type="text" class="form-control" id="namaKategori" placeholder="goreng" name="baruKategori">
    </div>
    <div class="form-group">
        <label for="descKategori">Deskripsi</label>
        <textarea class="form-control" id="descKategori" rows="3" name="baruKeterangan">keterangan</textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success btn-lg btn-block" id="submitBaru" value="Tambah" />
    </div>
</form>
@endsection
