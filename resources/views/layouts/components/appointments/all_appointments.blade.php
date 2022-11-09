          <div class="main-content">
            <div class="content-wrapper">
              <div class="row">
                  <div class="col-12">
                    <div class="content-header">Agendas</div>
                    <p class="content-sub-header">Criar e configurar as agendas.</p>
                    <p class="content-sub-header">Configure aqui a sua agenda. Esse é um passo importante para que seus agendamentos ocorram da forma como deseja.</p>
                  </div>
                </div>
              <section id="extended">

                <div class="row">
                  <div class="col-12">
                    <a class=" btn btn-success" href="/appointments/config">Incluir Agenda</a>
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Lista de Agendas 
                        </h4>
                        <p class="card-text"></p>
                      </div>
                      <div class="card-content">
                        <div class="card-body card-dashboard table-responsive">
                          <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                              <tr>
                                  <th>Agenda</th>
                                  <th>Ativa</th>
                                  <th>Serviço</th>
                                  <th>Antecedencia Min</th>
                                  <th>Antecedencia Max</th>
                                  <th>intervalo</th>
                                  <th>Confirmação Manual</th>
                                  <th>Solicita email</th>
                                  <th>Solicita telefone</th>
                                  <th>Ações</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($appointments as $appointment)
                              @csrf

                              <tr>
                                  <td>{{$appointment->name}}</td>
                                  <td>{{$appointment->status}}</td>
                                  <td>
                                    @foreach($services_appointments as $services)
                                      @if($appointment->id == $services->appointment_id)
                                        {{$services->s_name}} / 
                                      @endif
                                    @endforeach
                                  </td>
                                  <td>{{$appointment->cancel_minimum_time_aux}}</td>
                                  <td>{{$appointment->time_after}}</td>
                                  <td>{{$appointment->time_between}}</td>
                                  <td>{{$appointment->b_confirmar}}</td>
                                  <td>{{$appointment->request_email}}</td>
                                  <td>{{$appointment->request_telefone}}</td>
                                  <td>
                                    <a class="success p-0" data-original-title="" title="" href="/appointments/edit/{{$appointment->id}}"><span data-toggle="tooltip" data-placement="right" title="Editar Serviço"><i class="icon-edit font-medium-3 mr-2"></i></span></a>
                                    <a class="danger p-0" data-original-title="" onclick="action('{{$appointment->id}}','destroy')"><span data-toggle="tooltip" data-placement="right" title="Excluir Serviço"><i class="icon-trash font-medium-3 mr-2"></i></span></a>
                                  </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                          <ul class="pagination">
                            <span class="step-links">
                                <span class="current">
                                    <text class="strong">Página 1 de 1.</text>
                                </span>
                            </span>
                          </ul>
                        </div> 
                      </div>
                          <!--
                          
                              <div  class="config_card col-6">
                                  <div class="card" style="width:100%">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="/appointments/servicos/editar/1872" >atendimento nutricional</a></h5>
                                        <br>
                                        <p><b>Duração: </b>0:05:00 </p>
                                        <p><b>Valor: </b>R$  300,00  </p>
                                        <p><b>Exibir Valor: </b> Sim</p>
                                        <br>
                                        <a href="/appointments/servicos/editar/1872" class="btn btn-primary">Editar Serviço</a>
                                        <a href="/appointments/servicos/delete/1872" class="btn btn-danger text-right">Excluir Serviço</a>
                                        
                                    </div>
                                  </div>
                              </div>
                          
                        -->
                        <!--
                      <div class="card-content" id="tabela">
                        <div class="card-body table-responsive">
                          <h4 class="mb-3">Relação Serviços x Agendas</h4>
                          <table class="table table-sm table-responsive-sm table-bordered table-hover table-striped">
                          <thead>
                            <tr>
                                <th>Agenda/Serviço</th>
                                
                                <th>atendimento nutricional</th>
                                
                            </tr>
                          </thead>
                          <tbody>
                                
                          </tbody>
                          </table>
                        </div> 
                      </div>
        -->
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

@if (session('msg') != NULL)
<script>
swal(
    'Parabéns!',
    "{{session('msg')}}",
    'success')
</script>
@endif

<script>

function action(id,action){

    var token = $("input[name=_token]").val()
    var message = "Você tem certeza que deseja encerrar a sua conta?"
    console.log("/appointments/delete/"+id)
    console.log(token)
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
            url: "/appointments/delete/"+id,
            type: 'post',
            data: {
                "id": id,
                "_token": token,
            },
              success: function (){
                document.location.reload(3000);
                swal(
                  'Parabéns!',
                  "Registro exclído com sucesso!",
                  'success')
              }
            })
          }
      })
   
};

</script>
