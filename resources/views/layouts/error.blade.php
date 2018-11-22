<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <title>@yield('title')</title>
       <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
       <link href="{{ asset('css/background.css') }}" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">

    </head>
        @yield('contenido')
</html>