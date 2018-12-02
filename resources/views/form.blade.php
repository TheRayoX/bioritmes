@extends('layouts.master')
@section('content')
<div class="container m-auto" style="width:65%;">
<div id="chart-div" class="mt-5">
      {!! $lava->render('LineChart', 'bioR', 'chart-div') !!}
</div>
</div>
<div class="container text-center mt-3 w-25" style="font-size:14px;">
	<form method="post" action="/form2">
      	{{ csrf_field() }}
        <div class="form-group">
          <label for="fechaNacimiento">Fecha Nacimiento</label>
          <input type="date" class="form-control text-center" name="fechaNacimiento">
        </div>
         <div class="form-group">
          <label for="fechaSistema">Fecha</label>
          <input type="date" class="form-control text-center" name="fechaSistema">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>

</div>
<div class="container">
	<div class="row">
	<div class="col-1 bg-danger">
	<p class="m-0 font-weight-bold">Fisico</p>
	<h2>{{$resultado[3]}}%</h2>
	</div>
	<p>{{$resultado[0]}}</p>
	</div>
	<div class="row">
	<div class="col-1 bg-warning">
	<p class="m-0 font-weight-bold">Intelectual</p>
	<h2>{{$resultado[4]}}%</h2>
	</div>
	<p>{{$resultado[1]}}</p>
	</div>
	<div class="row">
	<div class="col-1 bg-primary">
	<p class="m-0 font-weight-bold">Emocional</p>
	<h2>{{$resultado[5]}}%</h2>
	</div>
	<p>{{$resultado[2]}}</p>
	</div>
</div>
@stop