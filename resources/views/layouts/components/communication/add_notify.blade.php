<div class="main-content">
            <div class="content-wrapper">

                    <!--<script src="https://arquivos.eagenda.com.br/static/js/jquery-3.4.1.js?v32b"></script>-->
                    <script src="https://arquivos.eagenda.com.br/static/app-assets/vendors/js/core/jquery-3.6.0.min.js?v32b" type="text/javascript"></script>
                    <input type="hidden" name="csrfmiddlewaretoken" value="lq1W0SU3uap1MoHTWBDrThBPz5OyXXIRM0M7EoDHQOdgZxjS0H30SQNMPjZqTzsU">
                    <script>
                      const csrftoken = document.querySelector('[name=csrfmiddlewaretoken]').value;
                    </script>
                    

                   

<section id="icon-tabs">
  <div class="row">
    <div class="col-sm-12">
    <div class="content-header">Nova Regra de Notificação</div>
    </div>
    <div class="col-6" style="width:100%">
      <div class="card">
        <div class="card-header">
        </div>
        <div class="card-content">
          <div class="card-body">
            <h4 id="err_msg"></h4>

            <br>
            <form method="POST" class="post-form"><input type="hidden" name="csrfmiddlewaretoken" value="lq1W0SU3uap1MoHTWBDrThBPz5OyXXIRM0M7EoDHQOdgZxjS0H30SQNMPjZqTzsU">
              <label>As regras de envio funcionam com base no horário do agendamento. Você pode configurar envios antes ou após o horário agendado e restringir o envio conforme a situação do agendamento.</label>
                

<div id="div_id_title" class="form-group"> <label for="id_title" class=" requiredField">
                Nome da Regra<span class="asteriskField">*</span> </label> <div> <input type="text" name="title" maxlength="50" class="textinput textInput form-control" required="" id="id_title"> </div> </div> <div class="form-group"> <div id="div_id_is_all_agendas" class="form-check"> <input type="checkbox" name="is_all_agendas" class="checkboxinput form-check-input" id="id_is_all_agendas"> <label for="id_is_all_agendas" class="form-check-label">
                    Aplicar a regra em todas as agendas
                </label> </div> </div> <div id="div_id_agendas" class="form-group"> <label for="id_agendas" class="">
                Agendas
            </label> <div> <select name="agendas" class="selectmultiple form-control select2-hidden-accessible" id="id_agendas" multiple="" data-select2-id="select2-data-id_agendas" tabindex="-1" aria-hidden="true"> <option value="2226">Cópia da Nutricionista Valéria Furchi</option> <option value="2176">Nutricionista Valéria Furchi</option>

</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-0cof" style="width: 554.5px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-id_agendas-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-id_agendas-container" placeholder="" style="width: 0.75em;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> </div> </div> <div id="div_id_notification_type" class="form-group"> <label for="id_notification_type" class=" requiredField">
                Forma de Envio<span class="asteriskField">*</span> </label> <div> <select name="notification_type" class="select form-control" required="" id="id_notification_type"> <option value="" selected="">Escolha uma forma de envio</option> <option value="sms">SMS</option> <option value="email">Email</option>

</select> </div> </div> <div id="div_id_sms_text" class="form-group"> <label for="id_sms_text" class="">
                Texto de envio via SMS
            </label> <div> <textarea name="sms_text" cols="40" rows="10" maxlength="160" class="textarea form-control" id="id_sms_text">{nome}, seu agendamento foi confirmado!{agenda}, dia {dia}, {hora}</textarea> <small id="hint_id_sms_text" class="form-text text-muted">Use como variáveis os dados do agendamento: {nome}, {agenda}, {dia}, {hora}</small> </div> </div> <div id="div_id_email_template" class="form-group" style="display: none;"> <label for="id_email_template" class="">
                Modelo do email
            </label> <div> <select name="email_template" class="select form-control" id="id_email_template"> <option value="" selected="">---------</option> <option value="1">Mensagem Agradecimento</option> <option value="2">Clube LInha Verde</option> <option value="3">Esmalteria Donabela</option> <option value="4">Notificação de Agendamento</option> <option value="5">Clincorje Serviços Médicos</option> <option value="6">DMR Advogados</option> <option value="7">RAFAEL DE ALMEIDA ARAUJO</option> <option value="8">Luana Karla</option> <option value="9">Pós atendimento - Dinamo Motos</option> <option value="10">EMAIL DE CONFIRMAÇÃO DE AGENDAMENTO</option> <option value="11">CALL MABI - Vanessa Bueno</option>

</select> </div> </div> <div id="div_id_att_type" class="form-group"> <label for="id_att_type" class=" requiredField">
                Notificação antes ou após o horário agendado<span class="asteriskField">*</span> </label> <div> <select name="att_type" class="select form-control" required="" id="id_att_type"> <option value="" selected="">---------</option> <option value="confirmed">Após a Confirmação do Agendamento</option> <option value="before">Antes do Horário Agendado</option> <option value="after">Após o Horário Agendado</option>

</select> </div> </div> <div id="div_id_before_filter" class="form-group" style="display: none;"> <label for="id_before_filter" class="">
                Filtro de Status
            </label> <div> <select name="before_filter" class="select form-control" id="id_before_filter"> <option value="" selected="">---------</option> <option value="CONFIRMADO">Agendamentos Confirmados</option> <option value="PENDENTE">Agendamentos Aguardando Confirmação</option>

</select> </div> </div> <div id="div_id_after_filter" class="form-group"> <label for="id_after_filter" class="">
                Filtro de Status
            </label> <div> <select name="after_filter" class="select form-control" id="id_after_filter"> <option value="" selected="">---------</option> <option value="ATENDIDO">Atendimento Realizado</option> <option value="ATEND_OR_CONF">Agendamentos com status de CONFIRMADO ou ATENDIDO</option> <option value="NO_SHOW">Atendimento Não-Realizado</option>

</select> </div> </div> <div id="div_id_dias" class="form-group"> <label for="id_dias" class=" requiredField">
                Dias<span class="asteriskField">*</span> </label> <div> <input type="number" name="dias" min="0" max="180" class="numberinput form-control" required="" id="id_dias"> </div> </div> <div id="div_id_horas" class="form-group"> <label for="id_horas" class=" requiredField">
                Horas<span class="asteriskField">*</span> </label> <div> <input type="number" name="horas" min="0" max="23" class="numberinput form-control" required="" id="id_horas"> </div> </div> <div id="div_id_minutos" class="form-group"> <label for="id_minutos" class=" requiredField">
                Minutos<span class="asteriskField">*</span> </label> <div> <input type="number" name="minutos" min="0" max="60" class="numberinput form-control" required="" id="id_minutos"> </div> </div>

                <br>
                <button type="submit" class="btn btn-raised btn-raised btn-primary">Salvar</button>
                <a href="/communications/notify" class="btn btn-outline-secondary" role="button">Voltar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script>

     selected_sub_type = [];

     function select_subtype(id,event){
        if(event.target.checked){
            selected_sub_type.push(id);
        }
        else
        {
            selected_sub_type = arrayRemove(selected_sub_type, id);
        }

        $("#subtypes").val(selected_sub_type)
     }

     function arrayRemove(arr, value) {
        return arr.filter(function(ele){
            return ele != value;
        });
     }

</script>



            </div>
          </div>