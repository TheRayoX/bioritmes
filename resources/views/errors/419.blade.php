@extends('layouts.error')
@section('title')
    Error 419
@stop
@section('contenido')
<body>
    <div class="bgimg-1">   
    <div class="container pl-5">
        <div class="row">
            <div class="col-7 offset-5 text-right">
                <h3 style="font-family:'Monoton'; margin-top:6em; font-size:48px;">ERROR 419</h3>
                <p>Tu sesión ha expirado.<br>Recarga la página.</p>
                <div class="text-center"style="margin-left:50%;">
                    <a href="/"><button type="button" class="btn btn-outline-secondary">Ir a Inicio</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@stop