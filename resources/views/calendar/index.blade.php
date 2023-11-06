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
      eventClick: function(arg) {

        mostrarDetalleDelEvento();


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



      // events: [
      //   {
      //     title: 'All Day Event',
      //     start: '2023-01-01'
      //   },
      //   {
      //     title: 'Long Event',
      //     start: '2023-01-07',
      //     end: '2023-01-10'
      //   },
      //   {
      //     groupId: 999,
      //     title: 'Repeating Event',
      //     start: '2023-01-09T16:00:00'
      //   },
      //   {
      //     groupId: 999,
      //     title: 'Repeating Event',
      //     start: '2023-01-16T16:00:00'
      //   },
      //   {
      //     title: 'Conference',
      //     start: '2023-01-11',
      //     end: '2023-01-13'
      //   },
      //   {
      //     title: 'Meeting',
      //     start: '2023-01-12T10:30:00',
      //     end: '2023-01-12T12:30:00'
      //   },
      //   {
      //     title: 'Lunch',
      //     start: '2023-01-12T12:00:00'
      //   },
      //   {
      //     title: 'Meeting',
      //     start: '2023-01-12T14:30:00'
      //   },
      //   {
      //     title: 'Happy Hour',
      //     start: '2023-01-12T17:30:00'
      //   },
      //   {
      //     title: 'Dinner',
      //     start: '2023-01-12T20:00:00'
      //   },
      //   {
      //     title: 'Birthday Party',
      //     start: '2023-01-13T07:00:00'
      //   },
      //   {
      //     title: 'Click for Google',
      //     url: 'http://google.com/',
      //     start: '2023-01-28'
      //   }
      // ]
    });

    calendar.render();
  });



  function mostrarDetalleDelEvento() {
    alert("Hola");

    $("#container-calendar").removeClass("col-12").addClass("col-6");

    $("#container-info-evento").removeClass("d-none").addClass("col-6");


    // $(selector).removeClass(className);

  }
</script>

<div class="card my-3">
  <div class="card-header">
    Programa de actividades
  </div>
  <div class="card-body">
    <h5 class="card-title">What do??</h5>

    <div class="row">
      <div class="col-12 container" id="container-calendar">
        <div id='calendar'></div>
      </div>
      <div class="d-none" id="container-info-evento">Informacion del evento</div>
    </div>



  </div>

</div>


<script>
  $(document).ready(function() {
    $.ajax({
      url: "{{ route('actividad.show') }}", // No se pasa ningún parámetro en la ruta
      type: 'GET',
      success: function(response) {
        // Aquí puedes manejar la respuesta de la llamada AJAX
        console.log(response);
          // Agregar la respuesta como HTML al contenedor deseado
          // $('#container-info-evento').html(response);
      },
      error: function(error) {
        // Manejo de errores en caso de que ocurra algún problema con la llamada AJAX
        console.error('Error en la solicitud AJAX:', error);
      }
    });

  });
</script>

<!-- {{-- <div id='calendar'></div> --}} -->
@endsection