@extends('layouts.master')

@section('content')
<div class="container text-center">
   <h1>Formulario de pruebas</h1>
<div class="row">
  <div class="col-4 offset-4">
  <form method="get" action="/save">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
   <div class="form-group">
    <label for="fechaNacimiento">Fecha Nacimiento</label>
    <input type="date" class="form-control " id="fechaNacimiento" name="fechaNacimiento">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
</div>
</div>
                
@stop