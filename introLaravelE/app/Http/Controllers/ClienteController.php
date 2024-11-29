<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class ClienteController extends Controller
{
    
    
    public function home()
    {
        return view('inicio');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consulta = cliente::all();
        return view('clientes',compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorCliente $request)
    {
        //INSTANCIAR = crear un objeto 
        $addCliente = new cliente();
        $addCliente->nombre= $request->input('txtnombre');
        $addCliente->apellido= $request->input('txtapellido');
        $addCliente->correo= $request->input('txtcorreo');
        $addCliente->telefono= $request->input('txttelefono');
        $addCliente->save();

        $msj = $request->input('txtnombre');
        session()->flash('exito','Se guardó el cliente de forma correcta:' .$msj);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($cliente)
    {
        $cliente = cliente::findOrFail($cliente); // Busca el cliente por ID
        return view('actualizarcliente', compact('cliente')); // Envía el cliente a la vista
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $cliente = cliente::findOrFail($id); // Busca el cliente por ID
        $cliente->nombre = $request->input('txtnombre');
        $cliente->apellido = $request->input('txtapellido');
        $cliente->correo = $request->input('txtcorreo');
        $cliente->telefono = $request->input('txttelefono');
        $cliente->save(); // Guarda los cambios

        session()->flash('exito', 'El cliente fue actualizado con éxito.');
        return redirect()->route('cliente.index'); // Redirige a la lista de clientes
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = cliente::findOrFail($id); // Busca el cliente por ID
        $cliente->delete(); // Elimina el cliente

        session()->flash('exito', 'El cliente fue eliminado con éxito.');
        return redirect()->route('cliente.index'); // Redirige a la lista de clientes
    }
}
