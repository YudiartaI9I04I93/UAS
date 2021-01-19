@extends('layouts.app')

@section('title','Welcome')
@section('content')
@if(isset($kats))
<p>Jumlah data : {{$juml}}</p>
<div class="container-fluid">
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
</div>

@else
<p>Tidak ada Data</p>
@endif
<script type="text/javascript">
    google.charts.load("current",{packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart(){
        var djson = @json($Stats);

        var data = google.visualization.arrayToDataTable(djson);
        var view = new google.visualization.DataView(data);
        @if($JNS=="BAR")
            view.setColumns([0,
            {calc:"stringify",
            sourceColumn:1,
            type:"string",
            role:"annotation"}
            ,1]);

            var options = {
                title:"{{$JudulGrafik}}",
                width:600,
                height:400,
                bar:{groupWidth:"95%"},
                legend: {position: "none"},
            };

            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        @else
            var options = {
                title="{{$JudulGrafik}}",
            };
            var chart = new google.visualization.PieChart(document.getElementById("columnchart_values"));
        @endif
        chart.draw(view,options);
    }
</script>
<div class="container-fluid">
    <div id="columnchart_values" style="width:900px;height:300px;">
</div>
@endsection
