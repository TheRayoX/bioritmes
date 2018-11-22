@extends('layouts.master')
@section('content')
<div class="container text-justify mt-3" style="font-size:14px;">

</div>
<div id="chart-div"></div>
      {!! $lava->render('LineChart', 'Temps', 'chart-div') !!}
@stop