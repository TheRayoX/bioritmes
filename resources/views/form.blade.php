@extends('layouts.master')
@section('content')
<div class="container m-auto" style="width:65%;">
<div id="chart-div" class="mt-5">
      {!! $lava->render('LineChart', 'bioR', 'chart-div') !!}
</div>
</div>
<div class="container text-justify mt-3" style="font-size:14px;">
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
@stop