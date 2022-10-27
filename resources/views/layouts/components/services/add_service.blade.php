    <div class="main-content">
      <div class="content-wrapper">
        <section id="icon-tabs" data-select2-id="select2-data-icon-tabs">
          <div class="row">
            <div class="col-sm-12">
              <div class="content-header">Incluir novo serviço
              </div>
            </div>
            <div class="col-12" style="width:100%" data-select2-id="select2-data-9-623j">
              <div class="card" data-select2-id="select2-data-8-vvtd">
                <div class="card-content">
                  <div class="card-body"><div id="err_msg"></div>

                    <form method="post" action="@if(isset($services)) /services/update/{{$services->id}} @else /services/create/{{$_SESSION['id']}} @endif">
                      @csrf
                      <div class="form-body" data-select2-id="select2-data-7-yj2i">
                        <h4 class="form-section"><i class="icon-lock"></i>Dados do Serviço</h4>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="s_name">Nome do Serviço:</label>
                              <input value="@if(isset($services)){{$services->s_name}}@endif" type="text" name="s_name" maxlength="250" id="s_name" class="form-control " data-gtm-form-interact-field-id="0" required>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="s_value">Valor do Serviço:</label>
                              <input value="@if(isset($services)){{$services->s_value}}@endif" type="number" name="s_value" step="0.01" id="s_value" class="form-control " data-gtm-form-interact-field-id="1" required>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="s_showValuesToCustomers">Mostrar valor do serviço para os clientes:</label>
                              <input type="checkbox" name="s_showValuesToCustomers" id="s_showValuesToCustomers" value="Sim" class="custom-checkbox" @if((isset($services->s_showValuesToCustomers) == 's')){{'checked'}}@endif >
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="s_paymentLink">Caso você faça cobrança por link de pagamento, pode incluir o link aqui para o cliente já fazer o pagamento:</label>
                              <input value="@if(isset($services)){{$services->s_paymentLink}}@endif" type="text" name="s_paymentLink" maxlength="2000" id="s_paymentLink" class="form-control " >
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="s_serviceTime">Duração do Atendimento:</label>
                              <select name="s_serviceTime" id="s_serviceTime" class="form-control " data-gtm-form-interact-field-id="3" required>
                                @if(isset($services->s_serviceTime) != null)
                                <option value="{{$services->s_serviceTime}}" selected>{{$services->s_serviceTime}}</option>
                                <option value="">-----------</option>
                                @endif
                                <option value="0:05:00">00:05</option>
                                <option value="0:10:00">00:10</option>
                                <option value="0:15:00">00:15</option>
                                <option value="0:20:00">00:20</option>
                                <option value="0:30:00">00:30</option>
                                <option value="0:40:00">00:40</option>
                                <option value="0:45:00">00:45</option>
                                <option value="0:50:00">00:50</option>
                                <option value="1:00:00">01:00</option>
                                <option value="1:15:00">01:15</option>
                                <option value="1:30:00">01:30</option>
                                <option value="1:45:00">01:45</option>
                                <option value="2:00:00">02:00</option>
                                <option value="2:30:00">02:30</option>
                                <option value="3:00:00">03:00</option>
                                <option value="4:00:00">04:00</option>
                                <option value="5:00:00">05:00</option>
                                <option value="6:00:00">06:00</option>
                                <option value="7:00:00">07:00</option>
                                <option value="8:00:00">08:00</option>
                                <option value="9:00:00">09:00</option>
                                <option value="10:00:00">10:00</option>
                                <option value="11:00:00">11:00</option>
                                <option value="12:00:00">12:00</option>
                              </select>
                            </div>
                          </div>

                          <!--
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="id_max_people_subtype">Número de pessoas que podem agendar um mesmo horário neste serviço:</label>
                              <input type="number" name="max_people_subtype" min="1" id="id_max_people_subtype" class="form-control ">
                            </div>
                          </div>
                           -->

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="s_instruction">Texto com instruções exibidas na tela de confirmação do agendamento e no e-mail de confirmação:</label>
                              <textarea value="" name="s_instruction" cols="40" rows="10" maxlength="2000" id="id_texto_pos_agendamento" class="form-control ">@if(isset($services)){{$services->s_instruction}}@endif</textarea>
                            </div>
                          </div>

                          <!--
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="id_b_all_agendas">Vincular Serviço em Todas as Agendas:</label>
                              <input type="checkbox" name="b_all_agendas" id="id_b_all_agendas" class="custom-checkbox" data-gtm-form-interact-field-id="4">
                            </div>
                          </div>
                        </div>
                        -->

                        <!--
                        <h4 class="form-section"><i class="icon-link"></i>Agendas Vinculadas</h4>
                        <div class="row" data-select2-id="select2-data-6-awk7">
                          <div class="col-md-12" data-select2-id="select2-data-5-n45e">
                            <div class="form-group">
                              <label for="id_agendas">Agendas:</label>
                              <select name="agendas" id="id_agendas" data-autocomplete-light-language="pt-BR" data-autocomplete-light-url="/autocomplete/calendar" data-autocomplete-light-function="select2" multiple="" class="form-control  select2-hidden-accessible" data-select2-id="select2-data-id_agendas" tabindex="-1" aria-hidden="true">
                              </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="select2-data-1-yefo" style="width: 1184px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-id_agendas-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-id_agendas-container" placeholder="" style="width: 0.75em;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                          </div>
                        </div>
                        <h4 class="form-section"><i class="icon-link"></i>Tags Vinculadas</h4>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="id_tags">Tags:</label>
                                <select name="tags" id="id_tags" data-autocomplete-light-language="pt-BR" data-autocomplete-light-url="/autocomplete/tags" data-autocomplete-light-function="select2" multiple="" class="form-control  select2-hidden-accessible" data-select2-id="select2-data-id_tags" tabindex="-1" aria-hidden="true">
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-q3qy" style="width: 1184px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-id_tags-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-id_tags-container" placeholder="" style="width: 0.75em;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                              </div>
                            </div>
                          </div>

                        <h4 class="form-section"><i class="icon-link"></i>Usuários Vinculados</h4>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="id_members">Usuários:</label>
                                <select name="members" id="id_members" data-autocomplete-light-language="pt-BR" data-autocomplete-light-url="/autocomplete/members" data-autocomplete-light-function="select2" multiple="" class="form-control  select2-hidden-accessible" data-select2-id="select2-data-id_members" tabindex="-1" aria-hidden="true">
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-3-qxsq" style="width: 1184px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-id_members-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-id_members-container" placeholder="" style="width: 0.75em;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                              </div>
                            </div>
                          </div>
                      </div>
                        -->
                      
                      <button type="submit" class="btn btn-success">@if(isset($services)) Alterar @else Salvar @endif</button>
                      <a href="/services" class="btn btn-outline-secondary" role="button">Voltar</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
