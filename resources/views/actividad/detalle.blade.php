<style>
  .encabezado-detalle {
    background-color: silver;
    padding: .5rem;
  }
</style>


<div class="card">
  <div class="card-body">

    <div class="row d-flex justify-content-between encabezado-detalle">
      <div class="col-6">
        <h5 class="card-title">Detalle de la actividad</h5>
      </div>

      <div class="col-3">
        <button class="btn btn-primary" type="button" id="btn-cerrar-detalle">Cerrar</button>
      </div>
    </div>


    <div class="row">
      <div class="col-xl-6 col-lg-16 col-md-12 col-sm-12">
        <div class="row">
          <div class="table-responsive col-12">
            <table class="table table-light">
              <thead class="thead-light">
                <tr>
                  <th>Propiedad</th>
                  <th>Valor</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($cliente->getAttributes() as $propiedad => $valor)
                <tr>
                  <td>{{ $propiedad }}</td>
                  <td>{{ $valor }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="table-responsive col-12">

            <table class="table table-light">
              <thead class="thead-light">
                <tr>
                  <th>Propiedad</th>
                  <th>Valor</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($actividad->getAttributes() as $propiedad => $valor)
                <tr>
                  <td>{{ $propiedad }}</td>
                  <td>{{ $valor }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div>
          </div>
        </div>
      </div>

      <div class="col-xl-6 col-lg-16 col-md-12 col-sm-12">

        <div class="row d-flex justify-content-center my-1">
          <span class="">Agregar notas a la actividad.</span>
        </div>
        <div class="row my-1">
          <div class="col-12">
            <form method="" action="">
              <div class="form-group">
                <label for="inputNota">Nota:</label>
                <textarea id="inputNota" class="form-control" name="inputNota" rows="4"></textarea>
              </div>
            </form>

            <div class="form-group">
              <button class="btn btn-success" type="button" id="btn-agregar-nota">Agregar</button>
            </div>
          </div>
        </div>

        <div class="row my-1">
          <div id="respuestaNotasDeLaActividad"></div>
        </div>

      </div>


    </div>


  </div>


  <script>
    $("#btn-cerrar-detalle").click(function(e) {
      $("#container-info-evento").addClass("d-none");
      // $("#container-calendar").removeClass("col-6").addClass("col-12");
    });


    // function cerrarDetalleEvento() {}
  </script>