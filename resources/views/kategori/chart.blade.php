@extends('layouts.app')

@section('title','Welcome')
@section('content')
@if(isset($Stats))
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current",{packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart(){
        var data = google.visualization.arrayToDataTable(!!$Stats!!);
        var view = new google.visualization.DataView(data);
        @if($JNS=="BAR")
            view.setColumns([0,1,
            {calc:"stringify",
            sourceColumn:1,
            type:"string",
            role:"annotation"}
            ,2]);

            var options = {
                title="{{$JudulGrafik}}",
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
@else
<p>Tidak ada Data</p>
@endif
@endsection
