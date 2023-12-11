<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DireccionCliente;
use App\Models\Direccion;
use App\Models\Cliente;

class DireccionClienteController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-direccionCliente|crear-direccionCliente|editar-direccionCliente|borrar-direccionCliente')->only('index');
         $this->middleware('permission:crear-direccionCliente', ['only' => ['create','store']]);
         $this->middleware('permission:editar-direccionCliente', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-direccionCliente', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DireccionCliente::all();
    }

    /**
     * Store a newly created resource in storage.
     *  'direccionId',
     *   'clienteId',
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'direccionId' => 'required',
            'clienteId' => 'required',
        ]);

        $direccionCliente->direccionId = $request-> direccionId;
        $direccionCliente->clienteId = $request-> clienteId;

        $direccionCliente->save();

        return $direccionCliente;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DireccionCliente $direccionCliente )
    {
        return $direccionCliente;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DireccionCliente $direccionCliente)
    {
         request()->validate([
            'direccionId' => 'required',
            'clienteId' => 'required',
        ]);

        $direccionCliente->direccionId = $request-> direccionId;
        $direccionCliente->clienteId = $request-> clienteId;
        $direccionCliente->update($request->all());

        return $direccionCliente;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DireccionCliente $direccionCliente)
    {
        $direccionCliente->delete();

        return [];
    }
}
