<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DireccionClienteController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\DireccionUsuarioController;
use App\Http\Controllers\HistorialClinicoController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\ProductoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/citas', 'App\Http\Controllers\CitaController@index');
//Route::post('/citas', 'App\Http\Controllers\CitaController@store');
//Route::put('/citas/{id}', 'App\Http\Controllers\CitaController@update');
//Route::get('/citas/{id}', 'App\Http\Controllers\CitaController@destroy');

//App\Http\Controllers\ClienteController;
//Route::get('/clientes', 'App\Http\Controllers\ClienteController@index');
//Route::post('/clientes', 'App\Http\Controllers\ClienteController@store');
//Route::put('/clientes/{id}', 'App\Http\Controllers\ClienteController@index');

    Route::apiResource('roles', RolController::class);
    Route::apiResource('usuarios', UsuarioController::class);
    Route::apiResource('citas', CitaController::class);
    Route::apiResource('clientes', ClienteController::class);
    Route::apiResource('direccion_clientes', DireccionClienteController::class);
    Route::apiResource('direcciones', DireccionController::class);
    Route::apiResource('direccion_usuarios', DireccionUsuarioController::class);
    Route::apiResource('historial_clinicos', HistorialClinicoController::class);
    Route::apiResource('mascotas', MascotaController::class);
    Route::apiResource('productos', ProductoController::class);
