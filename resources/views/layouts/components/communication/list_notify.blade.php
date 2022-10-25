<div class="main-content">
            <div class="content-wrapper">

                    <!--<script src="https://arquivos.eagenda.com.br/static/js/jquery-3.4.1.js?v32b"></script>-->
                    <script src="https://arquivos.eagenda.com.br/static/app-assets/vendors/js/core/jquery-3.6.0.min.js?v32b" type="text/javascript"></script>
                    <input type="hidden" name="csrfmiddlewaretoken" value="EB2KXttKLv5CyW2UimJXAsEjxiCa1V5n5bNVBZco79TRL5ETms9wz1QgNwN2XxPq">
                    <script>
                      const csrftoken = document.querySelector('[name=csrfmiddlewaretoken]').value;
                    </script>
                    

                   

<div class="col-12">
    <div class="content-header">Notificações</div>
    <p class="content-sub-header">Regras de Notificações</p>
</div>
<section id="configuration">
  <div class="card">
    <div class="card-header pb-2">
          <spam class="text-muted">Crédito de SMS: </spam><a href="/users/pacotes/notificacoes/">0</a><br>
          <spam class="text-muted">Crédito de Email: </spam><a href="/users/pacotes/notificacoes/">0</a>
    </div>
  </div>
  <div class="row match-height">
    <div class="col-xl-13 col-lg-12 col-12">
      <div class="card">
        <div class="card-header pb-2">
          <form method="get" onsubmit="loading()">
              
          </form>
          <a href="/communications/notify/add" class="btn btn-primary" style="float: right;">Nova Regra</a>
        </div>
        <div class="card-content">
          <ul class="pagination">
                  <span class="step-links">
                      

                      <span class="current">
                          <text class="strong">&nbsp; Página 1 de 1.</text>
                      </span>

                      
                  </span>
              </ul><table class="table table-responsive-sm text-center">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Agendas</th>
                <th>Forma de Envio</th>
                <th>Template de E-mail</th>
                <th>Regra de Envio</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              
              
              <tr>
                <td>Teste</td>
                <td>Todas as Agendas</td>
                <td>Email</td>
                <td>Mensagem Agradecimento</td>
                <td>1 dia, 1 horas, 2 minutos, Após a Confirmação do Agendamento</td>
                <td></td>
                <td>
                  <a href="/communications/notify/edit" class="btn-sm btn-info">Editar</a>
                </td>
              </tr>
              
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--<script src="https://arquivos.eagenda.com.br/static/app-assets/vendors/js/chartist.min.js" type="text/javascript"></script>
<script src="https://arquivos.eagenda.com.br/static/app-assets/js/dashboard1.js" type="text/javascript"></script>-->


            </div>
          </div>