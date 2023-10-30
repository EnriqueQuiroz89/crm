@extends('Principal')
{{-- EN la plantilla principal existe un YIELD llamado 'contenido' por ende
    En esta vista secundaria que extiende de Principal
    lo que queremos que aparezca en lugar de YIELD debe ir en una seccion acotada 
    llamada 'contenido', lo que se acota en esta seccion reemplazara a Principal 
    --}}

@section('contenido')
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Lista de actividades</span>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between my-2">
                        <h5 class="card-title">Actividades</h5>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createCliente">
                            Agregar actividad
                        </button>

                        <a href="{{ route('actividad.create') }}" class="btn btn-success">Enlace Agregar actividad</a>

                    </div>

                    <div class="table-responsive">
                        <table class="table table-primary">
                            <thead>
                                {{-- // id	id_cliente	id_usuario	tipo_actividad	fecha_limite	resumen	descripcion	prioridad	creado_en --}}

                                <tr>
                                    <th>ID Cliente</th>
                                    <th>ID Actividad</th>
                                    <th>Fecha Límite</th>
                                    <th>Resumen</th>
                                    <th>Descripción</th>
                                    <th>Prioridad</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listadoDeActividades as $actividad)
                                    <tr class="">
                                        <td>{{ $actividad->id_cliente }}</td>
                                        <td>{{ $actividad->id_actividad }}</td>
                                        <td>{{ $actividad->fecha_limite }}</td>
                                        <td>{{ $actividad->resumen }}</td>
                                        <td>{{ $actividad->descripcion }}</td>
                                        <td>{{ $actividad->prioridad }}</td>
                                        <td class="d-flex justify-content-around">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editar_{{ $actividad->id }}">
                                                Editar
                                            </button>
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                                data-bs-target="#eliminar_{{ $actividad->id }}">
                                                Eliminar
                                            </button>
                                        </td>

                                    </tr>

                                    @include('actividad.info')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Est include contiene al modal que se usuara para registro --}}
    @include('actividad.create')
@endsection
