<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ClienteController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-cliente|crear-cliente|editar-cliente|borrar-cliente')->only('index');
         $this->middleware('permission:crear-cliente', ['only' => ['create','store']]);
         $this->middleware('permission:editar-cliente', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-cliente', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cliente::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
        ]);

        $cliente->nombre = $request-> nombre;
        $cliente->apellidoPaterno = $request-> apellidoPaterno;
        $cliente->apellidoMaterno = $request-> apellidoMaterno;
        $cliente->correo = $request-> correo;
        $cliente->telefono = $request-> telefono;

        $cliente->save();

        return $cliente;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente )
    {
        return $cliente;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
         request()->validate([
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
        ]);
        $cliente->nombre = $request-> nombre;
        $cliente->apellidoPaterno = $request-> apellidoPaterno;
        $cliente->apellidoMaterno = $request-> apellidoMaterno;
        $cliente->correo = $request-> correo;
        $cliente->telefono = $request-> telefono;

        $cliente->update($request->all());

        return $cliente;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return [];
    }
}
