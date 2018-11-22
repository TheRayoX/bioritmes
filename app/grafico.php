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

    public function calcularBiorritmo(){

        
    }

    public function calculaEmocional(){
    	$dias = $this->diasDiferencia();


    }
    public function calculaFisico(){
    	$dias = $this->diasDiferencia();
    	

    }
    public function calculaIntelectual(){
    	$dias = $this->diasDiferencia();
    	

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
}
