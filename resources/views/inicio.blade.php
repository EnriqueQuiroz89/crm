<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla con Bootstrap</title>
    <!-- Agrega los enlaces a Bootstrap -->
    <link href="{{ asset('build/assets/app-9aeff938.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Bienvenido a tu Aplicación con Bootstrap</h2>
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tarjeta de ejemplo</h5>
                        <p class="card-text">Este es un ejemplo básico de una tarjeta utilizando Bootstrap.</p>
                        <a href="#" class="btn btn-primary">Botón de ejemplo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agrega los scripts de Bootstrap al final del documento -->
    <script src="{{ asset('build/assets/app-02317797.js') }}"></script>
</body>

</html>
