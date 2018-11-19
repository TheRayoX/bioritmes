<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- BootStrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    </head>
    <body style="background-color:#dcdcdc">
        <div class="flex-center position-ref full-height">
        	<nav class="navbar navbar-expand-sm" style="background-color:#b22222; font-family:'Amatic SC'; font-size:25px;">
			  <a class="navbar-brand text-light" href="index.php">LOGO</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			 	</button>
			  	<div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
			    <nav class="cl-effect-14" style="margin-left:-10px;">
			      <a class="text-light mr-5" href="index.php" style="text-decoration:none;">Inicio</a>
			      <a class="text-light mr-5" href="#" style="text-decoration:none;">INICIO</a>
            <a class="text-light" href="#" style="text-decoration:none;">Resultado</a>
          </nav>
			  </div>
      </nav>
        

        <div class="container-fluid" style="height:100%;">
            <div class="row">
            <div class="container">
                    @yield('content')
            </div>

            </div>

          </div>

            <div class="container-fluid" style="position:fixed;bottom:0px; background-color:#b22222;">
    			<div class="row">
    				<div class="col-8 offset-2">
    					<p class="text-light text-center mt-4 small">Terms of Use | Privacy Policy | Mobile site<br/>2018 Copyright By Viox and TheRayoX<br/>All Rights Reserved</p>
    				</div>
    			</div>
			</div>
       </div>
    </body>
</html>
