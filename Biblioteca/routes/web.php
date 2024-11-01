<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;


Route::get('/', [ControladorVista::class, 'home'])->name('rutainicio');
Route::get('/registrolibro', [ControladorVista::class, 'formulario'])->name('rutaregistrolibro');

