@extends('templates.default')

@section('title','Welcome')
@section('content')
@if(isset($prods))
<p>Jumlah data : {{$juml}}</p>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Thumbnail</th>
            <th scope="col">Category</th>
            <th scope="col">Desc</th>
            <th scope="col" colspan='2'>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($prods as $prod)
        <tr>
            <th scope="row">1</th>
            <td>{{$prod->name}}</td>
            <td>{{$prod->price}}</td>
            <td style="height:100px;text-align:center">
                <img src="{{ asset('/img/'.$prod->thumbnail) }}" class="h-100 img-thumbnail" alt="...">
            </td>
            <td>{{$prod->category}}</td>
            <td>{{$prod->desc}}</td>
            <td><a class="btn btn-primary btn-md btn-block" href="/products/{{$prod->id}}/edit">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>Tidak ada Data</p>
@endif
@endsection