<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisesController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\DepartamentoController;
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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', [PaisesController::class,'index'])->name('dashboard');
// });
Route::get('/dashboard',[ProductoController::class,'indexHome'])->name('dashboard');



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function(){
    Route::get('test-auth',function(){
        return "Hola mundo con usuario login";
   });
});

Route::get('sin-sesion',function(){
    return "esta vista es publica";
});




Route::get('/producto',[ProductoController::class,'index'])->name('productos');
Route::get('/producto/crear',[ProductoController::class,'index']);
Route::post('producto',[ProductoController::class,'crearCarrito'])->name('guardar.carrito');
Route::post('producto/{usuario}', [ProductoController::class, 'vaciarCarrito'])->name('vaciar.carrito');

Route::post('dashboard',[ProductoController::class,'storeOrden'])->name('guardar.orden');