@extends('layouts.error')
@section('title')
    Error 400
@stop
@section('contenido')
<body style="margin:0px;overflow:hidden; background-size:auto; height: 100%; width:100%; background-repeat:no-repeat; background-image:url('/img/400.jpg')">
    <div class="container pl-5">
        <div class="row">
            <div class="col-5 text-center">
                <h3 style="font-family:'Monoton'; margin-top:6em; font-size:48px;">ERROR 400</h3>
                <p>Bad Request</p>
                <div class="text-center">
                    <a href="/"><button type="button" class="btn btn-outline-secondary">Ir a Inicio</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
@stop