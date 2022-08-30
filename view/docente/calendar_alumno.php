<?php
global $events;
$events = [];

$idalumno = $_SESSION['horarioAlumno'];

$obj=new DbConnection();
$conn=$obj->dbConnect();
$resultados = $conn->query("SELECT
  ta.nombre AS tanombre,
  i.fecha AS ifecha,
  i.hora AS ihora,
  i.hora_fin AS ihora_fin, 
  alas.IDAULA AS alasIDAULA, 
  alas.IDTEMA AS alasIDTEMA
  FROM
  temaasignatura AS ta,
  alumnoasisitetemaaula AS alas,
  impartirtemaaula AS i
  WHERE
  ta.ID = i.IDTEMA AND
  alas.IDTEMA = ta.ID AND
  alas.IDALUMNO = $idalumno
  ");



foreach ($resultados as $fila) {
  $idalumno = $_SESSION['horarioAlumno'];    //??
  $idaula = $fila['alasIDAULA'];
  $idtema = $fila['alasIDTEMA'];

    $title = $fila['tanombre'];
    $fecha = strtotime($fila['ifecha']);
    $year = date('Y',$fecha);
    $month = date('m',$fecha);
    $day = date('d',$fecha);
    $hora = date('H',strtotime($fila['ihora']));
    $minuto = date('i',strtotime($fila['ihora']));
    $hora_fin = date('H',strtotime($fila['ihora_fin']));
    $minuto_fin = date('i',strtotime($fila['ihora_fin']));
    $start = $year."-".$month."-".$day."T".$hora.":".$minuto.":00";
    $end = $year."-".$month."-".$day."T".$hora_fin.":".$minuto_fin.":00";



    $hora = $fila['ihora'];
    $tmpObj =
    [
      'title'=> $title,
      'start'         => $start,
      'end'            => $end,
      'allDay'        => false,
      'backgroundColor'=> '#00c0ef', //Info (aqua)
      'borderColor'    => '#00c0ef', //Info (aqua)
      'idalumno'  =>  $idalumno,
      'idaula'  =>  $idaula,
      'idtema'  =>  $idtema
    ];

array_push($events, $tmpObj);

}

$events = json_encode($events);
$events = preg_replace('/"([a-zA-Z]+[a-zA-Z0-9_]*)":/','$1:',$events);
$events = str_replace('"', "'", $events);

?>
<script>
  $(function () {



    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var eventos = <?php echo $GLOBALS["events"]; ?> ;
//console.log(new Date(y, m, d, 12, 0));

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable;

    var calendarEl = document.getElementById('calendar');





    var calendar = new Calendar(calendarEl, {
      defaultView: 'timeGridWeek',
      plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },

      buttonText    : {
        today  : 'hoy',
        month  : 'mes',
        week  : 'semana',
        day  : 'dia'
      },
      //Random default events
      events    : <?php print_r($GLOBALS["events"]); ?>,

eventClick : function(info) {
 
 $('#modalTitle').html(info.event.title);
 $('#idalumno').val(info.event.extendedProps.idalumno);
 $('#idaula').val(info.event.extendedProps.idaula);
 $('#idtema').val(info.event.extendedProps.idtema);

 
 
 $('#eventID').val(info.event.instanceId);
 $('#calendarModal').modal();
     
 },

      editable  : false,
      locale: 'es',
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      ini_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
