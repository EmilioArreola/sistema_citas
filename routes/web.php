<?php
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
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('citas', CitaController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('direccionClientes', DireccionClienteController::class);
    Route::resource('direcciones', DireccionController::class);
    Route::resource('direccionUsuarios', DireccionUsuarioController::class);
    Route::resource('grupos', HistorialClinicoController::class);
    Route::resource('mascotas', MascotaController::class);
    Route::resource('productos', ProductoController::class);
});
