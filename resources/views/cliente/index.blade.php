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
                    <span> Lista de clientes </span>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between my-2">
                        <h5 class="card-title">Clientes</h5>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createCliente">
                            Agregar cliente
                        </button>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-primary">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Correo electronico</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listadoDeClientes as $cliente)
                                    <tr class="">
                                        <td>{{ $cliente->id }}</td>
                                        <td>{{ $cliente->nombre }}</td>

                                        <td>{{ $cliente->telefono }}</td>
                                        <td>{{ $cliente->correo_electronico }}</td>
                                        <td class="d-flex justify-content-around">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editar_{{ $cliente->id }}">
                                                Editar
                                            </button>
                                            {{-- <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                                data-bs-target="#eliminar_{{ $cliente->id }}">
                                                Eliminar
                                            </button> --}}

                                            
                                        </td>

                                    </tr>

                                    @include('cliente.info')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Est include contiene al modal que se usuara para registro --}}
    @include('cliente.create')
@endsection
