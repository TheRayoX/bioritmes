<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\grafico;
use Khill\Lavacharts\Lavacharts;

class graphController extends Controller
{
    
    public function index(Request $request){
        $usuario = $request->session()->get('nuevoUsuario');
        $grafico = new grafico();
        $request->session()->put('nuevoGrafico',$grafico);
        //$this->create($request);
        return redirect('/form');
    }

    public function create(Request $request){
        if($request->session()->has('nuevoGrafico')){
        $lava = new Lavacharts;
        $grafico = $request->session()->get('nuevoGrafico');
        $usuario = $request->session()->get('nuevoUsuario');
        $grafico->setFecha($usuario->getFechaNacimiento());
        $grafico->calcularBiorritmo();
        $emocional = $grafico->getEmocional();
        $fisico = $grafico->getFisico();
        $intelectual = $grafico->getIntelectual();
        $fechas = $grafico->getFechas();
        $resultado = $grafico->getResultado();
        $resultado[3] = $fisico[15];
        $resultado[4] = $intelectual[15];
        $resultado[5] = $emocional[15];
        $biorritmo = $lava->DataTable();
        $biorritmo->addDateColumn('Fecha')
             ->addNumberColumn('Emocional')
             ->addNumberColumn('Físico')
             ->addNumberColumn('Intelectual')
             ->addRow([$fechas[0], $emocional[0] , $fisico[0], $intelectual[0]])
             ->addRow([$fechas[1], $emocional[1] , $fisico[1], $intelectual[1]])
             ->addRow([$fechas[2], $emocional[2] , $fisico[2], $intelectual[2]])
             ->addRow([$fechas[3], $emocional[3] , $fisico[3], $intelectual[3]])
             ->addRow([$fechas[4], $emocional[4] , $fisico[4], $intelectual[4]])
             ->addRow([$fechas[5], $emocional[5] , $fisico[5], $intelectual[5]])
             ->addRow([$fechas[6], $emocional[6] , $fisico[6], $intelectual[6]])
             ->addRow([$fechas[7], $emocional[7] , $fisico[7], $intelectual[7]])
             ->addRow([$fechas[8], $emocional[8] , $fisico[8], $intelectual[8]])
             ->addRow([$fechas[9], $emocional[9] , $fisico[9], $intelectual[9]])
             ->addRow([$fechas[10], $emocional[10] , $fisico[10], $intelectual[10]])
             ->addRow([$fechas[11], $emocional[11] , $fisico[11], $intelectual[11]])
             ->addRow([$fechas[12], $emocional[12] , $fisico[12], $intelectual[12]])
             ->addRow([$fechas[13], $emocional[13] , $fisico[13], $intelectual[13]])
             ->addRow([$fechas[14], $emocional[14] , $fisico[14], $intelectual[14]])
             ->addRow([$fechas[15], $emocional[15] , $fisico[15], $intelectual[15]])
             ->addRow([$fechas[16], $emocional[16] , $fisico[16], $intelectual[16]])
             ->addRow([$fechas[17], $emocional[17] , $fisico[17], $intelectual[17]])
             ->addRow([$fechas[18], $emocional[18] , $fisico[18], $intelectual[18]])
             ->addRow([$fechas[19], $emocional[19] , $fisico[19], $intelectual[19]])
             ->addRow([$fechas[20], $emocional[20] , $fisico[20], $intelectual[20]])
             ->addRow([$fechas[21], $emocional[21] , $fisico[21], $intelectual[21]])
             ->addRow([$fechas[22], $emocional[22] , $fisico[22], $intelectual[22]])
             ->addRow([$fechas[23], $emocional[23] , $fisico[23], $intelectual[23]])
             ->addRow([$fechas[24], $emocional[24] , $fisico[24], $intelectual[24]])
             ->addRow([$fechas[25], $emocional[25] , $fisico[25], $intelectual[25]])
             ->addRow([$fechas[26], $emocional[26] , $fisico[26], $intelectual[26]])
             ->addRow([$fechas[27], $emocional[27] , $fisico[27], $intelectual[27]])
             ->addRow([$fechas[28], $emocional[28] , $fisico[28], $intelectual[28]])
             ->addRow([$fechas[29], $emocional[29] , $fisico[29], $intelectual[29]])
             ->addRow([$fechas[30], $emocional[30] , $fisico[30], $intelectual[30]]);

        $lava->LineChart('bioR', $biorritmo, [
            
        ]);
        return view('form', [
            'lava'      => $lava
        ],['resultado' => $resultado]);
    }
    else{
        return redirect('/');
    }
    }
     public function store(Request $request)
    {
        //guarda la validación hecha en el formulario
        $usuario = $request->session()->get('nuevoUsuario');
        $grafico = $request->session()->get('nuevoGrafico');
        if($request->input('fechaNacimiento')!=""){
        $fecha = $request->input('fechaNacimiento');
    }
        else{
        $fecha = $usuario->getFechaNacimiento();
    }
         if($request->input('fechaSistema')!=""){
        
        $fechaSistema = $request->input('fechaSistema');
    }
            else{
        $fechaSistema = $grafico->getFechaSistema();
    }

        if($fecha<$fechaSistema){
          $usuario->setFechaNacimiento($fecha);
          $grafico->setFechaSistema($fechaSistema);
      }
        else{
           //error
        }

         $this->create($request);
        return redirect('/form');
        

    }
}