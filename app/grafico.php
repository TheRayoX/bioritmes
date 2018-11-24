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
//De momento he añadido al array correspondiente el valor de todos los dias en un periodo de 30, donde el dia de hoy és el 15
//He comprobado que funciona correctamente con algunas calculadoras de internet, te dejo los echo hechos para que puedas consultar
    public function calcularBiorritmo(){
    	$this->calculaEmocional();
    	$this->calculaFisico();
        $this->calculaIntelectual();
        $this->calculaFecha();
        }

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
    public function fechaSistema(){
    date_default_timezone_set('Europe/Madrid');
	$date = date('Y-m-d', time());
	$this->fechaSistema = $date;
    }
    public function convertirFecha(){
    	$time = strtotime($this->fecha);
		$newformat = date('Y-m-d',$time);
		$this->fecha=$newformat;
    }
    public function diasDiferencia(){
    	$this->convertirFecha();
    	$this->fechaSistema();
    	$datetime1 = date_create($this->fecha);
		$datetime2 = date_create($this->fechaSistema);
    	$interval = date_diff($datetime1,$datetime2);
		$resultado = $interval->format('%a');
		return $resultado;
    }
    public function calculaFecha(){
        $contador = 0;
        for($i=15;$i>=0;$i--){
            $this->fechaSistema();
            $datetime = date('Y-m-d', strtotime($this->fechaSistema."- $contador days"));
            $this->fechas[$i] = $datetime;
            $contador++;
            }
        $contador = 1;
        for($i=16;$i<=30;$i++){
            $this->FechaSistema();
            $datetime = date('Y-m-d', strtotime($this->fechaSistema."+ $contador days"));
            $this->fechas[$i] = $datetime;
            $contador++;
            }
    }

	

}
