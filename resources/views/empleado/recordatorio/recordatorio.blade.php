@extends('layout')

@section('content')

<div id='calendario'>
 <div id='calendar'></div>
</div>
<script>
  $(document).ready(function() {
    $('#calendar').fullCalendar({

        header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,listYear'
        },

        googleCalendarApiKey: 'AIzaSyCzPVV9A8i_UOUXyKmPTC4krE9hyvF26vI',

        events: {
            googleCalendarId: 'anillo94@live.com.mx'
        },

      eventClick: function(event) {
        // opens events in a popup window
        window.open(event.url, 'gcalevent', 'width=700,height=600');
        return false;
      },
      
      loading: function(bool) {
        $('#loading').toggle(bool);
      }



    });
});


// function doRequest(options, printResult) {
//     var x = new XMLHttpRequest();
//     x.open(options.method, options.url);
//     x.onload = x.onerror = function() {
//       printResult(
//         (x.responseText || '')
//       );
//     };
//     x.send(options.data);
//   }
  
  
//  (function() {
//     doRequest({
//         method: 'GET',
//         url: 'https://www.googleapis.com/calendar/v3/calendars/<---YOURID-->/events?key=<--YOURKEY-->',
//     }, function printResult(result) {

//     result = JSON.parse(result);
//     var i;
//     var color;
//     var str,end;
//     eventsList = {
//         events: []
//     }
//     controleList = {
//         controles: []
//     }
//     for(i=0;i < result.items.length;i++) {

//         str = result.items[i].start.dateTime;
        
//         end = result.items[i].end.dateTime;
        
       
//         eventsList.events.push({
//             "title": result.items[i].summary+ "\n Salle : " + result.items[i].location,
//             "start": str,
//             "end": end,
//             "color": color,
//             "description": result.items[i].description + "\n" + result.items[i].location
//         });
//     }
//                     var myEvents = eventsList.events;
//                       $('#calendar').fullCalendar({
                      
//                       header: {
//                         left: 'prev,next today controle',
//                         center: 'title',
//                         right: 'month,agendaWeek,agendaDay'
//                       },
//                       defaultView: 'agendaWeek',
//                        timezone: "Europe/Paris",
//                       selectable: true,
//                       selectHelper: true,
//                       minTime:"07:00:00",
//                       maxTime:"21:00:00",
//                       contentHeight: 685, 
//                       lang: 'fr',
//                       select: function(start, end) {
//                         var title = prompt('Event Title:');
//                         var eventData;

//                         if (title) {
//                           eventData = {
//                             title: title,
//                             start: start,
//                             end: end,
//                             description: description
//                           };
//                           $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
//                         }
//                         $('#calendar').fullCalendar('unselect');
//                       },
//                       editable: true,
//                       eventLimit: true, // allow "more" link when too many events
//                       events: myEvents
                      
//                     });

//                 setTimeout("$('.fc-today-button').click();", 50);
//     });
// })();

  // $(document).ready(function() {
    
  //   $('#calendar').fullCalendar({
  //     header: {
  //       left: 'prev,next today',
  //       center: 'title',
  //       right: 'month,basicWeek,basicDay'
  //     },
  //     defaultDate: '2017-11-12',
  //     navLinks: true, // can click day/week names to navigate views
  //     editable: true,
  //     eventLimit: true, // allow "more" link when too many events
  //     events: [
  //       {
  //         title: 'All Day Event',
  //         start: '2017-10-01'
  //       },
  //       {
  //         title: 'Long Event',
  //         start: '2017-10-07',
  //         end: '2017-10-10'
  //       },
  //       {
  //         id: 999,
  //         title: 'Repeating Event',
  //         start: '2017-10-09T16:00:00'
  //       },
  //       {
  //         id: 999,
  //         title: 'Repeating Event',
  //         start: '2017-10-16T16:00:00'
  //       },
  //       {
  //         title: 'Conference',
  //         start: '2017-10-11',
  //         end: '2017-10-13'
  //       },
  //       {
  //         title: 'Meeting',
  //         start: '2017-10-12T10:30:00',
  //         end: '2017-10-12T12:30:00'
  //       },
  //       {
  //         title: 'Lunch',
  //         start: '2017-10-12T12:00:00'
  //       },
  //       {
  //         title: 'Meeting',
  //         start: '2017-10-12T14:30:00'
  //       },
  //       {
  //         title: 'Happy Hour',
  //         start: '2017-10-12T17:30:00'
  //       },
  //       {
  //         title: 'Dinner',
  //         start: '2017-10-12T20:00:00'
  //       },
  //       {
  //         title: 'Birthday Party',
  //         start: '2017-10-13T07:00:00'
  //       },
  //       {
  //         title: 'Click for Google',
  //         url: 'http://google.com/',
  //         start: '2017-10-28'
  //       }
  //     ]
  //   });
    
  // });

</script>
{{-- <script type="text/javascript" src="{{ URL::asset('vendor/fullcalendar/gcal.js') }}">
  $(document).ready(function() {
    $('#calendar').fullCalendar({
        googleCalendarApiKey: 'AIzaSyCzPVV9A8i_UOUXyKmPTC4krE9hyvF26vI',
        events: {
            googleCalendarId: ' juan.salazar@udem.edu'
        }
    });
});
</script> --}}
 

      <!-- FIN DE SECCIÓN DE PERFIL -->

    <!-- Empieza Modal button (Alta de cliente)-->
    {{-- <button type="button" class="btn btn-success gradient"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="margin-bottom: 25px;">Registrar recordatorio</button>

     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Alta de empresa</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              COMENTARIO<span aria-hidden="true">&times;</span>COMENTARIO
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Evento</label>
                <input type="text" class="form-control" id="eventoRecordatorio" minlength="8" maxlength="20">
              </div>

              <div class="form-group">
                <label form="recipient-name" class="form-control-label">Motivo</label>                
                <select class="form-control" id="motivoRecordatorio">
                  <option>Seguimiento de proyecto</option>
                  <option>Contacto con cliente</option>
                  <option>Agendar cita</option>
                </select>
              </div>

              <div class="half left cf">
              <label for="recipient-name" class="form-control-label">Fecha</label>
                <input type="text" class="form-control" id="fechaRecordatorio" maxlength="20">              
              </div>

              <div class="half right cf">
                <label for="recipient-name" class="form-control-label">Hora</label>
                <input type="text" class="form-control" id="horaRecordatorio" maxlength="20">
              </div>

              <p><b>Frecuencia</b></p>
              <div class="half left cf">
              <div class="half left cf">
                <input type="number" class="form-control" id="numeroRecordatorio" maxlength="20">
              </div>
              <div class="half right cf">
                <select class="form-control" id="frecuenciaRecordatorio">
                  <option>Día(s)</option>
                  <option>Semana(s)</option>
                  <option>Mes(es)</option>
                  <option>Año(s)</option>
                </select>
              </div>
              </div>

            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger gradient" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success gradient">Guardar</button>
          </div>

        </div>
      </div>
    </div>
    <script type="text/javascript">
        $('#altaUsuario').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('New message to ' + recipient)
          modal.find('.modal-body input').val(recipient)
      })

    </script> --}}


    <!-- Termina Modal button (Alta de cliente)-->

    <!-- -->

{{-- <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Evento</th>
                <th>Motivo</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Frecuencia</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Evento</th>
                <th>Motivo</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Frecuencia</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Comunicarse con el señor García para seguimiento de la app "Comiditas"</td>
                <td>Seguimiento de proyecto</td>
                <td>03/09/2017</td>
                <td>12:00pm</td>
                <td>Cada 3 meses</td>
                <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient"  COMENTARIO data-toggle="modal" COMENTARIO COMENTARIO data-target="#registroModulo" COMENTARIO data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>


                  COMENTARIO<span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>COMENTARIO


                </td>
            </tr>
            <tr>
                <td>Junta con el cliente Mota</td>
                <td>Agendar cita</td>
                <td>15/09/2017</td>
                <td>07:00pm</td>
                <td>Cada 2 semanas</td>
                <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient"  COMENTARIOdata-toggle="modal"COMENTARIO data-target="#registroModulo" COMENTARIOdata-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>


                  COMENTARIO<span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>COMENTARIO


                </td>
            </tr>
            <tr>
                <td>Mantener contacto con González de Softtek</td>
                <td>Contacto con el cliente</td>
                <td>02/08/2017</td>
                <td>02:00pm</td>
                <td>Cada 2 días</td>
                <td>
                  <button type="button" class="btn btn-primary gradient"  data-toggle="modal" data-target="#infoModal" data-whatever="@mdo" style="margin-bottom: 5px;"><span class = "glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

                  <button type="button" class="btn btn-primary gradient"  COMENTARIO data-toggle="modal" COMENTARIO COMENTARIO data-target="#registroModulo" COMENTARIO data-whatever="@mdo" style="margin-bottom: 5px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>


                  COMNTARIO<span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>COMENTARIO


                </td>
            </tr>
        </tbody>
</table>

<script type="text/javascript">
  
  $(document).ready(function() {
    $('#example').DataTable();
  } );

</script> --}}

@stop