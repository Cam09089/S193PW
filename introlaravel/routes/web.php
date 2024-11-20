<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;
use App\Http\Controllers\clienteController;

/* Route::get('/', function () {
    return view('inicio');
}) ->name('rutainicio'); */

/* Route::get('/form', function (){
    return view('formulario');
}) ->name('rutaform'); */

/* Route::get('/consultar', function (){
    return view('clientes');
}) ->name('rutaclientes'); */

/*Route::view('/','inicio')->name('rutainicio');
Route::view('/form','formulario')->name('rutaform');
Route::view('/consultar','clientes')->name('rutaclientes');
*/
Route::view('/component','componentes')->name('rutacomponent');

/*rutas para controlador*/ 
Route::get('/', [ControladorVista::class, 'home'])->name('rutainicio');
// Route::get('/form', [ControladorVista::class, 'formulario'])->name('rutaform');
Route::get('/consultar', [ControladorVista::class, 'consulta'])->name('rutaclientes');

Route::get('/actualizar', [ControladorVista::class, 'actualizar'])->name('rutaactualizar');

/*Metodo post*/
Route::post('/enviarCliente', [ControladorVista::class, 'procesarCliente'])->name('rutaEnviar');

// rutas
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaform');
/* metodo post */
Route::post('/cliente', [clienteController::class, 'store'])->name('rutaEnviar');

Route::get('/cliente', [clienteController::class, 'index'])->name('rutaclientes');