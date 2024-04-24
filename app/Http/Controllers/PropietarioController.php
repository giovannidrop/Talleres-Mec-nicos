<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propietarios = Propietario::find($id);
        
        return view('propietarios.edit', ['propietarios' => $propietarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $propietarios = Propietario::find($id);
        $propietarios->update($request->all());
    
        return redirect()->route('propietarios.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $propietarios = DB::table('propietarios')
         ->orderBy('nombre')
         ->get();
    
        return view('propietarios.index', ['propietarios' => $propietarios]);
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
        $propietarios = Propietario::find($id);
        
        return view('propietarios.edit', ['propietarios' => $propietarios]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $propietarios = Propietario::find($id);
        $propietarios->update($request->all());
    
        return redirect()->route('propietarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $propietario = Propietario::find($id);
        $propietario->delete();
    
        $propietarios = DB::table('propietarios')->get();
    
        return view('propietario.index', ['propietarios' => $propietarios]);
    }
}
