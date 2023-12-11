<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mascota;
use App\Models\Cliente;

class MascotaController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-mascota|crear-mascota|editar-mascota|borrar-mascota')->only('index');
         $this->middleware('permission:crear-mascota', ['only' => ['create','store']]);
         $this->middleware('permission:editar-mascota', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-mascota', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Mascota::all();
    }

    /**
     * Store a newly created resource in storage.
     * 'nombre',
      *  'especie',
       * 'raza',
       * 'edad',
        *'clienteId',
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
            'especie' => 'required',
            'raza' => 'required',
            'edad' => 'required',
            'clienteId' => 'required',
        ]);

        $mascota->nombre = $request-> nombre;
        $mascota->especie = $request-> especie;
        $mascota->raza = $request-> raza;
        $mascota->edad = $request-> edad;
        $mascota->clienteId = $request-> clienteId;

        $mascota->save();

        return $mascota;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota )
    {
        return $mascota;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota $mascota)
    {
         request()->validate([
            'nombre' => 'required',
            'especie' => 'required',
            'raza' => 'required',
            'edad' => 'required',
            'clienteId' => 'required',
        ]);

        $mascota->nombre = $request-> nombre;
        $mascota->especie = $request-> especie;
        $mascota->raza = $request-> raza;
        $mascota->edad = $request-> edad;
        $mascota->clienteId = $request-> clienteId;

        $mascota->update($request->all());

        return $mascota;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();

        return [];
    }
}
