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

    }
    public function convertirFecha(){
    	$time = strtotime($this->fecha);

		$newformat = date('Y-m-d',$time);

		$this->fecha=$newformat;
    }
}
