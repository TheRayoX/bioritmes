@extends('layouts.error')
@section('title')
    Error 403
@stop
@section('contenido')
<body style="margin:0px;overflow:hidden; background-size:auto; height: 100%; width:100%; background-repeat:no-repeat; background-image:url('/img/403.jpg')">
    <div class="container pl-5">
        <div class="row">
            <div class="col-12 text-center">
                <h3 style="font-family:'Monoton'; margin-top:1em; font-size:48px;">ERROR 403</h3>
                <p>Prohibido el paso!</p>
                <div class="text-center">
                    <a href="/"><button type="button" class="btn btn-outline-dark">Ir a Inicio</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
@stop