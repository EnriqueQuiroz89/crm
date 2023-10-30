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
                <div class="card-body">
                    <h5 class="card-title">Registro de actividad</h5>

                    <!-- Mostrar errores de validación -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form method="post" action="{{ route('actividad.store') }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST') 

                        <div class="mb-3">
                            <label for="" class="form-label">Elije a un cliente de la lista</label>
                            <select class="form-select form-select-lg" name="id_cliente" id="id-cliente">
                                <!-- Resto de tu código HTML -->
                                @foreach ($listadoDeClientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Elije un tipo de actividad</label>
                            <select class="form-select form-select-lg" name="id_actividad" id="id-actividad">
                                <option selected>Select one</option>
                                @foreach ($catalogoActividades as $actividad)
                                    <option value="{{ $actividad->id }}">{{ $actividad->nombre_actividad }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Fecha límite</label>
                            <input type="date" class="form-control" name="fecha_limite" id="fecha_limite">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Resumen</label>
                            <input type="text" class="form-control" name="resumen" id="resumen">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Descripción</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Prioridad</label>
                            <select class="form-select" name="prioridad" id="prioridad">
                                <option value="alta">Alta</option>
                                <option value="media">Media</option>
                                <option value="baja">Baja</option>
                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>


                    {{-- 1	id Primaria	int(11)			No	Ninguna		AUTO_INCREMENT	Cambiar Cambiar	Eliminar Eliminar	
                    2	id_cliente	int(11)			Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
                    3	id_usuario	int(11)			Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
                    4	id_actividad	int(11)			Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
                    5	fecha_limite	date			Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
                    6	resumen	varchar(255)	utf8mb4_general_ci		Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
                    7	descripcion	text	utf8mb4_general_ci		Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
                    8	prioridad	varchar(50)	utf8mb4_general_ci		Sí	NULL			Cambiar Cambiar	Eliminar Eliminar	
                    9	creado_en	timestamp	 --}}
                    {{-- id_cliente int
                    id_usuario int   
                    id_actividad int
                    fecha_limite date
                    resumen varchar
                    descripcion text
                    prioridad varchar
                    creado_en timestamp --}}

                </div>
            </div>
        </div>
    </div>
@endsection
