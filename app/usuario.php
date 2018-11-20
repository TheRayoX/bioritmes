<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
   private $nombre;
   private $fechaNacimiento;

  public function getNombre(){
  	return $this->nombre;
  }
  public function setNombre($nombre){
  	$this->nombre=$nombre;
  }
   public function getFechaNacimiento(){
   	return $this->fechaNacimiento;
  }
  public function setFechaNacimiento($fecha){
  	$this->fechaNacimiento=$fecha;
  }

}
