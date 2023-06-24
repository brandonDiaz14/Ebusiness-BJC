<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\OrdenController;

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
Route::post('dashboard',[ProductoController::class,'crearCarrito'])->name('guardar.carrito');
Route::post('producto/{usuario}', [ProductoController::class, 'vaciarCarrito'])->name('vaciar.carrito');

Route::delete('/producto/{id}', [ProductoController::class, 'delete'])->name('producto.delete');
Route::get('producto/{id}/editar', [ProductoController::class,'showEdit'])->name('producto.editar');
Route::put('producto/{id}', [ProductoController::class, 'update'])->name('producto.update');

Route::get('/producto/create', [ProductoController::class,'crear'])->name('producto.create');
Route::post('/productoG',[ProductoController::class,'store'])->name('producto.guardar');

Route::post('producto',[ProductoController::class,'crearImagen'])->name('guardar.imagen');


Route::get('/orden',[OrdenController::class,'index'])->name('orden.index');
Route::post('orden',[OrdenController::class,'store'])->name('orden.guardar');
Route::delete('/orden/{id}', [OrdenController::class, 'delete'])->name('orden.delete');
Route::get('orden/{id}/editar', [OrdenController::class,'showEdit'])->name('orden.editar');
Route::put('orden/{id}', [OrdenController::class, 'update'])->name('orden.update');