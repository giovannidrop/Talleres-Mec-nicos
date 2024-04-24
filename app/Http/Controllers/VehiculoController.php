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
           ->join('servicios' , 'vehiculos.id', '=' , 'servicios.id')
           ->select('vehiculos.*' , 'servicios.vehiculo_id')
           ->get();
        return view('vehiculo.index' , ['vehiculos' => $vehiculos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $servicios = DB::table('servicios')
            ->orderBy('vehiculo_id')
            ->get();
        return view('vehiculo.new', ['servicios' => $servicios]);
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
           ->join('servicios' , 'vehiculos.id', '=' , 'servicios.id')
           ->select('vehiculos.*' , 'servicios.vehiculo_id')
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
        $vehiculo = Vehiculo::find($id);
        $servicios = DB::table('servicios')
            ->orderBy('vehiculo_id')
            ->get();
        return view('vehiculo.edit', ['vehiculo' => $vehiculo, 'servicios' => $servicios]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vehiculo = vehiculo::find($id);

        $vehiculo->propietario_id = $request->name;
        $vehiculo->id = $request->code;
        $vehiculo->save();

        $vehiculos - DB::table('vehiculos')
           ->join('servicios' , 'vehiculos.id', '=' , 'servicios.id')
           ->select('vehiculos.*' , 'servicios.vehiculo_id')
           ->get();
        return view('vehiculo.index' , ['vehiculos' => $vehiculos]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();

        $vehiculos = DB::table('vehiculos')
           ->join('servicios' , 'vehiculos.id', '=' , 'servicios.id')
           ->select('vehiculos.*' , "servicios.vehiculo_id")
           ->get();
        return view('vehiculo.index' , ['vehiculos' => $vehiculos]);
    }
}
