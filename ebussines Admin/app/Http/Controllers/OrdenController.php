<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden;
use App\Models\User;

class OrdenController extends Controller
{
    public function index(){
        $orden = Orden::all();
        $user = User::all();
        return view('orden.index',compact('orden','user'));
    }

    public function store(Request $request){
        Orden::create($request->all());
        $orden = Orden::all();
        $user = User::all();
        return view('orden.index',compact('orden','user'));
    }
    public function delete($id)
    {
        $orden = Orden::find($id);
        
        if (!$orden) {
            return redirect()->back()->withErrors('La orden no existe');
        }
        
        $orden->delete();
        
        $orden = Orden::all();
        $user = User::all();
        
        return view('orden.index', compact('orden', 'user'))->with('success', 'La orden ha sido eliminada correctamente');
    }
    public function showEdit($id){
        $orden = Orden::find($id);
        $user = User::all();
        return view('orden.editar',compact('orden','user'));
    }
    public function update(Request $request, $id){
        $orden = Orden::find($id);
        $orden->referencia_orden = $request->input('referencia_orden');
        $orden->direccion = $request->input('direccion');
        $orden->cantidad = $request->input('cantidad');
        $orden->precio = $request->input('precio');
        $orden->cliente_id = $request->input('cliente_id');
        $orden->producto = $request->input('producto');
        $orden->save();

        $orden = Orden::all();
        $user = User::all();
        
        return view('orden.index', compact('orden', 'user'))->with('success', 'La orden ha sido Actualizada correctamente');
    }

}
