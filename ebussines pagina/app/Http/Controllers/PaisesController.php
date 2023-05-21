<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Municipios;
use App\Models\Departamento;

class PaisesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamento = Departamento::all();
        $municipio = Municipios::all();
        $pais = Pais::all();
        return view('dashboard',compact('pais','municipio','departamento'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamento = Departamento::all();
        $municipio = Municipios::all();
        $pais = Pais::all();
        return view('crud',compact('pais','municipio','departamento'));
    }
    public function irDelete()
    {
        $municipio = Municipios::all();
        $departamento = Departamento::all();
        $pais = Pais::all();
        return view('deleteP',compact('pais','departamento','municipio'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pais::create($request->all());
        return redirect()-> route('crudCrear_pais');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $idP)
    {
        Pais::find($idP)->delete();
        return redirect()-> route('crudCrear_pais');
        
    }
    
}
