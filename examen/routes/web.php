<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;


Route::view('/component','componentes')->name('rutacomponent');
//Route::get('/', function () { return view('inicio');});

//Route::get('/inicio', [ControladorVista::class, inicio])->name('rutainicio');
Route::get('/inicio', [ControladorVista::class, 'inicio'])->name('rutainicio');


//post
Route::post('/enviar', [ControladorVista::class, 'procesardatos'])->name('rutaenviar');