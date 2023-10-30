<!-- Modal -->
<div class="modal fade" id="createCliente" tabindex="-1" aria-labelledby="createClienteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createClienteLabel">Registrar cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="{{route('home.store')}}" enctype="multipart/form-data">
                    @csrf
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
