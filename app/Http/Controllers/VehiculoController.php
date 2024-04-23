<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = DB::table('vehiculos')
           ->join('propietarios' , 'vehiculos.id', '=' , 'propietarios.id')
           ->select('vehiculos.*' , 'propietarios.id')
           ->get();
        return view('vehiculo.index' , ['vehiculos' => $vehiculos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $propietarios = DB::table('propietarios')
            ->orderBy('id')
            ->get();
        return view('vehiculo.new', ['propietarios' => $propietarios]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehiculo = new Vehiculo();

        $vehiculo->propietario_id = $request->name;
        $vehiculo->id = $request->code;
        $vehiculo->save();

        $vehiculos = DB::table('vehiculos')
           ->join('propietarios' , 'vehiculos.id', '=' , 'propietarios.id')
           ->select('vehiculos.*' , 'propietarios.nombre')
           ->get();
        return view('vehiculo.index' , ['vehiculos' => $vehiculos]);
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
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();

        $vehiculos = DB::table('vehiculos')
           ->join('propietarios' , 'vehiculos.id', '=' , 'propietarios.id')
           ->select('vehiculos.*' , "propietarios.nombre")
           ->get();
        return view('vehiculo.index' , ['vehiculos' => $vehiculos]);
    }
}
