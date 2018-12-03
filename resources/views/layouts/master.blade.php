<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Biorritmos DUAL</title>

        <!-- BootStrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </head>
    <body style="background-color:#dcdcdc">
        <div class="flex-center position-ref full-height">
          <!-- INICIO NAVBAR -->
        	<nav class="navbar navbar-expand-sm" style="background-color:#b22222; font-family:'Amatic SC'; font-size:25px;">
			      <img src="img/logo.png" style="max-width:125px;"/>
			      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="navbar-toggler-icon"></span>
			 	    </button>
             @if(Session::has('nuevoUsuario'))
			  	  <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
              <nav class="cl-effect-14" style="margin-left:100px;">
                <a class="text-light mr-5" href="/" style="text-decoration:none;">Inicio</a>
                <a class="text-light mr-5" href="/login" style="text-decoration:none;">Login</a>
                @if(Session::has('nuevoUsuario'))
                <a class="text-light" href="/form" style="text-decoration:none;">Calculadora</a>
                @else
                <a class="text-light disabled" href="#" style="text-decoration:none;">Calculadora</a>
                @endif
              </nav>
			    </div>
          @else
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
              <nav class="cl-effect-14" style="margin-left:-10px;">
                <a class="text-light mr-5" href="/" style="text-decoration:none;">Inicio</a>
                <a class="text-light mr-5" href="/login" style="text-decoration:none;">Login</a>
                @if(Session::has('nuevoUsuario'))
                <a class="text-light" href="/form" style="text-decoration:none;">Calculadora</a>
                @else
                <a class="text-light disabled" href="#" style="text-decoration:none;">Calculadora</a>
                @endif
              </nav>
			    </div>
          @endif
          @if(Session::has('nuevoUsuario'))
              <div class="dropdown">
              <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" style="font-size:25px;">
              <i class="far fa-user mr-2"></i> {{ Session::get('nuevoUsuario')->getNombre() }}
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/perfil"><i class="far fa-user mr-2"></i>Perfil</a>
                <a class="dropdown-item" href="/logout"><i class="fas fa-power-off mr-2"></i>Cerrar Sesión</a>
              </div>
              </div>
            @endif
        </nav>
        <!-- FIN NAVBAR -->
        <!-- INICIO CONTENIDO -->
        <div class="container-fluid" style="font-size:16px; font-family: 'Raleway', serif;">
            <div class="row">
              <div class="col-12">
                    @yield('content')
              </div>
            </div>
          </div>
      </div>
              <!-- INICIO FOOTER -->
              <div class="container-fluid footer mt-3 " style="background-color:#b22222;">
          <div class="row mt-2 mb-3">
            <div class="col-12">
              <nav class="navbar navbar-expand-sm" style="background-color:#b22222; font-family:'Amatic SC'; font-size:25px;">
			  	      <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                  <nav class="cl-effect-14" style="font-size:13px;">
                    <a class="text-light mr-5" href="/avisolegal" style="text-decoration:none;">Aviso Legal</a>
                    <a class="text-light mr-5" href="/cookies" style="text-decoration:none;">Cookies</a>
                    <a class="text-light" href="/contacto" style="text-decoration:none;">Contacto</a>
                  </nav>
                </div>
              </nav>
            </div>
          </div>
    			<div class="row text-center">
    				<div class="col-8 offset-2">
    					<p class="text-light small">2018 Copyright By Viox & TheRayoX</p>
    				</div>
    			</div>
        </div>
        <!-- FIN FOOTER -->
    </body>
</html>
