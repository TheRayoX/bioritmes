@extends('layouts.master')

@section('content')
<div class="container text-center mt-5">
  <h2>Calcular Biorritmos</h2>
  <div class="row">
    <div class="col-4 offset-4 mt-3">
      <!-- INICIO FORMULARIO -->
      <form method="get" action="/save">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
          <label for="fechaNacimiento">Fecha Nacimiento</label>
          <input type="date" class="form-control text-center" name="fechaNacimiento">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
      <!-- FIN FORMULARIO -->
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-12">
      <!-- EXPLICACIÓN BIORRITMO -->
    <h2 class="text-center">¿Qué son los biorritmos?</h2>
    <p class="text-justify">
        Los biorritmos son ciclos periódicos y recurrentes de fenómenos fisiológicos que reflejan 
        las actitudes de las personas, sentimientos o estados de ánimo.
    </p>
    <p class="text-justify">
        Esta teoría la inició el médico alemán Wilhem Fliess después de recopilar datos de 
        personales como el número de días vividos, ciclos de enfermedades, periodicidad de 
        accidentes, etc. Posteriormente sus continuadores destacaron que un número importante 
        de muertes se producían cuando los tres ciclos, de 23, 28 y 33 días, coincidían en un 
        día crítico. De esta manera determinaron que había una propensión a los accidentes o 
        enfermedades mayor en algunos días determinados.
    </p>
    <p>
        Aunque esta teoría tiene poco fundamento científico, por el contrario, si que tiene 
        bastante base estadística, y cualquiera de nosotros lo puede comprobar, sólo hay que 
        ver los datos de los biorritmos de algún familiar o amigo a la fecha de su muerte, o 
        cuando nosotros mismos nos hemos enfrentado a algún problema, accidente o enfermedad.
    </p>
    <p class="text-justify">
        Con el paso del tiempo, los tres ciclos descubiertos por los seguidores del trabajo de 
        Wilhem Fliess: físico, emocional y mental, se han visto incrementados en uno más, el 
        intuicional, que está comprendido en intervalos de 38 días.
    </p>
    <p class="text-justify">
        Estos cuatro ciclos comienzan su ascensión desde cero en el momento del nacimiento y 
        se suceden de forma continua a lo largo de la vida de las personas. Cada uno de estos 
        cuatro ciclos está comprendido por dos fases, una etapa alta o positiva y etapa baja o 
        negativa. A los días en los que se realiza el cambio entre estas etapas se les conoce como 
        días críticos, al entender que nuestro cuerpo realiza un esfuerzo para amoldarse a ese cambio.
    </p>   
    </div>
  </div>
</div>
                
@stop