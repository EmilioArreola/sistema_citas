<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cita;
use App\Models\Cliente;

class CitaController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-cita|crear-cita|editar-cita|borrar-cita')->only('index');
         $this->middleware('permission:crear-cita', ['only' => ['create','store']]);
         $this->middleware('permission:editar-cita', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-cita', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cita::all();
    }

    /**
     * Store a newly created resource in storage.
     * 'clienteId',
       * 'fechaCita',
       * 'horaCita',
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'clienteId' => 'required',
            'fechaCita' => 'required',
            'horaCita' => 'required',
        ]);

        $cita->clienteId = $request-> clienteId;
        $cita->fechaCita = $request-> fechaCita;
        $cita->horaCita = $request-> horaCita;
        $cita->save();

        return $cita;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita )
    {
        return $cita;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
         request()->validate([
            'clienteId' => 'required',
            'fechaCita' => 'required',
            'horaCita' => 'required',
        ]);

        $cita->clienteId = $request-> clienteId;
        $cita->fechaCita = $request-> fechaCita;
        $cita->horaCita = $request-> horaCita;

        $cita->update($request->all());

        return $cita;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();

        return [];
    }
}
