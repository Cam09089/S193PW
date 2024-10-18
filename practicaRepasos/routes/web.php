<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

//Route::get('/', function () {
  //  return view('portada');
 //});

//route::view('/repaso', 'repaso')->name('repaso');
// Route::get('/repaso', function () {
//     return view('repaso');
// });

Route::get ('/', [ControladorVistas::class, 'portada'])->name('portada');
Route::get ('/repaso', [ControladorVistas::class, 'repaso'])->name('repaso');
Route::post('/convertir',[ControladorVistas::class, 'convertir'])->name('convertir');