<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests\validadorLibro;

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
    
    public function procesardatos(validadorLibro $peticion){
        //return 'Si se guardaro los datos';
       // return $peticion->all();
       //return redirect()->route('rutaregistrolibro');

       //return back();

       //arreglos
       //$id= [['libro'=>1], ['libro'=>2]];

       //ruta
      // return view('formulario',compact('id'));

      $libro = $peticion->input('txtisbn');
      session()->flash('exito','Se guardo el libro correctamente:'.$libro);
      return to_route('rutaregistrolibro');

    }

   
}
