<?php

namespace App\Http\Controllers;

use App\Http\Requests\formulario;
use Illuminate\Http\Request;
use App\usuario;



class bioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ruta = $request->path();
        if($ruta == '/'){
        return view('index');
        }
        else if($ruta == 'login'){
        return view('login');
        }
        else if($ruta == 'form'){
        return redirect('/login');
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $usuario = $request->session()->get('nuevoUsuario');
        return view('form')->with('validated',$usuario);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(formulario $request)
    {
        //guarda la validación hecha en el formulario
        $validated = $request->validated();
        $usuario = new usuario();
        $nombre = $validated['nombre'];
        $fecha = $validated['fechaNacimiento'];
        $usuario->setNombre($nombre);
        $usuario->setFechaNacimiento($fecha);
        $request->session()->put('nuevoUsuario',$usuario);
        return redirect('/pene');
        

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
