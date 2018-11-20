@extends('layouts.error')
@section('title')
    Error 404
@stop
@section('contenido')
    <div class="container pl-5">
        <div class="row">
            <div class="col-7 offset-5 text-right">
                <h3 style="font-family:'Monoton'; margin-top:6em; font-size:48px;">ERROR 404</h3>
                <p>Página no encontrada</p>
                <div class="text-center" style="margin-left:50%;">
                    <button type="button" class="btn btn-outline-secondary">Inicio</button>
                </div>
            </div>
        </div>
    </div>
@stop