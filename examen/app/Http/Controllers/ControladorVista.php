<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVista extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view ('inicio');
    }

   
}
