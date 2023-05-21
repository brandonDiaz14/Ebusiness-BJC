<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Imagen;
use App\Models\Carrito;

class ProductoController extends Controller
{
    public function index(){
        $producto = Producto::all();
        $imagen = Imagen::all();
        return view('producto.index',compact('producto','imagen'));
    }
    public function indexHome(){
        $producto = Producto::all();
        $imagen = Imagen::all();
        $carrito = Carrito::all();
        return view('dashboard',compact('producto','imagen','carrito'));
    }

    public function create(){
        return view('producto.create');
    }
    public function crearCarrito(Request $request){
        Carrito::create($request->all());
        $producto = Producto::all();
        $imagen = Imagen::all();
        $carrito = Carrito::all();
        return view('dashboard',compact('producto','imagen','carrito'));
    }
}
