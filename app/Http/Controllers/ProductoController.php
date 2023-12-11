<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

class ProductoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-producto|crear-producto|editar-producto|borrar-producto')->only('index');
         $this->middleware('permission:crear-producto', ['only' => ['create','store']]);
         $this->middleware('permission:editar-producto', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-producto', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Producto::all();
    }

    /**
     * Store a newly created resource in storage.
     *  'nombre',
        *'descripcion',
        *'fechaCaducidad',
        *'precio',
        *'stock',
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'fechaCaducidad' => 'required',
            'precio' => 'required',
            'stock' => 'required',
        ]);

        $producto->nombre = $request-> nombre;
        $producto->descripcion = $request-> descripcion;
        $producto->fechaCaducidad = $request-> fechaCaducidad;
        $producto->precio = $request-> precio;
        $producto->stock = $request-> stock;

        $producto->save();

        return $producto;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto )
    {
        return $producto;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
         request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'fechaCaducidad' => 'required',
            'precio' => 'required',
            'stock' => 'required',
        ]);

        $producto->nombre = $request-> nombre;
        $producto->descripcion = $request-> descripcion;
        $producto->fechaCaducidad = $request-> fechaCaducidad;
        $producto->precio = $request-> precio;
        $producto->stock = $request-> stock;
        $producto->update($request->all());

        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return [];
    }
}
