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
        $carrito = Carrito::select('nombre_poducto', 'precio_producto', 'usuario', Carrito::raw('COUNT(*) AS cantidad_productos'))
            ->groupBy('nombre_poducto', 'precio_producto', 'usuario')
            ->get();
        return view('dashboard',compact('producto','imagen','carrito'));
    }

    public function create(){
        return view('producto.create');
    }
    public function crearCarrito(Request $request){
        Carrito::create($request->all());
        $producto = Producto::all();
        $imagen = Imagen::all();
        $carrito = Carrito::select('nombre_poducto', 'precio_producto', 'usuario', Carrito::raw('COUNT(*) AS cantidad_productos'))
            ->groupBy('nombre_poducto', 'precio_producto', 'usuario')
            ->get();
        return view('dashboard',compact('producto','imagen','carrito'));
        indexHome();
    }
    public function vaciarCarrito($usuario){
        Carrito::where('usuario', $usuario)->delete();
        $producto = Producto::all();
        $imagen = Imagen::all();
        $carrito = Carrito::select('nombre_poducto', 'precio_producto', 'usuario', Carrito::raw('COUNT(*) AS cantidad_productos'))
            ->groupBy('nombre_poducto', 'precio_producto', 'usuario')
            ->get();
        return view('dashboard',compact('producto','imagen','carrito'));
        indexHome();
    }
}
