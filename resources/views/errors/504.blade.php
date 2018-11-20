@extends('layouts.error')
@section('title')
    Error 504
@stop
@section('contenido')
<body style="margin:0px;overflow:hidden; background-size:auto; height: 100%; width:100%; background-repeat:no-repeat; background-image:url('https://cdn.pixabay.com/photo/2018/05/13/12/53/network-3396348_1280.jpg')">
    <div class="container pl-5">
        <div class="row">
            <div class="col-12 text-center" style="color:white;">
                <h3 style="font-family:'Monoton'; margin-top:5.5em; font-size:48px;">ERROR 504</h3>
                <p>Gateway Timeout</p>
                <div class="text-center">
                    <a href="/"><button type="button" class="btn btn-outline-light">Recargar</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
@stop
