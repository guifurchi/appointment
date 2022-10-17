<div class="main-content">
    <div class="content-wrapper">
        <section id="icon-tabs" class="container">
            <div class="row">
                <div class="col-sm-12">
                    <br>
                        <div class="content-header">Incluir Novo Agendamento
                    <br>
                </div>
                    <p>Use essa tela para incluir um agendamento. Essa tela só é acessível para administradores da agenda.</p>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div id="err_msg">
                            <h4></h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="post" enctype="multipart/form-data" onsubmit="loading()" data-gtm-form-interact-id="0">
                                    <input type="hidden" name="csrfmiddlewaretoken" value="4LdCwZUS1inNJVbAUgSX3j7baPfRW5RkvlYNavDwnWb2W4NzYmiw2Sj8q3qJSHBn">
                                <!-- Step 2 -->
                                
                                    <h6>Dados do Agendamento</h6>
                                    <div>
                                        <label for="id_agenda">Agenda:</label> 
                                        <select name="agenda" class="form-control" required="" id="id_agenda" data-gtm-form-interact-field-id="0">
                                            <option value="" selected="">Escolha a Agenda</option>
                                            <option value="2176">Nutricionista Valéria Furchi</option>
                                        </select>
                                    </div>
                                    <div id="form_agenda" class='mt-2'>
                                        <div class="card-header">
                                            <h6>Instruções para Agendamento</h6>
                                            <p>Agendamento para a nutricionista Valéria Furchi</p>
                                        </div>
                                        <div class='mt-2'>
                                            <label for="id_pass_agenda">Senha para Agendamento:</label> 
                                            <input type="text" name="pass_agenda" maxlength="15" class="form-control" required="" id="id_pass_agenda" data-gtm-form-interact-field-id="1">
                                        </div>
                                        <div class='mt-2'>
                                            <label for="id_event_type_0">Tipo de evento:</label> 
                                        </div>
                                        <div>
                                            <label for="id_event_type_0">
                                                <input type="radio" name="event_type" value="video" required="" id="id_event_type_0" data-gtm-form-interact-field-id="2">
                                                Videoconferência
                                            </label>
                                        </div>
                                        <div>
                                            <label for="id_event_type_1">
                                                <input type="radio" name="event_type" value="local" required="" id="id_event_type_1">
                                                Presencial
                                            </label>
                                        </div>
                                        <div class='mt-2'>
                                            <label for="id_dia">Dia:</label> 
                                            <select name="dia" class="form-control" id="id_dia" data-gtm-form-interact-field-id="3">
                                                <option value="">---------</option>
                                                <option value="1210922">13-10-2022, Qui</option>
                                                <option value="1210943">14-10-2022, Sex</option>
                                            </select>
                                        </div>
                                        <div class='mt-2'>
                                            <label for="id_hora">Horário:</label> 
                                            <select name="hora" class="form-control" id="id_hora">
                                                <option value="">---------</option>
                                                <option value="1210922">08:00</option>
                                                <option value="1210977">09:00</option>
                                            </select>
                                        </div>
                                        <div class='mt-2'>
                                            <label for="id_client_text">Use esse campo para enviar uma mensagem para a pessoa que vai realizar seu atendimento:</label> 
                                            <textarea name="client_text" cols="40" rows="2" class="form-control" id="id_client_text"></textarea> 
                                            <span class="helptext">Inclua informações importantes, por exemplo, se você precisa de algum auxílio especial ou detalhes que possam agilizar o atendimento</span>
                                            <input type="hidden" name="servico" id="id_servico">
                                        </div>
                                        <!--
                                        <label>Recorrência</label>
                                        <br>
                                        <small>Repertir o agendamento toda...</small>
                                        <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">  
                                            <label class="checkbox-label-container">
                                                <input type="checkbox" value="1" name="weekdays">
                                                <span class="checkmark"></span>
                                                <b> Seg </b>
                                            </label>
                                        </div>
                        
                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">  
                                            <label class="checkbox-label-container">
                                                <input type="checkbox" value="2" name="weekdays">
                                                <span class="checkmark"></span>
                                                <b> Ter </b>
                                            </label>
                                        </div>
                                        
                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">  
                                            <label class="checkbox-label-container">
                                                <input type="checkbox" value="3" name="weekdays">
                                                <span class="checkmark"></span>
                                                <b> Qua </b>
                                            </label>
                                        </div>
                                        
                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">  
                                            <label class="checkbox-label-container">
                                                <input type="checkbox" value="4" name="weekdays">
                                                <span class="checkmark"></span>
                                                <b> Qui </b>
                                            </label>
                                        </div>
                                        
                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">  
                                            <label class="checkbox-label-container">
                                                <input type="checkbox" value="5" name="weekdays">
                                                <span class="checkmark"></span>
                                                <b> Sex </b>
                                            </label>
                                        </div>
                                        
                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">  
                                            <label class="checkbox-label-container">
                                                <input type="checkbox" value="6" name="weekdays">
                                                <span class="checkmark"></span>
                                                <b> Sáb </b>
                                            </label>
                                        </div>
                                        
                                        <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">  
                                            <label class="checkbox-label-container">
                                                <input type="checkbox" value="7" name="weekdays">
                                                <span class="checkmark"></span>
                                                <b> Dom </b>
                                            </label>
                                        </div>
                                        </div>
                                        <small>...até o dia</small>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Data Final</label>
                                                <b>
                                                    <input type="text" name="max_date" data-mask="00/00/0000" format="%d/%m/%Y" placeholder="dd/mm/aaaa" class="form-control" id="id_max_date">
                                                </b>
                                            </div>
                                        </div>
                                        -->
                                    </div>
                                    <!--
                                    <label>Recorrência</label><br>
                                    <small>Repertir o agendamento toda...</small>
                                    <div class="row">
                                        
                                    </div>
                                    <small>...até o dia</small>
                                    <div class="row">
                                    <div class="col-md-3">
                                        <label>Data Final</label>
                                        
                                        <b></b>
                                    </div>
                                    
                                    </div>
                                    <small>A recorrência só funcionará para os dias que já estão abertos na agenda</small>
                                    <br><br>-->
                                
                                    <!--
                                    <label>Busca de Cliente</label><br>
                                    <div class="input-group col-md-8">
                                        <input type="text" name="search" id="search" class="form-control" placeholder="Busque por Nome, CPF (somente números), Email ou Telefone. Informe no mínimo 5 caracteres" minlength="5">
                                        <div class="input-group-append">
                                            <a class="btn btn-raised btn-primary" onclick="find_person()">Buscar</a>
                                        </div>
                                        <div class="form-group" hidden="true">
                                        <label>Id da Pessoa</label>
                                            <input type="number" class="form-control" id="person_id" name="person_id">
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <table class="table table-responsive-sm text-center" id="result_table"></table>
                                    </div>
                                    -->
                                    <div id="form_dados" class='mt-2'>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
                                        <h6>Dados Pessoais do Cliente</h6>
                                        <div class='mt-2'>
                                            <label class="required" for="id_name">Nome Completo:</label> 
                                            <input type="text" name="name" maxlength="200" minlength="6" class="form-control" required="" id="id_name"></div>
                                        <div class='mt-2'>
                                            <label for="id_email">E-mail:</label> 
                                            <input type="email" name="email" maxlength="254" class="form-control" id="id_email"></div>
                                        <div class='mt-2'>
                                            <label for="id_old_phone">Telefone:</label> 
                                            <input type="text" name="old_phone" data-mask="(00) 00000-0000" maxlength="15" minlength="14" class="form-control" id="id_old_phone" autocomplete="off">
                                            <input type="hidden" name="cpf" id="id_cpf"><input type="hidden" name="gender" id="id_gender">
                                            <input type="hidden" name="select_marital_status" id="id_select_marital_status"></div>

                                            <script>
                                            $(document).ready(function() {
                                            $("input[type='file']").on("change", function () {
                                                if(this.files[0].size > 2000000) {
                                                alert("Por favor selecione um arquivo com no máximo 2MB. Obrigado!!");
                                                $(this).val('');
                                                }
                                                });
                                            })
                                            </script>
                                    </div>
                                    <div class='mt-2'>
                                        <input class="form" id="enviar_email" name="enviar_email" type="checkbox">Enviar confirmação por e-mail.
                                    </div>
                                    <div class='mt-2'>
                                        <input class="form" id="incluir_regras" name="incluir_regras" type="checkbox" checked="">Incluir este agendamento em suas regras de notificações.
                                        <small class="form-text text-muted">Verifique o preenchimento do e-mail e telefone para envio das notificações</small>
                                    </div>
                                    <div class='mt-2'>
                                        <input class="form" id="enviar_sms" name="enviar_sms" type="checkbox" onclick="return false;">Enviar confirmação por SMS.
                                        <small class="form-text text-muted">O envio automático de SMS está desabilitado no seu plano.</small>
                                    </div class='mt-2'>
                                    <div class="col-lg-6 col-md-12">
                                        <label id="sup_info" value="sup_info"></label>
                                    </div class='mt-2'>
                                        <div class="col-lg-6 col-md-12">
                                        <label id="label_text" value="label_text"></label>
                                        <input type="text" class="form-control" id="sup_text" name="sup_text" value="" style="display: none;">
                                    </div class='mt-2'>
                                        <button class="btn btn-raised btn-raised btn-primary" type="submit">Concluir</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>