<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DireccionCliente;
use App\Models\Direccion;
use App\Models\User;

class DireccionUsuarioController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-direccionUsuario|crear-direccionUsuario|editar-direccionUsuario|borrar-direccionUsuario')->only('index');
         $this->middleware('permission:crear-direccionUsuario', ['only' => ['create','store']]);
         $this->middleware('permission:editar-direccionUsuario', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-direccionUsuario', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DireccionUsuario::all();
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
            'usuarioId' => 'required',
        ]);

        $direccionUsuario->direccionId = $request-> direccionId;
        $direccionUsuario->usuarioId = $request-> usuarioId;

        $direccionUsuario->save();

        return $direccionUsuario;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DireccionUsuario $direccionUsuario )
    {
        return $direccionUsuario;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DireccionUsuario $direccionUsuario)
    {
         request()->validate([
            'direccionId' => 'required',
            'usuarioId' => 'required',
        ]);

        $direccionUsuario->direccionId = $request-> direccionId;
        $direccionUsuario->usuarioId = $request-> usuarioId;
        $direccionUsuario->update($request->all());

        return $direccionUsuario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DireccionUsuario $direccionUsuario)
    {
        $direccionUsuario->delete();

        return [];
    }
}
