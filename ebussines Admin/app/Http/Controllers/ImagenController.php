<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;

class ImagenController extends Controller
{
    public function index(){
        $imagen = Imagen::all();
        return view('Imagen.index',compact('imagen'));
    }
    public function indexHome(){
        $imagen = Imagen::all();
        return view('dashboard',compact('imagen'));
    }

    public function create(){
        return view('producto.create');
    }
}
