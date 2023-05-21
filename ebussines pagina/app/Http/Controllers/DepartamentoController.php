<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;


class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamento = Departamento::all();
        return view('dashboard',compact('departamento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Departamento::create($request->all());
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
    public function destroy(string $id)
    {
        Departamento::find($id)->delete();
        return redirect()-> route('crudCrear_pais');
    }
    public function irDelete()
    {
        $departamento = Departamento::all();
        return view('deleteD',compact('departamento'));
    }
}
