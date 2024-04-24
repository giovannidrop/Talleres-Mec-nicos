<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = DB::table('servicios')
        ->join('vehiculos', 'servicio.id', '=', 'vehiculos.id')
        ->select('servicio.*', 'vehiculos.propietario_id')
        ->orderBy('servicio.vehiculo_id')
        ->get();
    
    return view('servicio.index', ['servicios' => $servicios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehiculos = DB::table('vehiculos') 
          ->orderBy('propietario_id')
           ->get();

        return view('servicios.new', ['vehiculos' => $vehiculos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $servicios = DB::table('servicio')
            ->join('vehiculos', 'servicio.id', '=', 'vehiculos.id')
            ->select('servicio.*', 'vehiculos.propietario_id')
            ->orderBy('servicio.vehiculo_id')
            ->get();
        
        return view('servicio.index', ['servicios' => $servicios]);
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
        $servicio = Servicio::find($id);
        $vehiculos = DB::table('vehiculos')
            ->orderBy('propietario_id')
            ->get();
        
        return view('servicio.edit', ['servicio' => $servicio, 'vehiculos' => $vehiculos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $servicio = Servicio::find($id);
        $servicio->update($request->all());
    
        return redirect()->route('servicios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $servicio = Servicio::find($id);
        $servicio->delete();
    
        $servicios = DB::table('servicios')
            ->join('vehiculos', 'servicios.id', '=', 'vehiculos.id')
            ->select('servicios.*', 'vehiculos.propietario_id')
            ->get();
    
        return view('servicio.index', ['servicios' => $servicios]);
    }
}
