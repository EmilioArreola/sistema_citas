<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HistorialClinico;
use App\Models\Mascota;


class HistorialClinicoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-historialClinico|crear-historialClinico|editar-historialClinico|borrar-historialClinico')->only('index');
         $this->middleware('permission:crear-historialClinico', ['only' => ['create','store']]);
         $this->middleware('permission:editar-historialClinico', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-historialClinico', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return HistorialClinico::all();
    }

    /**
     * Store a newly created resource in storage.
     * 'fechaUltimaVisita',
      *  'diagnosticoAnterior',
      *  'cirujiaPrevia',
      *  'condicionCronica',
      *  'alergia',
      *  'tratamiento',
      *  'vacuna',
       * 'fechaDesparatizacion',
       * 'mascotaId',
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'fechaUltimaVisita' => 'required',
            'diagnosticoAnterior' => 'required',
            'cirujiaPrevia' => 'required',
            'condicionCronica' => 'required',
            'alergia' => 'required',
            'tratamiento' => 'required',
            'vacuna' => 'required',
            'fechaDesparatizacion' => 'required',
            'mascotaId' => 'required',
        ]);

        $historial->fechaUltimaVisita = $request-> fechaUltimaVisita;
        $historial->diagnosticoAnterior = $request-> diagnosticoAnterior;
        $historial->cirujiaPrevia = $request-> cirujiaPrevia;
        $historial->condicionCronica = $request-> condicionCronica;
        $historial->alergia = $request-> alergia;
        $historial->tratamiento = $request-> tratamiento;
        $historial->vacuna = $request-> vacuna;
        $historial->fechaDesparatizacion = $request-> fechaDesparatizacion;
        $historial->mascotaId = $request-> mascotaId;

        $historial->save();

        return $historial;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(HistorialClinico $historial )
    {
        return $historial;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistorialClinico $historial)
    {
         request()->validate([
            'fechaUltimaVisita' => 'required',
            'diagnosticoAnterior' => 'required',
            'cirujiaPrevia' => 'required',
            'condicionCronica' => 'required',
            'alergia' => 'required',
            'tratamiento' => 'required',
            'vacuna' => 'required',
            'fechaDesparatizacion' => 'required',
            'mascotaId' => 'required',
        ]);

        $historial->fechaUltimaVisita = $request-> fechaUltimaVisita;
        $historial->diagnosticoAnterior = $request-> diagnosticoAnterior;
        $historial->cirujiaPrevia = $request-> cirujiaPrevia;
        $historial->condicionCronica = $request-> condicionCronica;
        $historial->alergia = $request-> alergia;
        $historial->tratamiento = $request-> tratamiento;
        $historial->vacuna = $request-> vacuna;
        $historial->fechaDesparatizacion = $request-> fechaDesparatizacion;
        $historial->mascotaId = $request-> mascotaId;
        $historial->update($request->all());

        return $historial;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistorialClinico $historial)
    {
        $historial->delete();

        return [];
    }
}
