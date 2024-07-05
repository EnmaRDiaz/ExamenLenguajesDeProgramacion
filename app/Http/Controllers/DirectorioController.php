<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\directorio;

class DirectorioController extends Controller
{
    //
    public function paginaInicial(){
        $directorioCargar = directorio::all();
        return view('directorio', compact('directorioCargar'));
    }

    public function viewAgregarDirectorio (){
        return view('crearEntrada');
    }

    public function viewBuscarDirectorio (){
        return view('buscar');
    }

    public function viewEliminarDirectorio (){
        return view('eliminar');
    }

    public function agregarResultadoDir (Request $request){
        $directorioAgregar = new directorio;
        $directorioAgregar->nombre = $request->nombre;
        $directorioAgregar->apellido = $request->apellido;
        $directorioAgregar->telefono = $request->telefono;
        $directorioAgregar->correo = $request->correo;
        $directorioAgregar->codigoEntrada = $request->codigo;
        //echo $directorioAgregar;
        $directorioAgregar->save();
        return redirect('/directorio');
    }
}
