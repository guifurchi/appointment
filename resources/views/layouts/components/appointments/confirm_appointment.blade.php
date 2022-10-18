<div class="main-content">
    <div class="content-wrapper">
        <section id="hoverable-rows">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                        <h4 class="card-title">Lista de Agendamentos para Confirmar</h4>
                        <p> Você deve entrar em contato com o cliente para informar se o pedido de agendamento foi confirmado ou recusado. Se você clicar no número do telefone, o sistema abrirá a tela do whatsapp para você conversar com o cliente (se ele tiver whatsapp)</p>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="search-bar input-group col-md-12 mx-auto">
                                    <form method="GET">
                                        <div class="input-group">
                                            <select id="select-itens-choices" name="agenda" class="form-control" aria-label="form-select-lg example" data-placeholder="Any">
                                                <option value="">Filtro por Agenda</option>
                                                <option value="2226">Cópia da Nutricionista Valéria Furchi</option>
                                                <option value="2176">Nutricionista Valéria Furchi</option>
                                            </select>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" id="search_dates" type="submit">Buscar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <ul class="pagination">
                                <span class="step-links">
                                    <span class="current">
                                        <text class="strong">Página 1 de 1.</text>
                                    </span>
                                </span>
                                </ul>

                                <table class="table table-responsive mb-0 table-striped table-bordered compact" id="tabela_agendamentos" style="font-size:80%;">
                                    <thead>
                                        <tr>
                                        <th>Agenda/Serviço</th>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>E-mail</th>
                                        <th>Telefone</th>
                                        <th>Comentários</th>
                                        <th>Data Agendada</th>
                                        <th>Feito em</th>
                                        <th>Ação</th>
                                        <th>Detalhes</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle">Nutricionista Valéria Furchi</td>
                                            <td class="align-middle"><a target="_blank" href="/clientes/25454">Guilherme Furchi</a></td>
                                            <td class="align-middle"></td>
                                            <td class="align-middle">guifurchi65@gmail.com</td>
                                            <td class="align-middle"><a href="https://wa.me/5592981882726" target="_blank">(92) 98188 2726</a></td>
                                            <td class="align-middle"></td>
                                            <td class="align-middle">19 Out 08:00</td>
                                            <td class="align-middle">17 Out 23:09</td>
                                            <td class="text-right"><spam onclick="ajax_registrar(39919 ,'accept');" type="button" class="btn btn-success"><span data-toggle="tooltip" data-placement="right" title="Aprovar"><i class="icon-check font-medium-3 mr-2"></i></span></spam>
                                            <spam onclick="ajax_registrar(39919 ,'reject');" type="button" class="btn btn-danger"><span data-toggle="tooltip" data-placement="right" title="Não Compareceu"><i class="icon-thumbs-down font-medium-3 mr-2"></i></span></spam></td>
                                            <td class="text-right">
                                            <!--<a href="/agendamentos/confirmacao/editar/39919/" class="btn btn-primary">Detalhes</a>-->
                                            <a href="/agendamentos/detalhes/81cbca83-7129-44c1-8770-b627fabe37ab" class="btn btn-primary">Detalhes</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script type="text/javascript" nonce="">
 function ajax_registrar(id,action){
        if(action=="accept"){
            message = "Você tem certeza que deseja confirmar o agendamento?";
        }
        if(action=="reject"){
            message = "Você tem certeza que deseja recusar o agendamento?";
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
          var url = '/agendamentos/list_appointment_action/';
          $.ajax( url, {
              data: {
                "csrfmiddlewaretoken": csrftoken,
                "id":id,
                "action":action
              },
              type: 'post',
              success: function (response) {
                swal({
                  title: response,
                  //text: response,
                  type: 'warning',
                }).then(function (isConfirm) {
                  location.reload();
                })
                //console.log(response)
                //document.getElementById(id).textContent = response

              },
              error: function (response) {
            },
          });
    }})}
</script>
