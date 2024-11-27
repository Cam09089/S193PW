<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;

class clienteController extends Controller
{
    /**
     * AQUI VA LA CONSULTA DE TODO EL CRUD
     */
    public function index()
    {
        $consultaclientes= DB::table('clientes')->get();
        return view('clientes',compact('consultaclientes'));
    }

    /**
     * LO USAMOS PARA ABRIR EL FORMULARIO DEL CRUD
     */
    public function create()
    {
         return view('formulario');
    }

    /**
     * aqui va el insert
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
        ]);

        $usuario = $request->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaform');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = DB::table('clientes')->where('id',$id)->first();

        if(!$cliente){

            return redirect()->route('rutaclientes')->whith('error','cliente no encontrado.');
        }
        return view('actualizarcliente', compact('cliente'));
    }

    public function update(validadorCliente $request, $id)
    {

        $updated = DB::table('clientes')->where('id',$id)->update([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "updated_at"=> Carbon::now(),
        ]);
        if($updated){
            session()->flash('exito','Se actualizo correctamente el cliente:' . $id);
        }
        else{
            session()->flash('error','fallo la actualizacion del cliente');
        }
        return to_route('rutaclientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted=DB::table('clientes')->where('id', $id)->delete();

        if ($deleted){
            session()->flash('exito','Se elimino el cliente:' . $id);
        }
        else{
            session()->flash('errror','Fallo al eliminar el cliente');
        }
        return to_route('rutaclientes');
    }
}
