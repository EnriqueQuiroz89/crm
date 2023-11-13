@extends('Principal')
{{-- EN la plantilla principal existe un YIELD llamado 'contenido' por ende
En esta vista secundaria que extiende de Principal
lo que queremos que aparezca en lugar de YIELD debe ir en una seccion acotada
llamada 'contenido', lo que se acota en esta seccion reemplazara a Principal
--}}

@section('contenido')
{{--
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth'
    });
    calendar.render();
  });
</script> --}}


<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {

      aspectRatio: 1.5, // Puedes ajustar este valor según tus necesidades
  // ... (otras opciones)

      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },

      // initialDate: '2023-01-12',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      select: function(arg) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.addEvent({
            title: title,
            start: arg.start,
            end: arg.end,
            allDay: arg.allDay
          })
        }
        calendar.unselect()
      },

      //       eventClick: function(arg) {
      //     mostrarDetalleDelEvento(arg.event.id); // Pasar el id del evento
      // },


      eventClick: function(arg) {
        var id_evento = arg.event.extendedProps.id_evento;
        mostrarDetalleDelEvento(id_evento);
        // if (confirm('Are you sure you want to delete this event?')) {
        //   arg.event.remove()
        // }
      },
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events

      // eventContent: function(arg) {
      //   return {
      //     html: '<b>' + arg.timeText + '</b><br/>' +
      //       '<span>' + arg.event.title + '</span>'
      //   };
      // },

      eventContent: function(arg) {
        return {
          html: arg.event.extendedProps.html // Mostrar el HTML personalizado para el evento
        };
      },

      events: {
        // !!json_encode($eventos) !!
        events: @json($eventos)

      } // Aquí está la corrección

    });

    calendar.render();
  });
</script>

<div class="card my-3">
  <div class="card-header">
    Programa de actividades
  </div>
  <div class="card-body">
    <h5 class="card-title">What do??</h5>

    <div class="d-none container-fluid my-2" id="container-info-evento">Informacion del evento</div>

    <div class="row">
      <div class="col-12 container-fluid my-2" id="container-calendar">

        <div class="card">
          <div class="card-header">
            Calendario
          </div>
          <div class="card-body">
            <div id='calendar'></div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>


<script>


  function mostrarDetalleDelEvento(eventoId) {

    // $("#container-calendar").removeClass("col-12").addClass("col-6").addClass("container-fluid");
    $("#container-info-evento").removeClass("d-none").addClass("col-12 mx-auto");
    // Resto del código para manipular el DOM

    // Llamada AJAX
    $.ajax({
      type: 'GET',
      url: 'actividad/' + eventoId,

      success: function(data) {
        // Manipula la respuesta de la llamada AJAX según tus necesidades
        console.log(data);
        $('#container-info-evento').html(data);
        // console.log("Exito");
      },
      error: function(error) {
        // Maneja el error si la llamada AJAX falla
        console.error('Error en la llamada AJAX:', error);
      }
    });
  }
</script>

<!-- {{-- <div id='calendar'></div> --}} -->
@endsection