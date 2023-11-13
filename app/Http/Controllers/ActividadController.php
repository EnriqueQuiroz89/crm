<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Cliente;
use App\Models\NotaActividad;
use App\Models\Cata;
use App\Models\CatalogoActividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $listadoDeActividades = Actividad::all();
        return view('actividad.index', compact('listadoDeActividades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($clienteSeleccionado = 0)
    {
        $listadoDeClientes = Cliente::all();
        $catalogoActividades = CatalogoActividad::all();

        return view('actividad.create_form', compact('listadoDeClientes', 'catalogoActividades', 'clienteSeleccionado'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_cliente' => 'required',
            'id_actividad' => 'required',
            'fecha_limite' => 'required',
            'resumen' => 'required',
            'descripcion' => 'required',
            'prioridad' => 'required',
        ], [
            'id_cliente.required' => 'El campo Id Cliente es obligatorio.',
            'id_actividad.required' => 'El campo Id Actividad es obligatorio.',
            'fecha_limite.required' => 'El campo Fecha Límite es obligatorio.',
            'resumen.required' => 'El campo Resumen es obligatorio.',
            'descripcion.required' => 'El campo Descripción es obligatorio.',
            'prioridad.required' => 'El campo Prioridad es obligatorio.',
        ]);

        // Resto de tu lógica de almacenamiento aquí

        // Verificar si hay errores y redirigir en consecuencia
        if ($validatedData) {

            // Guardar los datos en la base de datos
            $actividad = new Actividad;
            $actividad->id_cliente = $request->id_cliente;
            $actividad->id_actividad = $request->id_actividad;
            $actividad->fecha_limite = $request->fecha_limite;
            $actividad->resumen = $request->resumen;
            $actividad->descripcion = $request->descripcion;
            $actividad->prioridad = $request->prioridad;
            // $actividad->save();

            if ($actividad->save()) {
                // Redirigir a la función index del controlador con los datos actualizados
                $listadoDeActividades = Actividad::all();
                return view('actividad.index', compact('listadoDeActividades'));
            } else {
                // Redirigir de vuelta al formulario con errores si hay problemas de guardado
                return redirect()->back()->withInput()->withErrors(['Error al guardar la actividad. Por favor, inténtelo de nuevo.']);
            }

            // Redirigir a la función index del controlador
            // return redirect()->route('actividad');
            // $listadoDeActividades = Actividad::all();
            // return view('actividad.index', compact('listadoDeActividades'));
        } else {
            // Redirigir de vuelta al formulario con errores
            return redirect()->back()->withInput()->withErrors($validatedData);
        }
    }


    public function mostrarDetallesEvento($id)
    {
        // $actividad = Actividad::with('notas')->find($id);
        // return view('detalles_evento', ['evento' => $evento]);
    }



    /**
     * Display the specified resource.
     */
    public function show($idActividad)
    {
        $actividad = Actividad::find($idActividad);
        $idCliente = $actividad->id_cliente;
        // echo "<pre>";
        // print_r($idCliente);
        // echo "</pre>";
        // return;
        $cliente = Cliente::find($idCliente);
        $notas = NotaActividad::find($idActividad);
        // echo "<pre>";
        // print_r($notas);
        // echo "</pre>";
        // echo "<pre>";
        // print_r($actividad);        
        // echo "</pre>";

        // return view('actividad.info', compact('actividad'));

        return view('actividad.detalle', compact('actividad', 'cliente', 'notas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actividad $actividad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actividad $actividad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actividad $actividad)
    {
        //
    }
}
