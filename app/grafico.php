<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grafico extends Model
{
    private $fecha;
    private $fechaSistema;
    private $fisico;
    private $intelectual;
    private $emocional;
    private $fechas;
    private $resultado;

    public function __construct(){
    $this->fechaSistema();
    }

    public function getFechas(){
        return $this->fechas;
    }
    public function setFechas($fechas){
        $this->fechas = $fechas;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function setFecha($fecha){
        $this->fecha=$fecha;
    }

    public function getFechaSistema(){
        return $this->fechaSistema;
    }
    public function setFechaSistema($fechaSistema){
        $this->fechaSistema=$fechaSistema;
    }

    public function getFisico(){
        return $this->fisico;
    }
    public function setFisico($fisico){
        $this->fisico=$fisico;
    }

    public function getEmocional(){
        return $this->emocional;
    }
    public function setEmocional($emocional){
        $this->emocional=$emocional;
    }

    public function getIntelectual(){
        return $this->intelectual;
    }
    public function setIntelectual($intelectual){
        $this->intelectual=$intelectual;
    }
     public function getResultado(){
        return $this->resultado;
    }
    public function setResultado($resultado){
        $this->resultado=$resultado;
    }
//De momento he añadido al array correspondiente el valor de todos los dias en un periodo de 30, donde el dia de hoy és el 15
//He comprobado que funciona correctamente con algunas calculadoras de internet, te dejo los echo hechos para que puedas consultar
//funcion que engloba todos los calculos que necesita el gràfico
    public function calcularBiorritmo(){
    	$this->calculaEmocional();
    	$this->calculaFisico();
        $this->calculaIntelectual();
        $this->calculaFecha();
        $this->calculaResultado();
        }
//calculos de cada uno de los biorritmos
    public function calculaEmocional(){
    	//1 ciclo 28 dias
    	$dias = $this->diasDiferencia();
    	for($i=15;$i>=0;$i--){
    	$this->emocional[$i]=round((sin((M_PI*2*$dias)/28))*100);
    	$dias = $dias-1;
    	}
    	$dias = $this->diasDiferencia()+1;
    	for($i=16;$i<=30;$i++){
    	$this->emocional[$i]=round((sin((M_PI*2*$dias)/28))*100);
    	$dias = $dias+1;
    	}
    }
    public function calculaFisico(){
    	//1 ciclo 23 dias
    	$dias = $this->diasDiferencia();
    	for($i=15;$i>=0;$i--){
    	$this->fisico[$i]=round((sin((M_PI*2*$dias)/23))*100);
    	$dias = $dias-1;
    	}
    	$dias = $this->diasDiferencia()+1;
    	for($i=16;$i<=30;$i++){
    	$this->fisico[$i]=round((sin((M_PI*2*$dias)/23))*100);
    	$dias = $dias+1;
    	}
    }
    public function calculaIntelectual(){
    	//1 ciclo 33 dias
    	$dias = $this->diasDiferencia();
    	for($i=15;$i>=0;$i--){
    	$this->intelectual[$i]=round((sin((M_PI*2*$dias)/33))*100);
    	$dias = $dias-1;
    	}
    	$dias = $this->diasDiferencia()+1;
    	for($i=16;$i<=30;$i++){
    	$this->intelectual[$i]=round((sin((M_PI*2*$dias)/33))*100);
    	$dias = $dias+1;
    	}
    }
    //coge la fecha actual del sistema al entrar desde el login
    public function fechaSistema(){
    date_default_timezone_set('Europe/Madrid');
	$date = date('Y-m-d', time());
	$this->fechaSistema = $date;
    }
    //convierte la fecha de nacimiento al formato deseado
    public function convertirFecha(){
    	$time = strtotime($this->fecha);
		$newformat = date('Y-m-d',$time);
		$this->fecha=$newformat;
    }
    //convierte la fecha del sistema al formato deseado
    public function convertirFechaSistema(){
    	$time = strtotime($this->fechaSistema);
		$newformat = date('Y-m-d',$time);
		$this->fechaSistema=$newformat;
    }
    //calcula la diferencia entre las dos fechas y devuelve los dias
    public function diasDiferencia(){
    	$this->convertirFecha();
    	$this->convertirFechaSistema();
    	$datetime1 = date_create($this->fecha);
		$datetime2 = date_create($this->fechaSistema);
    	$interval = date_diff($datetime1,$datetime2);
		$resultado = $interval->format('%a');
		return $resultado;
    }
    //calcula a partir de la fecha del sistema / o la dada por el usuario 15 dias antes y 15 dias despues
    public function calculaFecha(){
        $contador = 0;
        for($i=15;$i>=0;$i--){
            $this->convertirFechaSistema();
            $datetime = date('Y-m-d', strtotime($this->fechaSistema."- $contador days"));
            $this->fechas[$i] = $datetime;
            $contador++;
            }
        $contador = 1;
        for($i=16;$i<=30;$i++){
            $this->convertirFechaSistema();
            $datetime = date('Y-m-d', strtotime($this->fechaSistema."+ $contador days"));
            $this->fechas[$i] = $datetime;
            $contador++;
            }
    }
    public function calculaResultado(){
    	$fisicoActual = $this->fisico[15];
    	$intelectoActual = $this->intelectual[15];
    	$emocionalActual = $this->emocional[15];
    	$fisicoSiguiente = $this->fisico[16];
    	$intelectoSiguiente = $this->intelectual[16];
    	$emocionalSiguiente = $this->emocional[16];
    	//calculo resultados fisico (resultado[0])
    	if($fisicoActual<0){
    		$this->resultado[0] = "Tú nivel físico está en negativo.";
    	}
    	else if($fisicoActual>0){
    		$this->resultado[0] = "Tú nivel fisico está en positivo.";
    	}
    	else{
    		$this->resultado[0] = "Tú nivel físico está en posición neutral.";
    	}
    	//compruebo si la tendencia es subir o bajar
    	if($fisicoActual<$fisicoSiguiente){
    		$this->resultado[0] = $this->resultado[0]." En los siguientes días tu nivel físico subirá.";
    	}
    	else{
    		$this->resultado[0] = $this->resultado[0]." En los siguientes días tu nivel físico bajará.";
    	}
    	//calculo resultados intelectual(resultado[1])
    	if($intelectoActual<0){
    		$this->resultado[1] = "Tú nivel intelectual está en negativo.";
    	}
    	else if($intelectoActual>0){
    		$this->resultado[1] = "Tú nivel intelectual está en positivo.";
    	}
    	else{
    		$this->resultado[1] = "Tú nivel intelectual está en posición neutral.";
    	}
    	//compruebo si la tendencia es subir o bajar
    	if($intelectoActual<$intelectoSiguiente){
    		$this->resultado[1] = $this->resultado[1]." En los siguientes días tu nivel intelectual subirá.";
    	}
    	else{
    		$this->resultado[1] = $this->resultado[1]." En los siguientes días tu nivel intelectual bajará.";
    	}
    	//calculo resultados emocional(resultado[2])
    	if($emocionalActual<0){
    		$this->resultado[2] = "Tú nivel emocional está en negativo.";
    	}
    	else if($emocionalActual>0){
    		$this->resultado[2]= "Tú nivel emocional está en positivo.";
    	}
    	else{
    		$this->resultado[2] = "Tú nivel emocional está en posición neutral.";
    	}
    	//compruebo si la tendencia es subir o bajar
    	if($emocionalActual<$emocionalSiguiente){
    		$this->resultado[2] = $this->resultado[2]." En los siguientes días tu nivel emocional subirá.";
    	}
    	else{
    		$this->resultado[2] = $this->resultado[2]." En los siguientes días tu nivel emocional bajará.";
    	}

    }
   

	

}
