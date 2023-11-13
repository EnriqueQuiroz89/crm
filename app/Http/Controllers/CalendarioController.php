<?php

namespace App\Http\Controllers;

use App\Models\Calendario;
use App\Models\Actividad;
use App\Models\Cliente;
use App\Models\CatalogoActividad;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{


    public function obtenerClientePorId($id)
    {
        $cliente = Cliente::find($id);

        return $cliente;
        // if ($cliente) {
        //     // Aquí puedes hacer lo que quieras con los datos del cliente
        //     return response()->json($cliente, 200);
        // } else {
        //     return response()->json(['message' => 'Cliente no encontrado'], 404);
        // }
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogoDeActividades = CatalogoActividad::all();
        $arregloClaveValorActividades = [];

        foreach ($catalogoDeActividades as $key => $objetoTipoActividad) {
            $id = $objetoTipoActividad->id;
            // $arregloClaveValorActividades[$id] = $objetoTipoActividad->attributes;
            $arregloClaveValorActividades[$id] = $objetoTipoActividad->toArray();
        }

        $listadoDeActividades = Actividad::all();
        $eventos = [];

        foreach ($listadoDeActividades as $actividad) {

            echo "<pre>";
            print_r($actividad->id);
            echo "</pre>";

            $idActividad = $actividad->id_actividad;
            // [1] => Array ( 
            //     [id] => 1 
            //     [nombre_actividad] => Llamada telefónica 
            //     [descripcion] => )i

            $idCliente =  $actividad->id_cliente;
            $cliente = $this->obtenerClientePorId($idCliente);
            $nombreCliente = $cliente['nombre'];

            $nombreActividad = $arregloClaveValorActividades[$idActividad]['nombre_actividad'];

            $titulo = $nombreCliente;
            $titulo .= " - ";
            $titulo .= $arregloClaveValorActividades[$idActividad]['nombre_actividad'];

            $html = "<b>$nombreCliente</b><br>$nombreActividad";

            $evento = [
                'id_actividad' => $idActividad,  // Incluye el identificador del evento
                'id_evento' => $actividad->id,  // Incluye el identificador del evento
                'title' => $titulo, // Reemplaza con el nombre del campo de título en tu tabla
                'start' => $actividad->fecha_limite, // Reemplaza con el nombre del campo de fecha de inicio en tu tabla
                'end' => $actividad->fecha_limite, // Reemplaza con el nombre del campo de fecha de fin en tu tabla
                // Agrega más actividads si es necesario para personalizar el evento
                // 'html' => '<b>HTML personalizado para el evento 2</b><br/>Otro contenido HTML si es necesario'
                'html' => $html

            ];

            $eventos[] = $evento;
        }
        // Procesamiento 
        return view('calendar.index', compact('eventos'));
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
