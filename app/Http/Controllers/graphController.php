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
        $grafico->setFecha($usuario->getFechaNacimiento());
        $grafico->calcularBiorritmo();
        $request->session()->put('nuevoGrafico',$grafico);
        $this->create($request);

    }

    public function create(Request $request){
        $lava = new Lavacharts;
        $grafico = $request->session()->get('nuevoGrafico');
        $emocional = $grafico->getEmocional();
        $fisico = $grafico->getFisico();
        $intelectual = $grafico->getIntelectual();
        $biorritmo = $lava->DataTable();
        $biorritmo->addDateColumn('Fecha')
             ->addNumberColumn('Emocional')
             ->addNumberColumn('Físico')
             ->addNumberColumn('Intelectual')
             ->addRow(['2018-11-8', $emocional[0] , $fisico[0], $intelectual[0]])
             ->addRow(['2018-11-9', $emocional[1] , $fisico[1], $intelectual[1]])
             ->addRow(['2018-11-10', $emocional[2] , $fisico[2], $intelectual[2]])
             ->addRow(['2018-11-11', $emocional[3] , $fisico[3], $intelectual[3]])
             ->addRow(['2018-11-12', $emocional[4] , $fisico[4], $intelectual[4]])
             ->addRow(['2018-11-13', $emocional[5] , $fisico[5], $intelectual[5]])
             ->addRow(['2018-11-14', $emocional[6] , $fisico[6], $intelectual[6]])
             ->addRow(['2018-11-15', $emocional[7] , $fisico[7], $intelectual[7]])
             ->addRow(['2018-11-16', $emocional[8] , $fisico[8], $intelectual[8]])
             ->addRow(['2018-11-17', $emocional[9] , $fisico[9], $intelectual[9]])
             ->addRow(['2018-11-18', $emocional[10] , $fisico[10], $intelectual[10]])
             ->addRow(['2018-11-19', $emocional[11] , $fisico[11], $intelectual[11]])
             ->addRow(['2018-11-20', $emocional[12] , $fisico[12], $intelectual[12]])
             ->addRow(['2018-11-21', $emocional[13] , $fisico[13], $intelectual[13]])
             ->addRow(['2018-11-22', $emocional[14] , $fisico[14], $intelectual[14]])
             ->addRow(['2018-11-23', $emocional[15] , $fisico[15], $intelectual[15]])
             ->addRow(['2018-11-24', $emocional[16] , $fisico[16], $intelectual[16]])
             ->addRow(['2018-11-25', $emocional[17] , $fisico[17], $intelectual[17]])
             ->addRow(['2018-11-26', $emocional[18] , $fisico[18], $intelectual[18]])
             ->addRow(['2018-11-27', $emocional[19] , $fisico[19], $intelectual[19]])
             ->addRow(['2018-11-28', $emocional[20] , $fisico[20], $intelectual[20]])
             ->addRow(['2018-11-29', $emocional[21] , $fisico[21], $intelectual[21]])
             ->addRow(['2018-11-30', $emocional[22] , $fisico[22], $intelectual[22]])
             ->addRow(['2018-12-1', $emocional[23] , $fisico[23], $intelectual[23]])
             ->addRow(['2018-12-2', $emocional[24] , $fisico[24], $intelectual[24]])
             ->addRow(['2018-12-3', $emocional[25] , $fisico[25], $intelectual[25]])
             ->addRow(['2018-12-4', $emocional[26] , $fisico[26], $intelectual[26]])
             ->addRow(['2018-12-5', $emocional[27] , $fisico[27], $intelectual[27]])
             ->addRow(['2018-12-6', $emocional[28] , $fisico[28], $intelectual[28]])
             ->addRow(['2018-12-7', $emocional[29] , $fisico[29], $intelectual[29]])
             ->addRow(['2018-12-8', $emocional[30] , $fisico[30], $intelectual[30]]);
        $lava->LineChart('bioR', $biorritmo, [
            'title' => 'afas'
        ]);
        return view('index', [
            'lava'      => $lava
        ]);
    }
}