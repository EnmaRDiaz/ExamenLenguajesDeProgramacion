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

    public function viewEliminarDirectorio ($id){
        $registro = directorio::find($id);
        return view('eliminar', compact('registro'));
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
    public function buscar (Request $request){
        $directorio = directorio::all();
        $correo = $request->correo;
        $contacto = $directorio->where('correo', $correo);
        echo $contacto;
        //return view('vercontactos', compact('contacto'));
    }

    public function borrar ($id){
        $directorio = directorio::find($id);
        $directorio->delete();
        return redirect('/directorio');
    }
}
