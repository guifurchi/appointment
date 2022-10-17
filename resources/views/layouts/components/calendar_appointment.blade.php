<div class="main-content">
    <div class="content-wrapper">
        <div id="wrap">

            <form class="form" method="post">
                <input type="hidden" name="csrfmiddlewaretoken" value="9JcrLmc5mtT0FCLg8865tXSCm6m1IcQgAjXCpSVJI7HfSLnfcewEsw4zCkxTEOAj">
                <div class="input-group">
                    <select class="form-control col-lg-3 col-sm-6" name="appointment_types" id="appointment_types">
                        <option>Selecione</option>
                        
                            <option value="2226">Cópia da Nutricionista Valéria Furchi</option>
                        
                            <option value="2176">Nutricionista Valéria Furchi</option>
                        
                    </select>
                    <div class="input-group-append">
                    <button class="btn btn-outline-secondary" id="search_dates" type="submit">Atualizar Agenda</button>
                    </div>
                </div>
            </form>
 
            <div id="prev_next"><!--
                <button type="button" id="prev" class="btn btn-primary"> < </button>
                <button type="button" id="next" class="btn btn-primary"> > </button>
                <button type="button" id="today" class="btn btn-primary"> Hoje  </button>-->
            </div>
            <div id="add_event">
                <a type="button" id="addevent" class="btn btn-sm btn-primary" href="/agendamentos/incluir_horario/" target="_blank"> Incluir Horário </a>
                <a type="button" id="addevent" class="btn btn-sm btn-warning" href="/painel/controle?block" target="_blank"> Bloquear Horários </a>
            </div>

            <div id="calendar_type">
                <!--<select class="form-control" name='select_calendar_type' id="select_calendar_type">
                
                    <option value="listDay">Lista do dia</option>
                    <option value="listWeek">Lista da semana</option>
                    <option value="listMonth">Lista do mês</option>
                    <option value="timeGridDay">Calendário do dia</option>
                    <option value="timeGridWeek" selected>Calendário da semana</option>
                    <option value="dayGridMonth">Calendário do mês</option>
                </select>-->
            </div>

            <div id="service_type"><br><h6>Agenda: <strong>Cópia da Nutricionista Valéria Furchi<strong></h6>
            </div>
            <!--
            <button style='margin-right:2px' class='btn-sm btn-raised btn-secondary unblock' onclick="unblock()">Desbloquear</button>
            <button style='margin-right:2px' class='btn-sm btn-raised btn-danger block' onclick="block()">Bloquear</button>-->
            <div id="calendar-container">
                <div id="calendar" class="fc fc-ltr fc-unthemed">
                    <div class="fc-toolbar fc-header-toolbar row col-lg-12">
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both">
        </div>
        <br>
        <div id="err_msg">
        </div>
    </div>
</div>