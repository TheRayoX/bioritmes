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
    	$this->calculaEmocional();
    	$this->calculaFisico();
    	$this->calculaIntelectual();
    	echo $this->fisico.'<br>';
    	echo $this->emocional.'<br>';
    	echo $this->intelectual.'<br>';
        }

    public function calculaEmocional(){
    	//1 ciclo 28 dias
    	$dias = $this->diasDiferencia();
    	$arrayEmocional;
    	$this->emocional=round((sin((M_PI*2*$dias)/28))*100);
    	


    }
    public function calculaFisico(){
    	//1 ciclo 23 dias
    	$dias = $this->diasDiferencia();
    	$arrayFisico;
    	$this->fisico=round((sin((M_PI*2*$dias)/23))*100);
    	

    }
    public function calculaIntelectual(){
    	//1 ciclo 33 dias
    	$dias = $this->diasDiferencia();
    	$arrayIntelectual;
    	$this->intelectual=round((sin((M_PI*2*$dias)/33))*100);
    	

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
