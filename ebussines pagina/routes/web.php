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

Route::get('crud/pais',[PaisesController::class,'create'])->name('crudCrear_pais');
Route::post('pais',[PaisesController::class,'store'])->name('Crear.pais');
Route::post('departamento',[DepartamentoController::class,'store'])->name('Crear.departamento');
Route::post('municipio',[MunicipiosController::class,'store'])->name('Crear.municipio');
Route::get('deleteP',[PaisesController::class,'irDelete'])->name('deleter.pais');
Route::get('deleteD',[DepartamentoController::class,'irDelete'])->name('deleter.departamento');
Route::get('deleteM',[MunicipiosController::class,'irDelete'])->name('deleter.municipio');
Route::delete('pais/{id}',[PaisesController::class,'destroy'])->name('delete.pais');
Route::delete('departamento/{id}',[DepartamentoController::class,'destroy'])->name('delete.departamento');
Route::delete('municipio/{idP}',[MunicipiosController::class,'destroy'])->name('delete.municipio');


Route::get('/producto',[ProductoController::class,'index'])->name('productos');
Route::get('/producto/crear',[ProductoController::class,'index']);
Route::post('producto',[ProductoController::class,'crearCarrito'])->name('guardar.carrito');