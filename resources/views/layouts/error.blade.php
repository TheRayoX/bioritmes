<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <title>@yield('title')</title>
       <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    </head>
    <body style="margin:0px;overflow:hidden; background-size:auto; height: 100%; width:100%; background-repeat:no-repeat; background-image:url('https://cdn.pixabay.com/photo/2018/11/07/23/51/chess-3801531_1280.jpg')">
        @yield('contenido')
    </body>
</html>