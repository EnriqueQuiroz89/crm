@extends('header')

@section('estilos')
    <!-- Agregar cualquier hoja de estilo adicional aquí -->
    <link href="{{ asset('build/assets/app-9aeff938.css') }}" rel="stylesheet">    
@endsection

{{ '>Aqui deberia iniciar el contenido</pre>' }}

{{-- @extends('Contenido') --}}

{{-- Explicacion: Esta vista es Generica y sobre esta se pueden cargar N contenidos
     En donde se extiende de esta vista el codigo que se quiera incluir debe venir dentro de
     una seccion con el mismo nombre que tenga el Yield
De Chatsito

En el contexto de Laravel y el uso de plantillas Blade, la directiva @yield se utiliza para definir secciones que se pueden sobrescribir en las vistas que extienden una plantilla principal. Esta directiva permite que las vistas secundarias proporcionen contenido para ciertas secciones de la plantilla principal. Aquí tienes una explicación más detallada:

    --}}

{{-- @yield('contenido') --}}


{{ '<pre>Aqui deberia terminar el contenido</pre>' }}

<!-- Agrega los scripts de Bootstrap al final del documento -->




@extends('footer')
@section('scriptsJs')
    <!-- Agrega los scripts de Bootstrap al final del documento -->
        {{-- <script src="{{ asset('build/assets/app-11034ae4.js') }}"></script> --}}
@endsection


{{-- 
<script>
    $(document).ready(function() {
        // Tu código con jQuery aquí
        // Por ejemplo:
        $('body').css('background-color', 'lightblue');
    });
</script> --}}