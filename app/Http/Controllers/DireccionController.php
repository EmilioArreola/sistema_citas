<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Direccion;

class DireccionController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-direccion|crear-direccion|editar-direccion|borrar-direccion')->only('index');
         $this->middleware('permission:crear-direccion', ['only' => ['create','store']]);
         $this->middleware('permission:editar-direccion', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-direccion', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Direccion::all();
    }

    /**
     * Store a newly created resource in storage.
     * 'colonia',
        *'calle',
        *'ciudad',
       * 'numeroCasa',
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'colonia' => 'required',
            'calle' => 'required',
            'ciudad' => 'required',
            'numeroCasa' => 'required',

        ]);

        $direccion->colonia = $request-> colonia;
        $direccion->calle = $request-> calle;
        $direccion->ciudad = $request-> ciudad;
        $direccion->numeroCasa = $request-> numeroCasa;


        $direccion->save();

        return $direccion;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Direccion $direccion )
    {
        return $direccion;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Direccion $direccion)
    {
         request()->validate([
            'colonia' => 'required',
            'calle' => 'required',
            'ciudad' => 'required',
            'numeroCasa' => 'required',

        ]);

        $direccion->colonia = $request-> colonia;
        $direccion->calle = $request-> calle;
        $direccion->ciudad = $request-> ciudad;
        $direccion->numeroCasa = $request-> numeroCasa;

        $direccion->update($request->all());

        return $direccion;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Direccion $direccion)
    {
        $direccion->delete();

        return [];
    }
}
