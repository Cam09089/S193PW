<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portada');
});

route::view('/repaso', 'repaso')->name('repaso');
// Route::get('/repaso', function () {
//     return view('repaso');
// });