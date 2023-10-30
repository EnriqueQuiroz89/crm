<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link href="{{ asset('build/assets/app-9aeff938.css') }}" rel="stylesheet">

    {{-- <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script> --}}
    {{-- <link href="{{ asset('third-party/assets/fullcalendar/index.global.min.js') }}" rel="stylesheet"> --}}

    {{-- Se carga el jQuery antes para que funcione el MODAL --}}
    {{-- <script src="{{ asset('build/assets/app-89381108.js') }}"></script> --}}
    <script src="{{ asset('build/assets/app-25e2530e.js') }}"></script>
    {{-- <script src="{{ asset('build/assets/app-07c2a61b.js') }}"></script> --}}

    <script src="{{ asset('third-party/fullcalendar/js/index.global.min.js') }}"></script>


</head>

<body>
    

    
    
    {{-- 
            En el contexto de Laravel y el uso de plantillas Blade, la directiva @yield se utiliza para definir secciones que se pueden sobrescribir en las vistas que extienden una plantilla principal. Esta directiva permite que las vistas secundarias proporcionen contenido para ciertas secciones de la plantilla principal. Aquí tienes una explicación más detallada:
    --}}
    <div class="container-fluid px-0">

        @include('navbar-superior')

        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar" style="height: 100vh;">
                <!-- Contenido del menú lateral -->
                @include('menu-lateral')
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!-- Contenido principal -->
                @yield('contenido')
            </main>
            {{-- <div class="col-md-9">
                @yield('contenido')
            </div> --}}
        </div>

    </div>


    <script>
        $(document).ready(function() {
            // Tu código con jQuery aquí
            // Por ejemplo:
            $('body').css('background-color', 'lightblue');
        });
    </script>

</body>

</html>
