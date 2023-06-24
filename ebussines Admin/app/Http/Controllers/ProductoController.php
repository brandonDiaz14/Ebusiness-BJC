<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Imagen;
use App\Models\Carrito;
use App\Models\User;

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
        $user = User::select('users.id', 'users.name', 'carrito.nombre_poducto',User::raw('COUNT(*) AS cantidad_productos'))
        ->join('carrito', 'users.id', '=', 'carrito.usuario')
        ->groupBy('users.id', 'users.name', 'carrito.nombre_poducto')
        ->get();
        $carrito = Carrito::select('nombre_poducto', 'precio_producto', 'usuario', Carrito::raw('COUNT(*) AS cantidad_productos'))
            ->join('users', 'users.id', '=', 'carrito.usuario')
            ->groupBy('nombre_poducto', 'precio_producto', 'usuario')
            ->get();
        return view('dashboard',compact('producto','imagen','carrito','user'));
    }

    public function create(){
        return view('producto.create');
    }
    public function crearCarrito(Request $request){
        Carrito::create($request->all());
        $producto = Producto::all();
        $imagen = Imagen::all();
        $user = User::select('users.id', 'users.name', 'carrito.nombre_poducto',User::raw('COUNT(*) AS cantidad_productos'))
            ->join('carrito', 'users.id', '=', 'carrito.usuario')
            ->groupBy('users.id', 'users.name', 'carrito.nombre_poducto')
            ->get();
        $carrito = Carrito::select('nombre_poducto', 'precio_producto', 'usuario', Carrito::raw('COUNT(*) AS cantidad_productos'))
            ->groupBy('nombre_poducto', 'precio_producto', 'usuario')
            ->get();
        return view('dashboard',compact('producto','imagen','carrito','user'));
        indexHome();
    }
    public function vaciarCarrito($usuario){
        Carrito::where('usuario', $usuario)->delete();
        $producto = Producto::all();
        $imagen = Imagen::all();
        $user = User::select('users.id', 'users.name', 'carrito.nombre_poducto',User::raw('COUNT(*) AS cantidad_productos'))
            ->join('carrito', 'users.id', '=', 'carrito.usuario')
            ->groupBy('users.id', 'users.name', 'carrito.nombre_poducto')
            ->get();
        $carrito = Carrito::select('nombre_poducto', 'precio_producto', 'usuario', Carrito::raw('COUNT(*) AS cantidad_productos'))
            ->groupBy('nombre_poducto', 'precio_producto', 'usuario')
            ->get();
        return view('dashboard',compact('producto','imagen','carrito','user'));
        indexHome();
    }
    public function delete($id)
    {
        $producto = Producto::find($id);

        if (!$producto) {
            return redirect()->back()->withErrors('El producto no existe');
        }

        $imagen = Imagen::find($id);

        if ($imagen) {
            $imagen->delete();
        }

        $producto->delete();

        return redirect()->back()->with('success', 'El producto ha sido eliminado correctamente');
    }
    
    public function showEdit($id){
        $productos = Producto::find($id);
        return view('producto.editar',compact('productos'));
    }
    public function update(Request $request, $id){
        $producto = Producto::find($id);
        $producto->Nom_produ = $request->input('Nom_produ');
        $producto->Tipo_produ = $request->input('Tipo_produ');
        $producto->cant_produ = $request->input('cant_produ');
        $producto->precio = $request->input('precio');
        $producto->categoria_id_categoria = $request->input('categoria_id_categoria');
        $producto->save();

        return redirect()->route('producto.editar', $id)->with('success', 'Producto actualizado exitosamente');
    }
    public function crear(){
        return view('producto.create');
    }
    public function store(Request $request){
        Producto::create($request->all());
        return view('producto.create');
    }
    public function crearImagen(Request $request){
        
        $imagen = Imagen::where('producto_id_produ', '=', $request->input('producto_id_produ'))->first();

        if ($imagen) {
            $imagen->nombre_imagen = $request->input('nombre_imagen');
            $imagen->producto_id_produ = $request->input('producto_id_produ');
            $imagen->save();
            $producto = Producto::all();
            $imagen = Imagen::all();
            $user = User::select('users.id', 'users.name', 'carrito.nombre_poducto',User::raw('COUNT(*) AS cantidad_productos'))
            ->join('carrito', 'users.id', '=', 'carrito.usuario')
            ->groupBy('users.id', 'users.name', 'carrito.nombre_poducto')
            ->get();
            $carrito = Carrito::select('nombre_poducto', 'precio_producto', 'usuario', Carrito::raw('COUNT(*) AS cantidad_productos'))
                ->groupBy('nombre_poducto', 'precio_producto', 'usuario')
                ->get();
            return view('dashboard',compact('producto','imagen','carrito','user'));
            indexHome();
        }else{
            Imagen::create($request->all());
            $producto = Producto::all();
            $imagen = Imagen::all();
            $user = User::select('users.id', 'users.name', 'carrito.nombre_poducto',User::raw('COUNT(*) AS cantidad_productos'))
            ->join('carrito', 'users.id', '=', 'carrito.usuario')
            ->groupBy('users.id', 'users.name', 'carrito.nombre_poducto')
            ->get();
            $carrito = Carrito::select('nombre_poducto', 'precio_producto', 'usuario', Carrito::raw('COUNT(*) AS cantidad_productos'))
                ->groupBy('nombre_poducto', 'precio_producto', 'usuario')
                ->get();
            return view('dashboard',compact('producto','imagen','carrito','user'));
            indexHome();
        }
        
    }
}   
