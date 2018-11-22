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
    }

    public function create(){
        $lava = new Lavacharts;
        $biorritmo = $lava->DataTable();
        $biorritmo->addDateColumn('Fecha')
             ->addNumberColumn('Emocional')
             ->addNumberColumn('Físico')
             ->addNumberColumn('Intelectual')
             ->addRow(['2014-10-1',  60, 65, 62])
             ->addRow(['2014-10-2',  68, 65, 61]);
        $lava->LineChart('bioR', $biorritmo, [
            'title' => 'afas'
        ]);
        return view('index', [
            'lava'      => $lava
        ]);
    }
}