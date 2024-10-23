<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVista extends Controller
{
    //usamos este controlador para dministrar la logica de las vistas
    public function home()
    {
        return view('inicio');
    }
    public function formulario()
    {
        return view('formulario');
    }
    public function consulta()
    {
        return view('clientes');
    }

    public function procesarCliente(Request $peticion)
    {
        //return 'si llego la info del cliente :(';
        //mostramos todo lo que trae la ppeticion
       // return $peticion->ip();

        //respuestas de redireccion
       // return redirect('/');

       //redireccion usando el nombre de la ruta
      // return redirect()->route('rutaclientes');

       //redireccion al origen de la peticion
      // return back();

     // $id= [['usuario'=>1],['usuario'=>2]];

      //return view('formulario',compact('id'));

      $usuario = $peticion->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);

        return to_route('rutaform');
    }
}
