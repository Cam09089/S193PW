<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorPrenda;

class ControladorVista extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function inicio()
    {
        return view ('inicio');
    }

    public function procesardatos(validadorPrenda $peticion){
        //return $peticion->all();

        $prenda =$peticion->input(txtprenda);
        session()->flash('exito', 'Se guardo:',$prenda);
        return to_route('rutaenviar');
    }

   
}
