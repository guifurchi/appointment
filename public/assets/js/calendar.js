
var available_dates; //Recebe as datas do Django por meio do calendar.html
var appointment_type;
var slot_duration;
var scroll_time;

$(document).ready(function() {
  $("#appointment_types").val(appointment_type);
  if(appointment_type=="Selecione"){
      $("#search_dates").hide();
  }
  else
  {
      $("#search_dates").show();
  }
  $('#appointment_types').on('change', function() {
      appointment_type = $("#appointment_types").val();
      if(appointment_type=="Selecione"){
          $("#search_dates").hide();
      }
      else
      {
          $("#search_dates").show();
      }
  });

});

document.addEventListener('DOMContentLoaded', function() {
    try{
      var Draggable = FullCalendarInteraction.Draggable;
      var containerEl = document.getElementById('external-events-list');
      var initialLocaleCode = 'pt-br';
      var localeSelectorEl = document.getElementById('locale-selector');
      var calendarEl = document.getElementById('calendar');
      /*
      document.getElementById('prev').addEventListener('click', function() {
        calendar.prev();
      });

      document.getElementById('next').addEventListener('click', function() {
        calendar.next();
      });

      document.getElementById('today').addEventListener('click', function() {
        calendar.today();
      });

      document.getElementById('select_calendar_type').addEventListener('change', function(data) {
        calendar.changeView(data.srcElement.value);
      });*/

      var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],

        header: {
          center: 'title',
          left: 'timeGridDay,timeGridWeek,dayGridMonth listDay',
          right: 'today prev,next'
        },
        views: {
          listDay: {
            buttonText: 'Lista do dia',
            columnHeaderFormat:{ weekday: 'short' }
          },
          listWeek: {
            buttonText: 'Lista da semana'
          },
          listMonth: {
            buttonText: 'Lista do mês'
          },
          timeGridWeek: {
            columnHeaderFormat:{ day: 'numeric' }
          },
          timeGridWeek: {
            columnHeaderFormat:{ weekday: 'short' }
          }
        },
        eventTimeFormat: { // like '14:30:00'
          hour: '2-digit',
          minute: '2-digit',
          meridiem: false
        },

        defaultDate: new Date(),
        defaultView: 'timeGridWeek',
        height: '100%',
        allDaySlot:false,
        aspectRatio: 1,
        dayMinWidth: 100,
        contentHeight:600,
        //dayHeaderFormat:{weekday: 'short'},
        locale: initialLocaleCode,
        buttonIcons: false,
        weekNumbers: false,
        navLinks: true,
        editable: false,
        droppable: false,
        eventLimit: true,
        nowIndicator:true,
        slotLabelInterval:'1:00:00',
        slotDuration: slot_duration,
        //scrollTime: '8:00:00',
        scrollTime:scroll_time,
        expandRows: true,
        
        drop: function(arg) {
          set_new_date(arg);
        },
        eventDrop: function(info) {
          update_date(info);
        },
        eventClick: function(info) {
          if(info.view.type == "listDay" || info.view.type == "listWeek" || info.view.type == "listMonth" ){
            console.log(info.event.id);  
          }else{
            open_window(info.event.id)  
          }
          // change the border color just for fun
        },

        eventResize: function(info) {
          update_date(info);
        },
        //events: available_dates,
        events: "get/",
        eventRender: function(info) {
          if(info.view.type == "listDay" || info.view.type == "listWeek" || info.view.type == "listMonth" ){

            $(info.el.cells[0]).append(info.el.cells[1].innerHTML)
            $(info.el.cells[2]).remove();
            $(info.el.cells[1]).remove();

            try{

                if(info.event.extendedProps.multi_user){
                  $(info.el.cells[0]).append("<div>"+info.event._def.title+"</div>")
                }
                else
                {
                  if(info.event._def.extendedProps.status){
                    $(info.el.cells[0]).append("<div>"+info.event._def.extendedProps.status+"</div>")
                  }

                  if(info.event._def.extendedProps.title){
                    $(info.el.cells[0]).append("<div>"+info.event._def.extendedProps.title+"</div>")
                  }

                  $(info.el.cells[0]).append("<div>"+info.event._def.extendedProps.person_name+ " " +info.event._def.extendedProps.person_phone+"</div>");

                  if(info.event._def.extendedProps.person_email){
                    $(info.el.cells[0]).append("<div>"+info.event._def.extendedProps.person_email+"</div>");
                  }

                  if(info.event._def.extendedProps.person_text){
                    $(info.el.cells[0]).append("<div>"+info.event._def.extendedProps.person_text+"</div>");
                  }
                }
              }
              catch(err){
                 console.log(err);
                 swal("ERRO",err,"error")
              }

            var block_html = "<span class='custom-control custom-checkbox'> \
                                    <input type='checkbox' class='custom-control-input calendar-checkbox' id="+info.event.id+"> \
                                    <label class='custom-control-label' for="+info.event.id+"></label>\
                                  </span>"

            $(info.el.cells[0]).append(block_html);

            $(info.el.cells[0]).append("<br>")

            if(info.event.extendedProps.booked && !info.event.extendedProps.multi_user){

              if(info.event.extendedProps.status!="ATENDIDO"){
                $(info.el.cells[0]).append("<span style='margin-right:2px' class='btn-sm btn-raised btn-success attend'>Atendido</span>");
                $(info.el.cells[0]).find(".attend").click(function(){
                  list_action(info.event.id,"attend");
                });
              }

              if(info.event.extendedProps.status!="CANCELADO" && info.event.extendedProps.status!="ATENDIDO"){
                $(info.el.cells[0]).append("<span style='margin-right:2px' id='cancel' class='btn-sm btn-raised btn-warning cancel'>Cancelar</span>");
                $(info.el.cells[0]).find(".cancel").click(function() {
                    list_action(info.event.id,"cancel");
                });
              }

              $(info.el.cells[0]).append("<div class='list_day_buttons'>")
              $(info.el.cells[0]).append("<span style='margin-right:2px' class='btn-sm btn-raised btn-secondary open'>Detalhes</span>");
              $(info.el.cells[0]).find(".open").click(function() {
                open_window(info.event.id);
              });

              if(info.event.extendedProps.status!="NÃO COMPARECEU" && info.event.extendedProps.status!="ATENDIDO" && !info.event.extendedProps.multi_user){
                  $(info.el.cells[0]).append("<span style='margin-right:2px' class='btn-sm btn-raised btn-primary no_show'>Não compareceu</span>");
                  $(info.el.cells[0]).find(".no_show").click(function() {
                    list_action(info.event.id,"no_show");
                  });
              }
              $(info.el.cells[0]).append("</div>")
            }

            //if(info.event.extendedProps.multi_user){
              $(info.el.cells[0]).append("<div class='list_day_buttons'>")
              $(info.el.cells[0]).append("<span style='margin-right:2px' class='btn-sm btn-raised btn-secondary open'>Detalhes</span></div>");
              $(info.el.cells[0]).find(".open").click(function(){
                open_window(info.event.id);
              });
            //}
          }
        }
      });
      calendar.render();
      calendar.setOption('locale', 'pt-br');
    }
    catch(err)
    {
      console.log(err);
      swal("ERRO",err,"error")
    }
});

function set_new_date(event){
  var date = event.dateStr;
  var appointment_type = $('#appointment_types').val();

  $.ajax({
    type: 'POST',
    headers: { "X-CSRFToken": csrftoken },
    url: "/agendamentos/set_new_date/",
    data: {
      "appointment_type":appointment_type,
      "date":date,
    },
    success: function (response) {
      location.reload();
    },
    error: function (response) {
      console.log(response)
    }
  })
}

function update_date(info){

  var id = info.event.id;
  var date_from = info.event.start.toISOString();
  var date_to = null;

  //if(info.event.end){
  //  date_to = info.event.end.toISOString();
  //}
  console.log('altera_data')
/*
  $.ajax({
    type: 'POST',
    headers: { "X-CSRFToken": csrftoken },
    url: "/agendamentos/update_date/",
    data: {
      "id":id,
      "date_from":date_from,
      "date_to":date_to
    },
    success: function (response) {
      console.log(response)
    },
    error: function (response) {
      console.log(response)
    }
  })
*/
}

function list_action(id,action){

  var message = "";

  if(action=="attend"){
      message = "Você tem certeza que deseja marcar como atendido ?"
  }

  if(action=="cancel"){
      message = "Você tem certeza que deseja cancelar ?"
  }

  if(action=="unblock"){
      message = "Você tem certeza que deseja desbloquear estes horários ?"
  }

  if(action=="block"){
      message = "Você tem certeza que deseja bloquear estes horários ?"
  }

  if(action=="no_show"){
      message = "Você tem certeza que deseja marcar este horário como não compareceu?"
  }

  swal({
    title: "Confirmar",
    text: message,
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#0CC27E',
    cancelButtonColor: '#FF586B',
    confirmButtonText: 'Sim',
    cancelButtonText: "Não"
  }).then(function (isConfirm) {
    if (isConfirm) {
        $.ajax({
            type: 'POST',
            headers: { "X-CSRFToken": csrftoken },
            url: "/agendamentos/list_action/",
            data: {
              "id":id,
              "action":action
            },
            success: function (response) {
              location.reload();
            },
            error: function (response) {
            }
        })
    }
  }).catch(swal.noop);
}

function open_window(id){
    window.open("/agendamentos/detalhes/"+id);
}

function block(){
  var inputElements = document.getElementsByClassName('calendar-checkbox');
  var ids = []
  for(var i=0; i<inputElements.length; ++i){
    if(inputElements[i].checked){
      ids.push(inputElements[i].id);
    } 
  }  
  list_action(ids,'block')
}

function unblock(){

  var inputElements = document.getElementsByClassName('calendar-checkbox');
  var ids = []
  
  for(var i=0; i<inputElements.length; ++i){
    if(inputElements[i].checked){
      ids.push(inputElements[i].id);
    } 
  }
  list_action(ids,'unblock')  
}












