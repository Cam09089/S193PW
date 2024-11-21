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


/*Metodo post*/
Route::get('/enviarCliente', [ControladorVista::class, 'procesarCliente'])->name('rutaEnviar');

// rutas para clientes
Route::get('/cliente', [clienteController::class, 'index'])->name('rutaclientes');
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutacrear');
Route::get('/cliente/{$id}/edit', [clienteController::class, 'edit'])->name('rutaeditar');
Route::put('cliente/{id}', [clienteController::class, 'update'])->name('rutaactualizarcliente');
Route::post('/procesarCliente', [clienteController::class, 'store']);
Route::delete('/cliente/{id}',[clienteController::class, 'destroy'])->name('rutaeliminar');
