@extends('layouts.master')
@section('content')
<div class="container m-auto" style="width:65%;">
<div id="chart-div" class="mt-5">
      {!! $lava->render('LineChart', 'Temps', 'chart-div') !!}
</div>
</div>
<div class="container text-justify mt-3" style="font-size:14px;">

</div>
@stop