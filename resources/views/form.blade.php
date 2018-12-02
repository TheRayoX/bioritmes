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
          <label for="fechaNacimiento" class="font-weight-bold">Fecha Nacimiento</label>
          <input type="date" class="form-control text-center" name="fechaNacimiento">
        </div>
         <div class="form-group">
          <label for="fechaSistema" class="font-weight-bold">Fecha</label>
          <input type="date" class="form-control text-center" name="fechaSistema">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
</div>
	<div class="container text-center mb-3">
		<div class="row mt-3">
			<div class="offset-2 col-2 border rounded bg-danger">
				<p class="m-0 text-center mt-1">Fisico</p>
				<h2 class="font-weight-bold">{{$resultado[3]}}%</h2>
			</div>
			<p class="mt-4 ml-3">{{$resultado[0]}}</p>
		</div>
		<div class="row mt-2">
			<div class="offset-2 col-2 border rounded bg-warning">
			<p class="m-0 text-center mt-1">Intelectual</p>
			<h2 class="font-weight-bold">{{$resultado[4]}}%</h2>
			</div>
			<p class="mt-4 ml-3">{{$resultado[1]}}</p>
		</div>
		<div class="row mt-2">
			<div class="offset-2 col-2 border rounded bg-primary">
			<p class="m-0 text-center mt-1">Emocional</p>
			<h2 class="font-weight-bold">{{$resultado[5]}}%</h2>
			</div>
			<p class="mt-4 ml-3">{{$resultado[2]}}</p>
		</div>
</div>
@stop