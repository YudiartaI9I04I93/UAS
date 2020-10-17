<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project 001 - Welcome</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="antialiased">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Yudiartha</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/products">Products <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        @if(isset($prods))
        <p>{{ "Ada" }}</p>
        @foreach($prods as $prod)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('img/'.$prod[3]) }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $prod[1] }}</h5>
                <p class="card-text">{{ $prod[4] }}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Rp.{{ $prod[2] }},-</li>
            </ul>
            <div class="card-body">
                <a class="card-link">Add to cart</a>
            </div>
        </div>
        @endforeach
        @else
        <p>Tidak ada Data</p>
        @endif
    </div>
</body>

</html>