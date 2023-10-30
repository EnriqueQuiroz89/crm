<?php

namespace App\Http\Controllers;

use App\Models\Calendario;
use App\Models\Actividad;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        // $datos = TuModelo::all();

        //
        $listadoDeActividades = Actividad::all();
        $eventos = [];

        foreach ($listadoDeActividades as $actividad) {
            $evento = [
                'title' => $actividad->id_actividad, // Reemplaza con el nombre del campo de título en tu tabla
                'start' => $actividad->fecha_limite, // Reemplaza con el nombre del campo de fecha de inicio en tu tabla
                'end' => $actividad->fecha_limite, // Reemplaza con el nombre del campo de fecha de fin en tu tabla
                // Agrega más actividads si es necesario para personalizar el evento
            ];

            $eventos[] = $evento;
        }
        // return view('tu-vista', compact('eventos'));
        // Procesamiento 
        return view('calendar.index', compact('eventos'));
        // echo "<pre>";
        // print_r($listadoDeActividades);
        // echo "</pre>";
        // return view('calendar.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Calendario $calendario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calendario $calendario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calendario $calendario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calendario $calendario)
    {
        //
    }
}
