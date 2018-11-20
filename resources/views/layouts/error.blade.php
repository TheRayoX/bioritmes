<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <title>@yield('title')</title>
    </head>
    <body style="margin:0px; overflow:hidden;background-size:cover;">
        @yield('imagen')
        @yield('contenido')
    </body>
</html>