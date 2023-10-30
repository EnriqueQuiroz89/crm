<!-- Modal -->

{{-- EN la plantilla principal existe un YIELD llamado 'contenido' por ende
    En esta vista secundaria que extiende de Principal
    lo que queremos que aparezca en lugar de YIELD debe ir en una seccion acotada 
    llamada 'contenido', lo que se acota en esta seccion reemplazara a Principal 
    --}}

<div class="modal fade" id="createCliente" tabindex="-1" aria-labelledby="createClienteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createClienteLabel">Registrar actividad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                {{-- id_cliente id_usuario tipo_actividad fecha_limite resumen descripcion prioridad creado_en --}}


                <form method="post" action="{{ route('home.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="" class="form-label">Elije a un cliente de la lista</label>
                        <select class="form-select form-select-lg" name="" id="">
                            <option selected>Select one</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Elije un tipo de actividad</label>
                        <select class="form-select form-select-lg" name="" id="">
                            <option selected>Select one</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <div class="form-group">
                            <label for="fechaLimite">Fecha limite:</label>
                            <input type="date" class="form-control" id="fechaLimite">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Nombre y apellidos</label>
                        <input type="text" class="form-control" name="nombre" id="nombre"
                            aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Nombre y apellidos</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Telefono</label>
                        <input type="number" class="form-control" name="telefono" id="telefono"
                            aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="correo" id="correo"
                            aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

