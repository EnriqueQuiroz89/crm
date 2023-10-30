<!-- <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>

   
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container mt-5">
        <h2>Lista de Clientes</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Cliente 1</td>
                    <td>cliente1@example.com</td>
                    <td>1234567890</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Cliente 2</td>
                    <td>cliente2@example.com</td>
                    <td>0987654321</td>
                </tr>

            </tbody>
        </table>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html> -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Lista de Clientes</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Cliente 1</td>
                    <td>cliente1@example.com</td>
                    <td>1234567890</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Cliente 2</td>
                    <td>cliente2@example.com</td>
                    <td>0987654321</td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
            </tbody>
        </table>
    </div>

    <!-- Importa el archivo CSS compilado por Vite utilizando el helper mix -->
    <link rel="stylesheet" href="{{ mix('build/assets/app.css') }}">

    <!-- Importa el archivo JS compilado por Vite utilizando el helper mix -->
    <script type="module" src="{{ mix('build/assets/app.js') }}"></script>

</body>

</html>
