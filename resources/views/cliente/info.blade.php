<!-- Modal -->
<div class="modal fade" id="editar_{{ $cliente->id }}" tabindex="-1" aria-labelledby="editClienteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editClienteLabel">Editar cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="{{ route('home.update', $cliente->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre y apellidos</label>
                        <input type="text" class="form-control" name="nombre" id="nombre"
                            aria-describedby="helpId" placeholder="" value="{{ $cliente->nombre }}">
                        <small id="helpId" class="form-text text-muted">Nombre y apellidos</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Telefono</label>
                        <input type="number" class="form-control" name="telefono" id="telefono"
                            aria-describedby="helpId" placeholder="" value="{{ $cliente->telefono }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="correo" id="correo"
                            aria-describedby="helpId" placeholder="" value="{{ $cliente->correo_electronico }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="eliminar_{{ $cliente->id }}" tabindex="-1" aria-labelledby="eliminarClienteLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eliminarClienteLabel">Eliminar cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="{{ route('home.destroy', $cliente->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')

                    <div class="card">
                        <div class="card-body">
                            <div class="alert alert-danger" role="alert">
                                Estas seguro de querer eliminar a <strong>{{ $cliente->nombre }}</strong>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Confirmar eliminacion</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
