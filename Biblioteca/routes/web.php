<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('inicio');}) ->name('rutainicio');

Route::get('/registrolibro', function () { return view('registrolibro');}) ->name('rutaregistrolibro');
