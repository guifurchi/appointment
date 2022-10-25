<div class="main-content">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">
        <div class="content-header">Dados do seu Cadastro</div>
        <p class="content-sub-header">Edite os dados do seu cadastro conforme a sua necessidade</p>
      </div>
    </div>
    <section id="extended">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <h4></h4>
                <br>
                <form class="post-form" name="account" action="/account/update" method="post" >
                  @csrf
                  <div class="form-body">
                    <h4 class="form-section"><i class="icon-lock"></i>Dados de Acesso</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_email">Email:</label>
                          <input type="email" name="u_email" value="{{$user->u_email}}" maxlength="254" required="" id="u_email" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="u_planType">Plano Ativo:</label>
                          <input type="text" name="u_planType" value="{{$user->u_planType}}"maxlength="50" required="" id="u_planType" class="form-control">
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="form-body">
                    <h4 class="form-section"><i class="icon-user"></i>Dados Pessoais</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_name">Nome:</label>
                          <input type="text" name="u_name" value="{{$user->u_name}}"maxlength="50" required="" id="id_name" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_cpf">CPF:</label>
                          <input type="text" name="u_cpf" value="{{$user->u_cpf}}" data-mask="000.000.000-00" id="id_cpf" autocomplete="off" maxlength="14" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_old_phone">Telefone:</label>
                          <input type="text" name="u_phone" value="{{$user->u_phone}}"  data-mask="(00) 00000-0000" maxlength="15" minlength="14" id="id_old_phone" autocomplete="off" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_gender">Gênero:</label>
                          <select name="u_gender" id="id_gender" class="form-control">
                            <option value="" selected="">---------</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="O">Outro</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_marital_status">Estado civil:</label>
                          <select name="u_marital_status" id="id_marital_status" class="form-control">
                          <?php 
                            if($user->u_marital_status){
                              echo "<option value='$user->u_marital_status'>$user->u_marital_status</option>";
                            }
                            ?>

                            <option value="" >---------</option>
                            <option value="Casado(a)" >Casado(a)</option>
                            <option value="Solteiro(a)" >Solteiro(a)</option>
                            <option value="Viuvo(a)" >Viuvo(a)</option>
                            <option value="Divorciado(a)">Divorciado(a)</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_identification">Tipo de identidade:</label>
                          <select name="u_type_ident" id="id_identification" class="form-control">
                            <?php 
                            if($user->u_type_ident){
                              echo "<option value='$user->u_type_ident'>$user->u_type_ident</option>";
                            }
                            ?>
                            <option value=""  >---------</option>
                            <option value="RG" >RG</option>
                            <option value="CNH" >CNH</option>
                            <option value="Passaporte" >Passaporte</option>
                            <option value="Carteira de Trabalho" >Carteira de Trabalho</option>
                            <option value="Carteira de Identidade Profissional (OAB, CRC, CRM, CRA, CREA, etc)" >Carteira de Identidade Profissional (OAB, CRC, CRM, CRA, CREA, etc)</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_identification_number">Número de identidade:</label>
                          <input type="text" name="u_type_ident_num" value="{{$user->u_type_ident_num}}" maxlength="20" id="id_identification_number" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_nationality">Nacionalidade:</label>
                          <select name="u_nacionality" id="u_nacionality" class="form-control">
                          <option value=""  >---------</option>
                            <?php
                            foreach($nacionality as $nac){
                              $selected = $nac->description == $user->u_nacionality ? 'selected' : '';
                                echo "<option value='$nac->description' $selected>$nac->description</option>";
                            }
                            ?>
                          </select>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_profession">Profissão:</label>
                          <input type="text" name="u_occupation" value="{{$user->u_occupation}}" maxlength="100" id="id_profession" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_birthday">Data de nascimento:</label>
                          <input type="text" name="u_birthday" value="{{ date('d/m/Y', strtotime($user->u_birthday)) }}" data-mask="00/00/0000" format="%d/%m/%Y" id="id_birthday" autocomplete="off" maxlength="10" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-body">
                  <h4 class="form-section"><i class="icon-home"></i>Dados de Endereço</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_street">Endereço:</label>
                          <input type="text" name="u_address" value="{{$user->u_address}}" id="id_street" maxlength="100" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-actions right">
                    <button id="btn" class="btn btn-raised btn-primary">
                      <i class="fa fa-check-square-o"></i> Salvar
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="extended">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <h4 class="form-section"><i class="icon-trash"></i> Encerrar Conta</h4>
                  Encerre esta conta na eAgenda. Essa ação não pode ser desfeita e todos os dados relacionados a seu usuários serão excluídos, inclusive agendamentos e dados de configuração.<br><br>
                  <div class="form-actions right">
                    <a href="/users/excluir_usuario/" class="btn btn-danger"> <i class="fa fa-trash"></i> Encerrar Conta</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="err_msg"></div>
  </div>
</div>
</script>