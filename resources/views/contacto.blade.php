@extends('layouts.master')
@section('content')
    <div class="container mt-4 text-center">
        <div class="row">
            <div class="col-6 offset-3">
        <form method="GET">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre</label>
                <input type="text" name="nombre" class="form-control text-center" placeholder="Escribe tu nombre">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" name="email" class="form-control text-center" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Texto</label>
                <textarea class="form-control text-justify w-100" rows="5" placeholder="Escribe lo que quieras enviarnos"></textarea>
            </div>
            <input type="submit" value="Enviar" class="btn btn-light">
        </form>
        </div>
        </div>
    </div>
@stop