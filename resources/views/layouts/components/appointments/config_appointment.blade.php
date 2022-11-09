<style>
.add_time{
  float:center;
  color:green;
  cursor:pointer;
}
.remove_time{
  float:center;
  color:red;
  cursor:pointer;
}
</style>

<script type="text/javascript">
//var appointment_config = {"id": 2228, "att_time": [{"id": 21574, "week_day": "0", "opening_time": "08:00:00", "closing_time": "17:00:00", "max_people": 1, "organization": 1957}, {"id": 21575, "week_day": "1", "opening_time": "08:00:00", "closing_time": "17:00:00", "max_people": 1, "organization": 1957}, {"id": 21576, "week_day": "2", "opening_time": "08:00:00", "closing_time": "17:00:00", "max_people": 1, "organization": 1957}, {"id": 21577, "week_day": "3", "opening_time": "08:00:00", "closing_time": "17:00:00", "max_people": 1, "organization": 1957}, {"id": 21578, "week_day": "4", "opening_time": "08:00:00", "closing_time": "17:00:00", "max_people": 1, "organization": 1957}], "att_slot_interval": "00:00:00", "att_interval": "01:00:00", "att_minimum_ante": "04:00:00", "cancel_minimum_time": "1 00:00:00", "busDays_minimum_ante": false, "att_max_time": "30 08:00:00", "national_holiday": true, "state_holiday": true, "state_holiday_uf": null, "data_inicio": null, "data_fim": null, "organization": {"id": 1957, "label": "guila", "name": "Guilherme Furchi", "website": null, "email": null, "organization_id": null, "contract_date": "2022-10-07T14:17:02.843583Z", "update_date": "2022-10-07T14:17:02.843605Z", "phone": null, "whatsapp": null, "url_domain": null, "mensagem": null, "api_key": null, "fuso_horario": "America/Sao_Paulo", "imagem": null, "email_inicial": true, "pagina_completa": true, "appointment_type_label": null, "appointment_sub_type_label": null, "isActive": true, "contact_phone": "92981882726", "address": null, "plan": {"id": 1, "name": "Plano Teste", "value": "0.00", "short_description": "Plano Teste", "is_active": true, "is_listed": true, "is_demo": true, "is_free": false, "limite_appointments": 100, "limite_usuarios": 2, "limite_unidades": 2, "limite_contas": 1, "prazo_agendamento": 90, "prazo_historico": 90, "envio_confirmacoes_email": true, "google_agenda": true, "incluir_acompanhantes": false, "agendamento_recorrente": true, "anuncios": true, "imagem": true, "pesquisa": false, "plan_id": null, "public": true, "privacy": true, "daily_report": false, "is_partner": false, "base_plan": null, "products_included": []}, "payments": []}, "appointment_type": {"id": 2226, "label": "C\u00f3pia da Nutricionista Val\u00e9ria Furchi", "slug": null, "desc": "Agendamento para a nutricionista Val\u00e9ria Furchi", "color": "#48CFAE", "text_color": "#48CFAE", "google_agenda_id": null, "google_sync_token": null, "b_confirmar": true, "b_isActive": true, "b_isPrivate": false, "intern_use": false, "max_people": 1, "b_att_simultaneo": false, "auto_mode": true, "b_notify": true, "b_notify_email": true, "b_email_client": true, "b_waitinglist": false, "send_sms": false, "request_cpf": false, "request_address": false, "request_email": true, "request_telefone": true, "request_genero": false, "request_data_nascimento": false, "request_doc_id": false, "request_nacionalidade": false, "request_place_of_birth": false, "request_profession": false, "request_pep": false, "min_age": null, "max_age": null, "video": true, "is_hybrid": true, "user_limit": true, "att_local": true, "b_solicita_add": true, "b_recorrencia": false, "b_multiple_people": false, "b_acc_people": false, "confirmed_email_txt": "Ol\u00e1, voc\u00ea fez seu agendamento conosco, obrigado!", "cancelled_email_txt": "Ol\u00e1, seu agendamento foi cancelado, obrigado!", "after_att_email_txt": null, "email_cc": "guifurchi65@gmail.com", "pass_agenda": "12345", "imagem": "https://arquivos.eagenda.com.br/media/img_agendas/img_1957/logo.png", "organization": {"id": 1957, "label": "guila", "name": "Guilherme Furchi", "website": null, "email": null, "organization_id": null, "contract_date": "2022-10-07T14:17:02.843583Z", "update_date": "2022-10-07T14:17:02.843605Z", "phone": null, "whatsapp": null, "url_domain": null, "mensagem": null, "api_key": null, "fuso_horario": "America/Sao_Paulo", "imagem": null, "email_inicial": true, "pagina_completa": true, "appointment_type_label": null, "appointment_sub_type_label": null, "isActive": true, "contact_phone": "92981882726", "address": null, "plan": 1, "payments": []}, "address": null, "owner_user": {"id": 2113, "type_member": null, "is_owner": false, "is_manager": true, "is_active": true, "is_locked": false, "user": 22638, "organization": 1957, "tags": [], "services": []}, "sub_types": [], "documents_type": [], "textos_adicionais": [], "member_access": []}};
function create_array_stype(){
  selected_sub_type = []; 
}
function init_subtype(id){
selected_sub_type.push(id);
$("#subtypes").val(selected_sub_type)  
}
</script>

<div class="main-content">
  <div class="content-wrapper">
    <section>
        <div class="card" style="width:100%">
          <div class="card-header" id="err_msg">
          </div>
          <div class="card-content">
            <div class="card-body">
              <form class="form" method="post" action="<?= isset($appointments) ? "/appointments/update/{$appointments->id}" : "/appointments/create/{$_SESSION['id']}" ?>">
              @csrf
                <div class="form-body">
                  <h4 class="form-section"><i class="icon-list-alt"></i>Configurações Gerais</h4>

                    <div class="row">
                      <div class="col-md-6 ms-2">
                        <div class="form-group ">
                          <label for="id_label">Nome da Agenda:</label>
                          <input type="text" name="name" value="<?= isset($appointments) ? $appointments->name : ''?>" maxlength="250" class="form-control" id="id_label">
                        <!--<div>Esse é o nome que aparece para o cliente no momento do agendamento. Dica: use o nome do profissional que atende essa agenda ou um nome mais geral. Dentro de cada agenda podem ser incluídos vários serviços</div>-->
                        </div>
                      </div>
                    </div>
                    
                    <!--
                    <div class="row"> 
                      <div class="col-md-6 ms-2">
                        <div class="form-group">
                            <label for="id_slug">Nome para o link de agendamento:</label>
                          <input type="text" name="slug" maxlength="250" class="form-control" id="id_slug">
                          <div>https://qagenda.com.br/agenda/&lt;nome_link&gt;</div>
                        </div>
                      </div>
                    </div>
                    -->
                <!--<h5>A seguir, informe se o atendimento é on-line, presencial ou flexível. Se for online, você pode pesquisar sobre a integração com o Google Meet <a href="https://mupisystems.com.br/2022/02/28/integracao-com-google-agenda-e-meet" target="_blank">aqui</a>. Se for presencial, informe se o atendimento é no seu endereço ou no endereço do cliente. Caso o atendimento possa ser presencial ou online (o cliente escolhe no momento do agendamento), selecione a opção de atendimento por videoconferência e, após, selecione atendimento "flexível".</h5>-->
                  <div class="row mt-2">
                    <div class="col-md-6 ms-2">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" onclick="change_video(event)" name="presential" id="id_presential" <?= isset($appointments) && $appointments->presential == 'on' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="id_presential"><label for="id_presential">Atendimento Presencial:</label></label>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-md-6 ms-2">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" onclick="change_video(event)" name="video" id="id_video" <?= isset($appointments) && $appointments->video == 'on' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="id_video"><label for="id_video">Atendimento Remoto (video conferência):</label></label>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-2" id="att_video_select">
                    <div class="col-md-3 ms-2">
                      <label>Plataforma de Videoconferência:</label>
                      <select name="video_provider" id="id_video_provider" class="form-control">
                        @if(isset($appointments) && $appointments->video_provider != '')
                        <option value="{{$appointments->video_provider}}" selected >{{$appointments->video_provider}}</option>
                        @endif
                        <option value="" >---------</option>
                        <option value="Google Meet" >Google Meet</option>
                        <option value="Microsoft Teams">Microsoft Teams</option>
                        <option value="zoom">Zoom</option>
                        <option value="other">Outros</option>
                      </select>
                      <span class="help-block"></span>
                    </div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-md-12 ms-2"><br>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" name="is_hybrid" id="id_is_hybrid" <?= isset($appointments) && $appointments->is_hybrid == 'on' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="id_is_hybrid">
                          <label for="id_is_hybrid">Flexível:</label>
                        </label>
                      </div>
                      <small class="help-block">(Caso o próprio usuário escolha o modelo de atendimento durante o atendimento)</small>
                    </div>
                  </div>
                  
                  <div class="row mt-2">
                    <div class="col-md-12 ms-2">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" name="att_local" id="id_att_local" <?= isset($appointments) && $appointments->att_local == 'on' ? 'checked' : '' ?> >
                        <label class="form-check-label" for="id_att_local">
                          <label for="id_att_local">Atendimento em domicílio:</label>
                        </label>
                      </div>
                      <!--<small>Caso você realize o atendimento no endereço do cliente.</small>-->
                    </div>
                  </div>
                  
                  <!--
                  <h5>Informe a quantidade de pessoas que são atendidas simultaneamente. Por exemplo, se você estiver configurando o agendamento de aulas em grupo, indique o número máximo de alunos por horário. Se o atendimento for individual, mas há várias pessoas atendendo, você pode configurar por exemplo o atendimento para 5 pessoas a cada 15min.</h5>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>
                          <label for="id_max_people">Número máximo de pessoas em um mesmo horário:</label>
                        </label>
                        <input type="number" name="max_people" value="1" min="1" class="form-control" required="" id="id_max_people">
                      </div>
                    </div>
                  </div>
                  <br>
                -->
                <!--
                  <div class="row">
                    <div class="col-md-12 ms-2">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" name="b_att_simultaneo" id="id_b_att_simultaneo">
                        <label class="form-check-label" for="id_b_att_simultaneo"><label for="id_b_att_simultaneo">Atendimento para Grupos:</label></label>
                        <div>Selecione essa opção se o modelo de atendimento é de uma pessoa atendendo vários clientes ao mesmo tempo. Ex: aulas, treinos, entrevistas, etc</div>
                      </div>
                    </div>
                  </div>
                  <br>
                -->
                <!--
                  <div class="row">
                    <div class="col-md-12 ms-2">
                      <div class="form-check form-switch">
                        <input type="checkbox" name="b_waitinglist" class="custom-control-input" disabled="" id="id_b_waitinglist">
                        <label class="form-check-label" for="id_b_waitinglist"><label for="id_b_waitinglist">Habilitar Lista de Espera:</label></label>
                        <div>Caso habilitada, é possível se inscrever em uma lista de espera para os horários que já estão ocupados. É necessário ter um plano de assinatura.</div>
                      </div>
                    </div>
                  </div>
                  <br>
                -->
                  <div class="row mt-2">
                    <div class="col-md-12 ms-2">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" name="b_confirmar" id="id_b_confirmar" <?= isset($appointments) && $appointments->b_confirmar == 'on' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="id_b_confirmar">
                          <label for="id_b_confirmar">Confirmação de appointments:</label></label>
                      </div>
                      <small>(Caso os appointments precisarem ser confirmados pelo administrador da agenda)</small>
                    </div>
                  </div>
                  
                  <!--
                  <div class="row">
                    <div class="col-md-12 ms-2">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" name="intern_use" id="id_intern_use">
                        <label class="form-check-label" for="id_intern_use"><label for="id_intern_use">Bloquear agenda para acesso pelo link de agendamento:</label></label>
                        <div>Se essa opção estiver marcada, a agenda não ficará disponível para agendamento externo e somente o administrador da agenda poderá incluir appointments</div>
                      </div>
                    </div>
                  </div>
                  <br>
                -->
                  <!--
                  <div class="row">
                    <div class="col-md-12 ms-2">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" name=user_limit id=id_user_limit checked>
                        <label class="form-check-label" for=id_user_limit><label for="id_user_limit">Permitir Múltiplos appointments:</label></label>
                        <div>Marque essa opção para permitir que um usuário possa fazer mais de um agendamento para o mesmo dia</div>
                      </div>
                    </div>
                  </div>
                  <br>-->
                  <!--
                  <div class="row">
                    <div class="col-md-12 ms-2">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" name="b_acc_people" id="id_b_acc_people" onclick="return false;">
                        <label class="form-check-label" for="id_b_acc_people"><label for="id_b_acc_people">Permitir Inclusão de Acompanhantes:</label></label>
                        <div>Marque essa opção para permitir a inclusão de até 3 acompanhantes em um mesmo agendamento. No momento, essa funcionalidade só está disponível em alguns planos.</div>
                      </div>
                    </div>
                  </div>
                  <br>
                -->

                  <div class="row mt-2">
                    <div class="col-md-12 ms-2">
                      <div class="form-group">
                        <label for="id_pass_agenda">Senha para Agendamento:</label>
                          <input type="text" name="pass_agenda" value="<?= isset($appointments) ? $appointments->pass_agenda : ''?>" maxlength="15" class="form-control col-md-2" id="id_pass_agenda">
                          <small>Opcional (Somente os clientes que tiverem essa senha podem fazer o agendamento. Deixe o campo em branco para permitir agendamento sem senha)</small>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-md-12 ms-2">
                      <div class="form-group">
                        <label>Prazo para Cancelamento (em horas)</label>
                            <input type="number" name="cancel_minimum_time_aux" value="<?= isset($appointments) ? $appointments->cancel_minimum_time_aux : ''?>" class="form-control col-md-2" id="id_cancel_minimum_time_aux">
                        <span class="help-block"><small>Prazo máximo para que uma pessoa possa cancelar o agendamento pelo sistema. Se for informado 0, é possível cancelar o agendamento a qualquer momento.</small></span>
                      </div>
                    </div>
                  </div>

                  <!--
                  <div class="row mt-2">
                    <div class="col-md-12 ms-2">
                      <div class="form-group">
                        <label>Imagem Destacada da Agenda</label>
                        <div class="col-md-3">Atualmente: <a href="https://arquivos.eagenda.com.br/media/img_agendas/img_1957/logo.png">img_agendas/img_1957/logo.png</a>
                          <input type="checkbox" name="imagem-clear" id="imagem-clear_id">
                          <label for="imagem-clear_id">Limpar</label><br>
                            Modificar:
                          <input type="file" name="imagem" accept="image/*" class="form-control" id="id_imagem"></div>
                        <span class="help-block"><small>Essa imagem é exibida na tela inicial de agendamento. Recomendamos uma imagem no formato 600x350</small></span>
                      </div>
                    </div>
                  </div>
                  -->
                  <!--
                  <div class="row mt-2"> 
                    <div class="col-md-6 ms-2">
                      <div class="form-group">
                        <label>
                          <label for="id_owner_user">Responsável pela Agenda:</label>
                        </label>
                        <select name="owner_user" class="form-control" id="id_owner_user">
                          <option value="">---------</option>
                          <option value="2113" selected="">guifurchi65@gmail.com</option>
                          <option value="2119">valeria@gmail.com</option>
                        </select>
                        <div>Este usuário receberá as notificações de appointments e poderá sincronizar os appointments com sua conta Google, Microsoft ou Zoom</div>
                      </div>
                    </div>
                  </div>
                  -->
                  <h4 class="form-section"><i class="icon-list-alt"></i>Serviços</h4>
                    <div class="card-body table-responsive">
                      <table class="table text-center">
                        <thead>
                          <tr>
                            <th>Selecionar</th>
                            <th>Nome do Serviço</th>
                            <th>Valor do Serviço</th>
                            <th>Duração do serviço</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                            @csrf
                              <tr>
                                <td>
                                  <input type="hidden" name="user_id[]" value="{{$_SESSION['id']}}" id="s_name">
                                  <input type="hidden" name="s_name[]" value="{{$service->s_name}}" id="s_name">
                                  <input type="checkbox" name="service_id[]" value="{{$service->id}};{{$service->s_name}}" id="service_id" <?php if($service->id == $service->s_id){echo 'checked';}?>>
                                </td>
                                <td>{{$service->s_name}}</td>
                                <td>{{$service->s_value}}</td>
                                <td>{{$service->s_serviceTime}}</td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                    <h4 class="form-section"><i class="icon-list-alt"></i>Dados do Cliente</h4>
                      <h6>Configuração do formulário de dados de cadastro do usuário</h6>
                          <p>Escolha quais campos devem ser incluídos no formulário de agendamento. Os campos de e-mail e telefone são recomendados como padrão, porém pelo menos um deles deve ser habilitado. Escolha somente o necessário.</p>
                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="request_email" id="id_request_email" <?= isset($appointments) && $appointments->request_email == 'on' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="id_request_email"></label>Email
                              </div>
                              <small>(recomendado deixar habilitado)</small>
                            </div>
                          </div>

                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="request_telefone" id="id_request_telefone" <?= isset($appointments) && $appointments->request_telefone == 'on' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="id_request_telefone"></label>Telefone
                              </div>
                              <small>(recomendado deixar habilitado)</small>
                            </div>
                          </div>
                          <!--
                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="request_cpf" id="id_request_cpf">
                                <label class="form-check-label" for="id_request_cpf"></label>CPF
                                <div></div>
                              </div>
                            </div>
                          </div>
                            -->
                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="request_data_nascimento" id="id_request_data_nascimento" <?= isset($appointments) && $appointments->request_data_nascimento == 'on' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="id_request_data_nascimento"></label>Data de Nascimento
                              </div>
                            </div>
                          </div>

                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="request_genero" id="id_request_genero" <?= isset($appointments) && $appointments->request_genero == 'on' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="id_request_genero"></label>Gênero
                              </div>
                            </div>
                          </div>
                          
                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="request_profession" id="id_request_profession" <?= isset($appointments) && $appointments->request_profession == 'on' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="id_request_profession"></label>Profissão
                              </div>
                            </div>
                          </div>
                          
                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="request_place_of_birth" id="id_request_place_of_birth" <?= isset($appointments) && $appointments->request_place_of_birth == 'on' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="id_request_place_of_birth"></label>Local de Nascimento
                              </div>
                            </div>
                          </div>
                         
                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="request_nacionalidade" id="id_request_nacionalidade" <?= isset($appointments) && $appointments->request_nacionalidade == 'on' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="id_request_nacionalidade"></label>Nacionalidade
                              </div>
                            </div>
                          </div>
                          
                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="request_doc_id" id="id_request_doc_id" <?= isset($appointments) && $appointments->request_doc_id == 'on' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="id_request_doc_id"></label>Documento de Identificação
                              </div>
                            </div>
                          </div>
                          
                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="request_address" id="id_request_address" <?= isset($appointments) && $appointments->request_address == 'on' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="id_request_address"></label>Endereço
                                <div></div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="b_solicita_add" id="id_b_solicita_add" <?= isset($appointments) && $appointments->b_solicita_add == 'on' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="id_b_solicita_add"></label>Campo de texto livre
                              </div>
                              <small>(Campo de texto livre para o usuário escrever algum comentário para o agendamento)</small>
                            </div>
                          </div>
                          
                          <!--
                          <h5>Precisa de outros campos? Crie um formulário de agendamento clicando <a target="_blank" href="/pesquisas/controle/">aqui</a> e vincule esta agenda. Se você já tem o formulário criado, pode selecionar na lista abaixo</h5>
                          <div class="col-md-6 ms-2">
                            <h5>Formulário de Agendamento</h5>
                            <div class="form-group">
                              <div class="custom-control">
                                  <div class="col-md-6 ms-2 col-lg-6">
                                  <select name="survey" id="survey" class="form-control">
                                    <option value=""></option>
                                    
                                  </select>
                                  </div><br>
                                </div>
                              </div>
                            </div>
                          <br>
                            -->
                          <div class="row mt-4">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>
                                  <label for="id_desc">Informações adicionais ao cliente:</label>
                                </label>
                                <p>
                                  <small>
                                    Se desejar, informe um texto com instruções e informações importantes para o agendamento. Esse texto será exibido na tela de agendamento
                                  </small>
                                </p>
                                <textarea name="desc" cols="40" rows="5" class="form-control" id="id_desc"><?= isset($appointments) ? $appointments->desc : '' ?></textarea>
                              </div>

                            </div>
                        </div>

                  <h4 class="form-section"><i class="icon-list-alt"></i>Notificações</h4>
                  <!--
                  <h5>Atenção! A maioria das configurações abaixo somente se aplicam aos clientes dos planos Básico ou superior</h5>
                  <br>
                  <h5>Integração com o Google Agenda - É necessário uma autorização na conta do Google para que a eAgenda tenha permissão de enviar os appointments automaticamente para o Google Agenda. Clique <a href="/appointments/google_agenda" target="_blank">aqui</a> para fazer o processo de autorização e consultar o id da agenda no google.</h5>
                  <div class="row"> 
                    <div class="col-md-6 ms-2">
                      <div class="form-group">
                        
                        <label><label for="id_google_agenda_id">ID da agenda - Google:</label></label>
                        <input type="text" name="google_agenda_id" maxlength="200" class="form-control" id="id_google_agenda_id">
                        <div></div>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-md-12 ms-2"> 
                      <div class="form-group">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" name="b_notify" id="id_b_notify" checked="">
                        <label class="form-check-label" for="id_b_notify"><label for="id_b_notify">Notificação de novo agendamento:</label></label>
                        <div>Enviar notificação pelo navegador sempre que um novo agendamento for feito nessa agenda. Verifique se você autorizou o envio de notificações clicando no cadeado no canto esquerdo da barra de endereços</div>
                      </div>
                    </div>
                  </div>
                  -->
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12 ms-2"> 
                      <div class="form-group">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" role="switch" name="b_notify_email" id="id_b_notify_email" <?= isset($appointments) && $appointments->b_notify_email == 'on' ? 'checked' : '' ?>>
                          <label class="form-check-label" for="id_b_notify_email"><label for="id_b_notify_email">Notificação de novo agendamento por email:</label></label>
                        </div>
                      </div>
                      <div class="row mt-2"> 
                        <div class="col-md-6 ms-2">
                          <div class="form-group">
                            <label><label for="id_email_cc">Enviar Notificações por Email para:</label></label>
                            <input type="text" name="email_cc" value="<?= isset($appointments) ? $appointments->email_cc : '' ?>" maxlength="200" class="form-control" id="id_email_cc">
                            <small>Enviar notificações por e-mail. Para incluir dois endereços, use o separador de vírgula</small>
                          </div>
                        </div>
                      </div>
                      <!--
                      <h5>Envio de lembrete de agendamento via SMS. Saiba mais sobre como funciona esse serviço clicando <a href="/users/pacote_sms/" target="_blank">aqui</a></h5>
                      <div class="row mt-2">
                        <div class="col-md-12 ms-2"> 
                          <div class="form-group">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" name="send_sms" id="id_send_sms">
                              <label class="form-check-label" for="id_send_sms"><label for="id_send_sms">Enviar SMS:</label></label>
                              <div>Enviar mensagem de lembrete de agendamento</div>
                            </div>
                            </div
                          -->
                          <!--
                          <h5>Texto para envio automático de e-mail de confirmação de agendamento. Já preenchemos automaticamente os dados de agendamento. Você deve incluir informações adicionais que julgar relevantes</h5>
                          <div class="row mt-2">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label><label for="id_confirmed_email_txt">Texto do e-mail de confirmação do agendamento:</label></label>
                                <textarea name="confirmed_email_txt" cols="40" rows="10" class="form-control" id="id_confirmed_email_txt">
                                  Olá, você fez seu agendamento conosco, obrigado!</textarea>
                              </div>
                            </div>
                        </div>

                        <h5>Texto para envio automático de e-mail de cancelamento do agendamento. Inclua uma mensagem padrão para cancelamento do agendamento</h5>
                          <div class="row mt-2">
                            <div class="col-md-12">
                              <div class="form-group">
                                
                                <label><label for="id_cancelled_email_txt">Texto do e-mail de cancelamento do agendamento:</label></label>
                                <textarea name="cancelled_email_txt" cols="40" rows="10" class="form-control" id="id_cancelled_email_txt">
                                  Olá, seu agendamento foi cancelado, obrigado!</textarea>
                                <div></div>
                              </div>
                            </div>
                        </div>-->

                          <h4 class="form-section"><i class="icon-list-alt"></i>Configurações Gerais da Agenda</h4>
                          <!--<div class="row mt-2">
                            <div class="col-md-12">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name=auto_mode id=id_auto_mode checked>
                                <label class="form-check-label" for=id_auto_mode><label for="id_auto_mode">Modo automático:</label></label>
                                <div>Se essa opção estiver marcada, o sistema irá criar novas datas de atendimento automaticamente, respeitando os parâmetros de dias e horários de atendimento</div>
                              </div>
                            </div>
                          </div>-->
                          
                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-group">
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" role="switch" name="national_holiday" id="id_national_holiday" <?= isset($appointments) && $appointments->national_holiday == 'on' ? 'checked' : '' ?>>
                                  <label class="form-check-label" for="id_national_holiday">Bloquear a agenda em feriados nacionais</label>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-group">
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" role="switch" name="state_holiday" id="id_state_holiday" <?= isset($appointments) && $appointments->state_holiday == 'on' ? 'checked' : '' ?>>
                                  <label class="form-check-label" for="id_state_holiday">Bloquear a agenda em feriados estaduais.</label>
                                </div>
                                <small >Para o correto funcionamento dessa função, verifique se o seu endereço cadastrado está correto.</small>

                              </div>
                            </div>
                          </div>

                          <div class="row mt-2">
                              <div class="col-md-12 ms-2">
                                <div class="form-group">
                                  <label>Duração do atendimento (em minutos)</label>
                                  <input type="number" id="time_between" class="form-control col-md-1" min="5" name="time_between" value="<?= isset($appointments) ? $appointments->time_between : '' ?>">
                                  <span class="help-block"><small>Se o atendimento dura 50min e você quer 10min de intervalo até o próximo atendimento, preencha esse campo com 60min.</small></span>
                                </div>
                            </div>
                          </div>
                          
                            <!--
                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-group">
                                <label for="id_att_slot_interval">Intervalo entre as opções de agendamento:</label>
                                <select name="att_slot_interval" class="form-control col-md-2" id="id_att_slot_interval">
                                  <option value="0:00:00" selected="">Automático</option>
                                  <option value="0:05:00">5 min</option>
                                  <option value="0:10:00">10 min</option>
                                  <option value="0:15:00">15 min</option>
                                  <option value="0:20:00">20 min</option>
                                  <option value="0:25:00">25 min</option>
                                  <option value="0:30:00">30 min</option>
                                  <option value="0:40:00">40 min</option>
                                  <option value="0:45:00">45 min</option>
                                  <option value="0:50:00">50 min</option>
                                  <option value="1:00:00">60 min</option>
                                </select>
                              </div>
                            </div>
                          </div>
                            -->

                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-group">
                                <label>Antecedência mínima para agendamento (em horas)</label>
                                <input type="number" id="time_before" class="form-control col-md-1" name="time_before" min="0" value="<?= isset($appointments) ? $appointments->time_before : '' ?>" required="True">
                                <!--<span class="help-block"><small>Exemplo: se você preencher 24h, só vai ser disponibilizado horário de atendimento para o dia seguinte. Se você preencher 0 (zero), o agendamento fica disponível até 15min antes do horário do atendimento</small></span>-->
                              </div>
                            </div>
                          </div>

                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-group">
                                <label>Antecedência máxima para agendamento (em dias)</label>
                                <input type="number" id="time_after" class="form-control col-md-1" name="time_after" max="90" value="<?= isset($appointments) ? $appointments->time_after : '' ?>" required="True">
                                <span class="help-block"><small>Exemplo: se você preencher esse campo com 10 dias, só vai ser disponibilizado horários até 10 dias pra frente.</small></span>
                              </div>
                            </div>
                          </div>

                          <div class="row mt-2">
                            <div class="col-md-12 ms-2">
                              <div class="form-group">
                                <label>Horário de Abertura da Agenda</label>
                                <input type="number" id="time_after_hour" class="form-control col-md-1" name="time_after_hour" max="24" value="<?= isset($appointments) ? $appointments->time_after_hour : '' ?>" required="True">
                                <span class="help-block"><small>Exemplo: se você deseja abrir um novo dia da agenda diariamente a partir das 10h, preencha o valor 10 neste campo. O padrão é abrir um novo dia da agenda as 0h. Preencha um valor entre 0 e 24;</small></span>
                              </div>
                            </div>
                          </div>
                          <!-- 
                          <h4 class="form-section"><i class="icon-calendar"></i>Datas de Atendimento - Opcional</h4>
                          <span class="help-block"><small>Você pode configurar a data de início e a data de fim das opções de appointments. Deixe os campos em branco se o seu atendimento for recorrente e contínuo.</small></span>
                          <div class="row mt-2">
                            <div class="col-md-6 ms-2">
                              <div class="form-group">
                                <label>Data inicial</label>
                                <input type="text" name="data_inicio" class="form-control picker__input" id="id_data_inicio" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="id_data_inicio_root">
                                <div class="picker" id="id_data_inicio_root" aria-hidden="true"><div class="picker__holder" tabindex="-1"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="id_data_inicio_table" title="Select a year"><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022" selected="">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option></select><select class="picker__select--month" disabled="" aria-controls="id_data_inicio_table" title="Select a month"><option value="0">janeiro</option><option value="1">fevereiro</option><option value="2">março</option><option value="3">abril</option><option value="4">maio</option><option value="5">junho</option><option value="6">julho</option><option value="7">agosto</option><option value="8">setembro</option><option value="9" selected="">outubro</option><option value="10">novembro</option><option value="11">dezembro</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="id_data_inicio_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="id_data_inicio_table" title="Next month"> </div></div><table class="picker__table" id="id_data_inicio_table" role="grid" aria-controls="id_data_inicio" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="domingo">dom</th><th class="picker__weekday" scope="col" title="segunda-feira">seg</th><th class="picker__weekday" scope="col" title="terça-feira">ter</th><th class="picker__weekday" scope="col" title="quarta-feira">qua</th><th class="picker__weekday" scope="col" title="quinta-feira">qui</th><th class="picker__weekday" scope="col" title="sexta-feira">sex</th><th class="picker__weekday" scope="col" title="sábado">sab</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1664078400000" role="gridcell" aria-label="25/09/2022">25</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1664164800000" role="gridcell" aria-label="26/09/2022">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1664251200000" role="gridcell" aria-label="27/09/2022">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1664337600000" role="gridcell" aria-label="28/09/2022">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1664424000000" role="gridcell" aria-label="29/09/2022">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1664510400000" role="gridcell" aria-label="30/09/2022">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1664596800000" role="gridcell" aria-label="01/10/2022">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1664683200000" role="gridcell" aria-label="02/10/2022">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1664769600000" role="gridcell" aria-label="03/10/2022">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1664856000000" role="gridcell" aria-label="04/10/2022">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1664942400000" role="gridcell" aria-label="05/10/2022">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665028800000" role="gridcell" aria-label="06/10/2022">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665115200000" role="gridcell" aria-label="07/10/2022">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665201600000" role="gridcell" aria-label="08/10/2022">8</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665288000000" role="gridcell" aria-label="09/10/2022">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665374400000" role="gridcell" aria-label="10/10/2022">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665460800000" role="gridcell" aria-label="11/10/2022">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665547200000" role="gridcell" aria-label="12/10/2022">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1665633600000" role="gridcell" aria-label="13/10/2022" aria-activedescendant="true">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665720000000" role="gridcell" aria-label="14/10/2022">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665806400000" role="gridcell" aria-label="15/10/2022">15</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665892800000" role="gridcell" aria-label="16/10/2022">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665979200000" role="gridcell" aria-label="17/10/2022">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666065600000" role="gridcell" aria-label="18/10/2022">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666152000000" role="gridcell" aria-label="19/10/2022">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666238400000" role="gridcell" aria-label="20/10/2022">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666324800000" role="gridcell" aria-label="21/10/2022">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666411200000" role="gridcell" aria-label="22/10/2022">22</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666497600000" role="gridcell" aria-label="23/10/2022">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666584000000" role="gridcell" aria-label="24/10/2022">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666670400000" role="gridcell" aria-label="25/10/2022">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666756800000" role="gridcell" aria-label="26/10/2022">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666843200000" role="gridcell" aria-label="27/10/2022">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666929600000" role="gridcell" aria-label="28/10/2022">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1667016000000" role="gridcell" aria-label="29/10/2022">29</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1667102400000" role="gridcell" aria-label="30/10/2022">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1667188800000" role="gridcell" aria-label="31/10/2022">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1667275200000" role="gridcell" aria-label="01/11/2022">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1667361600000" role="gridcell" aria-label="02/11/2022">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1667448000000" role="gridcell" aria-label="03/11/2022">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1667534400000" role="gridcell" aria-label="04/11/2022">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1667620800000" role="gridcell" aria-label="05/11/2022">5</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1665633600000" disabled="" aria-controls="id_data_inicio">hoje</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="id_data_inicio">limpar</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="id_data_inicio">fechar</button></div></div></div></div></div></div><input type="hidden" name="data_inicio_submit">
                              </div>
                            </div>
                            <div class="col-md-6 ms-2">
                              <div class="form-group">
                                <label>Data final</label>
                                <input type="text" name="data_fim" class="form-control picker__input" id="id_data_fim" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="id_data_fim_root">
                                <div class="picker" id="id_data_fim_root" aria-hidden="true"><div class="picker__holder" tabindex="-1"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><select class="picker__select--year" disabled="" aria-controls="id_data_fim_table" title="Select a year"><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022" selected="">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option></select><select class="picker__select--month" disabled="" aria-controls="id_data_fim_table" title="Select a month"><option value="0">janeiro</option><option value="1">fevereiro</option><option value="2">março</option><option value="3">abril</option><option value="4">maio</option><option value="5">junho</option><option value="6">julho</option><option value="7">agosto</option><option value="8">setembro</option><option value="9" selected="">outubro</option><option value="10">novembro</option><option value="11">dezembro</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="id_data_fim_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="id_data_fim_table" title="Next month"> </div></div><table class="picker__table" id="id_data_fim_table" role="grid" aria-controls="id_data_fim" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="domingo">dom</th><th class="picker__weekday" scope="col" title="segunda-feira">seg</th><th class="picker__weekday" scope="col" title="terça-feira">ter</th><th class="picker__weekday" scope="col" title="quarta-feira">qua</th><th class="picker__weekday" scope="col" title="quinta-feira">qui</th><th class="picker__weekday" scope="col" title="sexta-feira">sex</th><th class="picker__weekday" scope="col" title="sábado">sab</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1664078400000" role="gridcell" aria-label="25/09/2022">25</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1664164800000" role="gridcell" aria-label="26/09/2022">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1664251200000" role="gridcell" aria-label="27/09/2022">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1664337600000" role="gridcell" aria-label="28/09/2022">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1664424000000" role="gridcell" aria-label="29/09/2022">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1664510400000" role="gridcell" aria-label="30/09/2022">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1664596800000" role="gridcell" aria-label="01/10/2022">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1664683200000" role="gridcell" aria-label="02/10/2022">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1664769600000" role="gridcell" aria-label="03/10/2022">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1664856000000" role="gridcell" aria-label="04/10/2022">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1664942400000" role="gridcell" aria-label="05/10/2022">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665028800000" role="gridcell" aria-label="06/10/2022">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665115200000" role="gridcell" aria-label="07/10/2022">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665201600000" role="gridcell" aria-label="08/10/2022">8</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665288000000" role="gridcell" aria-label="09/10/2022">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665374400000" role="gridcell" aria-label="10/10/2022">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665460800000" role="gridcell" aria-label="11/10/2022">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665547200000" role="gridcell" aria-label="12/10/2022">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1665633600000" role="gridcell" aria-label="13/10/2022" aria-activedescendant="true">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665720000000" role="gridcell" aria-label="14/10/2022">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665806400000" role="gridcell" aria-label="15/10/2022">15</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665892800000" role="gridcell" aria-label="16/10/2022">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1665979200000" role="gridcell" aria-label="17/10/2022">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666065600000" role="gridcell" aria-label="18/10/2022">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666152000000" role="gridcell" aria-label="19/10/2022">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666238400000" role="gridcell" aria-label="20/10/2022">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666324800000" role="gridcell" aria-label="21/10/2022">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666411200000" role="gridcell" aria-label="22/10/2022">22</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666497600000" role="gridcell" aria-label="23/10/2022">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666584000000" role="gridcell" aria-label="24/10/2022">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666670400000" role="gridcell" aria-label="25/10/2022">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666756800000" role="gridcell" aria-label="26/10/2022">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666843200000" role="gridcell" aria-label="27/10/2022">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1666929600000" role="gridcell" aria-label="28/10/2022">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1667016000000" role="gridcell" aria-label="29/10/2022">29</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1667102400000" role="gridcell" aria-label="30/10/2022">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1667188800000" role="gridcell" aria-label="31/10/2022">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1667275200000" role="gridcell" aria-label="01/11/2022">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1667361600000" role="gridcell" aria-label="02/11/2022">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1667448000000" role="gridcell" aria-label="03/11/2022">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1667534400000" role="gridcell" aria-label="04/11/2022">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1667620800000" role="gridcell" aria-label="05/11/2022">5</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1665633600000" disabled="" aria-controls="id_data_fim">hoje</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="id_data_fim">limpar</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="id_data_fim">fechar</button></div></div></div></div></div></div><input type="hidden" name="data_fim_submit">
                              </div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-6 ms-2">
                              <div class="form-group">
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" role="switch" id="national_holiday" name="national_holiday">
                                  <label class="form-check-label" for="national_holiday">Bloquear agenda em Feriados Nacionais</label>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row mt-2">
                            <div class="col-md-6 ms-2">
                              <div class="form-group">
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" role="switch"  id="state_holiday" name="state_holiday">
                                  <label class="form-check-label" for="state_holiday">Bloquear agenda em Feriados Estaduais</label>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row mt-2">
                            <div class="col-md-6 ms-2">
                              <div class="form-group">
                                <label>Selecione o estado:</label>
                                <select class="form-control" name='state_holiday_uf' id="state_holiday_uf">
                                      <option>-----Selecione-----</option>
                                      
                                </select>

                              </div>
                            </div>
                          </div>-->

                          <h4 class="form-section"><i class="icon-calendar"></i>Horários de Atendimento</h4>
                          <span class="help-block">
                            <small>Configure os horários de atendimento. Informe a hora incial e a hora final.</small>
                            <span class="help-block"><small>Você pode clicar no botão <i class="icon-plus-sign"></i> para incluir um novo período de atendimento. <br>
                            Por exemplo:  você pode criar um bloco das 8h as 12h e outro bloco das 14h as 18h.<br><br></small>
                          </span>

                          </span>
                          <h4 class="form-section">
                            <i class="icon-clock"></i>
                            Segunda-feira
                            <span class="add_time" onclick="add_new_time('monday')">
                              <i class="icon-plus-sign"></i>
                            </span>

                            <span class="remove_time" onclick="remove_time('monday')">
                              <i class="icon-minus-sign"></i>
                            </span>

                          </h4>

                          <div class="row mt-2">
                            <div class="col-md-3">
                              <div class="form-group" id="monday_initial">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_monday{{$i}}">Hora incial</label>
                                <input type="time" id-fixed='monday' class="form-control" value="{{$hour->initial_time_monday}}" name="initial_time_monday[{{$i}}]" id="initial_time_monday{{$i}}">
                                @endforeach
                              @endif
                              </div>                            
                            </div>

                            <div class="col-md-3">
                              <div class="form-group" id="monday_end">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_monday{{$i}}">Hora final</label>
                                <input type="time" class="form-control" value="{{$hour->end_time_monday}}" name="end_time_monday[{{$i}}]" id="end_time_monday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                                                        
                            <div class="col-md-3">
                              <div class="form-group" id="monday_amount">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_monday{{$i}}">Número de Pessoas por Horário</label>
                                <input type="number" min="{{$i}}" class="form-control" value="{{$hour->amount_monday}}" name="amount_monday[{{$i}}]" id="amount_monday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                          </div>

                          <div class="btn  btn-primary" onclick="copy_to_alldays('monday','all')">
                                Replicar de segunda a domingo
                              </div>

                              <div class="btn btn-raised btn-raised btn-primary" onclick="copy_to_alldays('monday','friday')">
                                Replicar de segunda a sexta
                          </div>

                          <h4 class="form-section">
                            <i class="icon-clock"></i>Terça-feira
                            <span class="add_time" onclick="add_new_time('tuesday')">
                              <i class="icon-plus-sign"></i>
                            </span>
                            <span class="remove_time" onclick="remove_time('tuesday')">
                              <i class="icon-minus-sign"></i>
                            </span>
                          </h4>

                          <div class="row mt-2">
                            <div class="col-md-4">
                              <div class="form-group" id="tuesday_initial">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_tuesday{{$i}}">Hora incial</label>
                                <input type="time" id-fixed='tuesday' class="form-control" value="{{$hour->initial_time_tuesday}}" name="initial_time_tuesday[{{$i}}]" id="initial_time_tuesday{{$i}}">
                                @endforeach
                              @endif
                            </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group" id="tuesday_end">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_tuesday{{$i}}">Hora final</label>
                                <input type="time" class="form-control" value="{{$hour->end_time_tuesday}}" name="end_time_tuesday[{{$i}}]" id="end_time_tuesday{{$i}}">
                                @endforeach
                              @endif
                            </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group" id="tuesday_amount">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_tuesday{{$i}}">Número de Pessoas por Horário</label>
                                <input type="number" min="0" class="form-control" value="{{$hour->amount_tuesday}}" name="amount_tuesday[{{$i}}]" id="amount_tuesday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                          </div>

                          <h4 class="form-section">
                            <i class="icon-clock"></i>Quarta-feira
                            <span class="add_time" onclick="add_new_time('wednesday')">
                              <i class="icon-plus-sign"></i>
                            </span>
                            <span class="remove_time" onclick="remove_time('wednesday')">
                              <i class="icon-minus-sign"></i>
                            </span>
                          </h4>

                          <div class="row mt-2">
                            <div class="col-md-4">
                              <div class="form-group" id="wednesday_initial">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_wednesday{{$i}}">Hora incial</label>
                                <input type="time" id-fixed='wednesday' class="form-control" value="{{$hour->initial_time_wednesday}}" name="initial_time_wednesday[{{$i}}]" id="initial_time_wednesday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group" id="wednesday_end">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_wednesday{{$i}}">Hora final</label>
                                <input type="time" class="form-control" value="{{$hour->end_time_wednesday}}" name="end_time_wednesday[{{$i}}]" id="end_time_wednesday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group" id="wednesday_amount">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_wednesday{{$i}}">Número de Pessoas por Horário</label>
                                <input type="number" min="0" class="form-control" value="{{$hour->amount_wednesday}}" name="amount_wednesday[{{$i}}]" id="amount_wednesday{{$i}}">
                                @endforeach
                              @endif

                              </div>
                            </div>
                          </div>
                          <h4 class="form-section">
                            <i class="icon-clock"></i>Quinta-feira
                            <span class="add_time" onclick="add_new_time('thursday')">
                              <i class="icon-plus-sign"></i>
                            </span>
                            <span class="remove_time" onclick="remove_time('thursday')">
                              <i class="icon-minus-sign"></i>
                            </span>
                          </h4>

                          <div class="row mt-2">
                            <div class="col-md-4">
                              <div class="form-group" id="thursday_initial">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_thursday{{$i}}">Hora incial</label>
                                <input type="time" id-fixed='thursday' class="form-control" value="{{$hour->initial_time_thursday}}" name="initial_time_thursday[{{$i}}]" id="initial_time_thursday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group" id="thursday_end">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_thursday{{$i}}">Hora final</label>
                                <input type="time" class="form-control" value="{{$hour->end_time_thursday}}" name="end_time_thursday[{{$i}}]" id="end_time_thursday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group" id="thursday_amount">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_thursday{{$i}}">Número de Pessoas por Horário</label>
                                <input type="number" min="0" class="form-control" value="{{$hour->amount_thursday}}" name="amount_thursday[{{$i}}]" id="amount_thursday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                          </div>
                          
                          <h4 class="form-section">
                            <i class="icon-clock"></i>Sexta-feira
                            <span class="add_time" onclick="add_new_time('friday')">
                              <i class="icon-plus-sign"></i>
                            </span>
                            <span class="remove_time" onclick="remove_time('friday')">
                              <i class="icon-minus-sign"></i>
                            </span>
                          </h4>

                          <div class="row mt-2">
                            <div class="col-md-4">
                              <div class="form-group" id="friday_initial">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_friday{{$i}}">Hora incial</label>
                                <input type="time" id-fixed='friday' class="form-control" value="{{$hour->initial_time_friday}}" name="initial_time_friday[{{$i}}]" id="initial_time_friday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group" id="friday_end">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_friday{{$i}}">Hora final</label>
                                <input type="time" class="form-control" value="{{$hour->end_time_friday}}" name="end_time_friday[{{$i}}]" id="end_time_friday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group" id="friday_amount">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_friday{{$i}}">Número de Pessoas por Horário</label>
                                <input type="number" min="0" class="form-control" value="{{$hour->amount_friday}}" name="amount_friday[{{$i}}]" id="amount_friday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                          </div>

                          <h4 class="form-section">
                            <i class="icon-clock"></i>Sabado
                            <span class="add_time" onclick="add_new_time('saturday')">
                              <i class="icon-plus-sign"></i>
                            </span>
                            <span class="remove_time" onclick="remove_time('saturday')">
                              <i class="icon-minus-sign"></i>
                            </span>
                          </h4>

                          <div class="row mt-2">
                            <div class="col-md-4">
                              <div class="form-group" id="saturday_initial">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_saturday{{$i}}">Hora incial</label>
                                <input type="time" id-fixed='saturday' class="form-control" value="{{$hour->initial_time_saturday}}" name="initial_time_saturday[{{$i}}]" id="initial_time_saturday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group" id="saturday_end">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_saturday{{$i}}">Hora final</label>
                                <input type="time" class="form-control" value="{{$hour->end_time_saturday}}" name="end_time_saturday[{{$i}}]" id="end_time_saturday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group" id="saturday_amount">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_saturday{{$i}}">Número de Pessoas por Horário</label>
                                <input type="number" min="0" class="form-control" value="{{$hour->amount_saturday}}" name="amount_saturday[{{$i}}]" id="amount_saturday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                          </div>
                          
                          <h4 class="form-section">
                            <i class="icon-clock"></i>Domingo
                            <span class="add_time" onclick="add_new_time('sunday')">
                              <i class="icon-plus-sign"></i>
                            </span>
                            <span class="remove_time" onclick="remove_time('sunday')">
                              <i class="icon-minus-sign"></i>
                            </span>
                          </h4>

                          <div class="row mt-2">
                            <div class="col-md-4">
                              <div class="form-group" id="sunday_initial">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_sunday{{$i}}">Hora incial</label>
                                <input type="time" id-fixed='sunday' class="form-control" value="{{$hour->initial_time_sunday}}" name="initial_time_sunday[{{$i}}]" id="initial_time_sunday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group" id="sunday_end">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_sunday{{$i}}">Hora final</label>
                                <input type="time" class="form-control" value="{{$hour->end_time_sunday}}" name="end_time_sunday[{{$i}}]" id="end_time_sunday{{$i}}">
                                @endforeach
                              @endif
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group" id="sunday_amount">
                              @if(isset($availableOpenningHours))
                                @foreach($availableOpenningHours as $i => $hour)
                                <label class="label_sunday{{$i}}">Número de Pessoas por Horário</label>
                                <input type="number" min="0" class="form-control" value="{{$hour->amount_sunday}}" name="amount_sunday[{{$i}}]" id="amount_sunday{{$i}}">
                              @endforeach
                              @endif
                              </div>
                            </div>
                          </div>                          
                          <!--
                        <h4 class="form-section"><i class="icon-list-alt"></i>Limites de appointments</h4>
                          <span class="help-block"><small>Configure um limite de agendamento para essa agenda. Para o limite funcionar, os 4 parâmetros abaixo devem ser definidos. Para configurar limites gerais, acesse a tela de <a href="/appointments/limites/">Limites de Agendamento</a><br><br></small>
                          </span>
                          <div class="row mt-2">
                            <div class="col-md-6 ms-2">
                              <div class="form-group">
                                <div class="custom-control">
                                  <label for="id_type_limit">Tipo de limite:</label>
                                  <select name="type_limit" class="form-control" id="id_type_limit">
                                    <option value="" selected="">---------</option>
                                    <option value="FALTAS">FALTAS</option>
                                    <option value="appointments">appointments</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 ms-2">
                              <div class="form-group">
                                <div class="custom-control">
                                <label for="id_max_app">Número maximo de appointments/faltas:</label>
                                <input type="number" name="max_app" value="1" class="form-control" id="id_max_app">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 ms-2">
                              <div class="form-group">
                                <div class="custom-control">
                                  <label for="id_interval">Período:</label>
                                  <select name="interval" class="form-control" id="id_interval">
                                    <option value="" selected="">---------</option>
                                    <option value="DIA">POR DIA</option>
                                    <option value="SEMANA">POR SEMANA</option>
                                    <option value="MES">POR MÊS</option>
                                    <option value="NDAYS">DIAS CORRIDOS</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 ms-2">
                              <div class="form-group">
                                <div class="custom-control">
                                <label for="id_days_interval">Período em dias:</label>
                                <input type="number" name="days_interval" class="form-control" id="id_days_interval">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 ms-2">
                              <div class="form-group">
                                <div class="custom-control">
                                <label for="id_key">Definição do Limite:</label>
                                  <select name="key" class="form-control" id="id_key">
                                    <option value="">---------</option>
                                    <option value="cpf">CPF</option>
                                    <option value="user">Usuário Cadastrado</option>
                                    <option value="email" selected="">Email</option>
                                    <option value="nome">Nome</option>
                                    <option value="phone">Telefone</option>
                                    <option value="phone+name">Mesmos Nome e Telefone</option>
                                    <option value="email+name">Mesmos Nome e E-mail</option>
                                    <option value="phone+name+email">Mesmos Nome, Telefone e E-mail</option>
                                    <option value="source_ip">IP de Origem</option>
                                    <option value="custom">Chave Customizada</option>
                                    <option value="count">Total de appointments</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                            -->
                        <h4 class="form-section"><i class="icon-home"></i>Endereço de Atendimento</h4>
                        <span class="help-block">
                          <small>Escolha um endereço de atendimento cadastrado. Você pode configurar os endereços de atendimento na página das <a href="/users/unidades_atendimento/">unidades de atendimento</a>
                          <br><br></small>
                        </span>
                        <button type="submit" class="btn btn-raised btn-raised btn-success" id="submit"><i class="fa fa-check-square-o"></i> Salvar Configuração</button>
                        <button type="submit" class="btn btn-outline-secondary" id="submit"><a href="/appointments">Voltar</a></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
    </section>
  </div>
</div>
