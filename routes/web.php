<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DirectorioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio',
[DirectorioController::class, 'paginaInicial'])->name('home');

Route::get('/directorio/agregar',
[DirectorioController::class, 'viewAgregarDirectorio'])->name('directorio.agregar');

Route::post('/directorio/agregarResultado',
[DirectorioController::class, 'agregarResultadoDir'])->name('directorio.agregar.resultado');

Route::get('/directorio/buscar',
[DirectorioController::class, 'viewBuscarDirectorio'])->name('directorio.buscar');

Route::get('/directorio/verContactos',
[ContactoController::class, 'viewVerContactos'])->name('contactos.ver');

Route::get('/directorio/eliminarDirectorio',
[DirectorioController::class, 'viewEliminarDirectorio'])->name('directorio.eliminar');

Route::post('/directorio/buscar/resultado',
[DirectorioController::class, 'buscar'])->name('buscar');
