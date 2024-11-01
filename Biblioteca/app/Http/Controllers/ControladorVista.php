<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVista extends Controller
{
  
    public function home()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('registrolibro');
    }

   
}
