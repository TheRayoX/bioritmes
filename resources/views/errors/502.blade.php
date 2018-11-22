@extends('layouts.error')
@section('title')
    Error 502
@stop
@section('contenido')
<body>
    <div class="bgimg-2">   
    <div class="container pl-5">
        <div class="row">
            <div class="col-12 text-center" style="color:white;">
                <h3 style="font-family:'Monoton'; margin-top:5.5em; font-size:48px;">ERROR 502</h3>
                <p>Bad Gateway - Puerta de enlace incorrecta</p>
                <div class="text-center">
                    <a href="/"><button type="button" class="btn btn-outline-light">Recargar</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@stop