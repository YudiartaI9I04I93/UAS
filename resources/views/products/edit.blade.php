@extends('templates.default')

@section('title','Welcome')
@section('content')
<h2>Edit Data Produk ID : {{$prod->id}}</h2>

<form method="POST" action="/products">
    @csrf()
    @method('POST')
    <div class="form-group">
        <label for="namaMakanan">Nama makanan</label>
        <input type="text" class="form-control" id="namaMakanan" placeholder="sayur kol" name="baruNama" value="{{$prod->name}}">
    </div>
    <div class="form-group">
        <label for="hargaMakanan">Harga IDR</label>
        <input type="number" class="form-control" id="hargaMakanan" placeholder="100000" name="baruHarga" value="{{$prod->price}}">
    </div>
    <div class="form-group">
        <label for="kategoriMakanan">Kategori</label>
        <select class="custom-select" id="kategoriMakanan" name="baruKategori">
            @if(isset($kats))
            @foreach($kats as $kat)
            <option value='{{ $kat->id }}' {{$kat->id == $prod->category ? 'selected':''}}>{{ $kat->Kategori }}</h5>
                @endforeach
                @else
            <option>Tidak ada Kategori</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="thumbnailMakanan">Thumbnail Makanan</label>
        <input type="file" class="form-control-file" id="thumbnailMakanan" name="baruDesc" value="{{$prod->thumbnail}}">
    </div>
    <div class="form-group">
        <label for="descMakanan">Deskripsi</label>
        <textarea class="form-control" id="descMakanan" rows="3" name="baruDesc" placeholder='bahan dasar daging tikus'>{{$prod->desc}}</textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-lg btn-block" id="submitBaru" value="Simpan"/>
    </div>
</form>
@csrf
@method('DELETE')
<form method="POST" action="/products">
    <div class="form-group">
        <input type="submit" class="btn btn-danger btn-lg btn-block" id="submitBaru" value="Hapus"/>
    </div>
</form>
@endsection