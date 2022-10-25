<div class="main-content">
            <div class="content-wrapper">

                    <!--<script src="https://arquivos.eagenda.com.br/static/js/jquery-3.4.1.js?v32b"></script>-->
                    <script src="https://arquivos.eagenda.com.br/static/app-assets/vendors/js/core/jquery-3.6.0.min.js?v32b" type="text/javascript"></script>
                    <input type="hidden" name="csrfmiddlewaretoken" value="FQ9BCVgUP6sGNpyHZA6IwiSpx9vYh4DY6qUMgrZybKgV0yaG3GwhvR4mNnGQdGn1" class="custom-control">
                    <script>
                      const csrftoken = document.querySelector('[name=csrfmiddlewaretoken]').value;
                    </script>
                    

                   

  <div class="row">
    <div class="col-12">
      <div class="content-header">Configuração da Tela de Agendamento</div>
      <p class="content-sub-header">Nesta tela você pode customizar alguns aspectos da tela de agendamento</p>
    </div>
  </div>
  <section id="extended">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-content">
          <div class="card-body">
            <h4></h4>
            
            
            <br>
            <form method="POST" class="post-form" enctype="multipart/form-data" onsubmit="loading()"><input type="hidden" name="csrfmiddlewaretoken" value="FQ9BCVgUP6sGNpyHZA6IwiSpx9vYh4DY6qUMgrZybKgV0yaG3GwhvR4mNnGQdGn1" class="custom-control">
                <div class="form-body">
                  <h4 class="form-section"><i class="icon-lock"></i>Dados Gerais</h4>
                  <h6>Informe seus contatos para exibição na tela de agendamento. Importante: se você alterar a sigla da conta, todos os links de agendamento serão impactados. O link principal da sua tela de agendamento é <a href="/guila" target="_blank">eagenda.com.br/guila</a></h6>
                  <div class="row">

                    

                      
                    
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_name">Nome da empresa ou negócio:</label>
                        
                        
                        <input type="text" name="name" value="Guilherme Furchi" maxlength="50" class="form-control custom-control mb-3" id="id_name">

                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_label">Informe uma sigla ou nome para identificar seu negócio ou serviço:</label>
                        
                        
                        <input type="text" name="label" value="guila" maxlength="50" class="form-control custom-control mb-3" required="" id="id_label">

                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_pagina_completa">Mostrar na página inicial detalhes extras sobre agendamento para todas as agendas disponíveis:</label>
                        
                        
                        <input type="checkbox" name="pagina_completa" id="id_pagina_completa" checked="" class="custom-control">

                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_email">E-mail:</label>
                        
                        
                        <input type="email" name="email" maxlength="254" class="form-control custom-control" id="id_email">

                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_phone">Telefone:</label>
                        
                        
                        <input type="text" name="phone" maxlength="15" class="form-control custom-control mb-3" id="id_phone">

                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_whatsapp">WhatsApp:</label>
                        
                        
                        <input type="text" name="whatsapp" data-mask="(00) 00000-0000" class="form-control custom-control mb-3" id="id_whatsapp" autocomplete="off" maxlength="15">

                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_website">Informe o seu site, se tiver. Inicie com http:// ou https://:</label>
                        
                        
                        <input type="url" name="website" maxlength="250" class="form-control custom-control mb-3" id="id_website">

                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_mensagem">Mensagem Personalizada aos seus Clientes. É exibido em sua tela de agendamento:</label>
                        
                        
                        <textarea name="mensagem" cols="40" rows="10" maxlength="1500" class="form-control" id="id_mensagem"></textarea>

                      </div>
                    </div>
                    
                  </div>
                </div>

                <div class="form-body">
                  <h4 class="form-section"><i class="icon-link"></i>Grupos de Agenda</h4>
                  <h6>Aqui você pode criar um fluxo sequencial na tela de agendamento para ajudar o usuário a encontrar a agenda correta. O fluxo pode ter entre 1 e 3 etapas. As agendas devem ser vinculadas na última etapa do fluxo.</h6>
                  <div class="row">
                    <div class="card-content">
                      <div class="card-body table-responsive">
                        <a class="info p-0" data-original-title="" title="">
                                  </a><a href="/users/grupos/novo" class="btn btn-info">Adicionar Etapa 1
                                    <i class="icon-plus font-medium-3 mr-2"></i>
                                  </a>
                        
                        <table class="table text-center">
                          <thead>
                            <tr>
                              <th>Etapa 1</th>
                              <th>Etapa 2</th>
                              <th>Etapa 3</th>
                              <th>Agendas</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-body">
                  <h4 class="form-section"><i class="icon-users"></i>Paleta de Cores</h4>
                  <h6>Configure as cores da sua tela de agendamento</h6>
                  <div class="col-md-3">
                    <select name="modelos" id="modelos" onchange="update_theme()" class="form-control mb-3">
                      <option value="custom">Customizado</option>
                      <option value="default">Padrão</option>
                    </select>
                  </div>
                  <div class="row">
                    

                      
                    
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_css_header_background_color">Menu - Cor de Fundo:</label>
                        
                        
                        <input type="color" name="css_header_background_color" value="#fafafa" id="id_css_header_background_color" class="custom-control">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_css_header_text_color">Menu - Cor do Texto:</label>
                        
                        
                        <input type="color" name="css_header_text_color" value="#ffffff" id="id_css_header_text_color" class="custom-control">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_css_module_text_color">Corpo da Página - Cor do Texto:</label>
                        
                        
                        <input type="color" name="css_module_text_color" value="#212529" id="id_css_module_text_color" class="custom-control">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_css_module_link_color">Corpo da Página - Cor dos Links:</label>
                        
                        
                        <input type="color" name="css_module_link_color" value="#007bff" id="id_css_module_link_color" class="custom-control">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_css_save_button_background_color">Botão Principal - Cor de Fundo:</label>
                        
                        
                        <input type="color" name="css_save_button_background_color" value="#17a2b8" id="id_css_save_button_background_color" class="custom-control">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_css_save_button_text_color">Botão Principal - Cor do Texto:</label>
                        
                        
                        <input type="color" name="css_save_button_text_color" value="#ffffff" id="id_css_save_button_text_color" class="custom-control">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_css_delete_button_background_color">Botão Secundário - Cor de Fundo:</label>
                        
                        
                        <input type="color" name="css_delete_button_background_color" value="#ff8d60" id="id_css_delete_button_background_color" class="custom-control">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_css_delete_button_text_color">Botão Secundário - Cor do Texto:</label>
                        
                        
                        <input type="color" name="css_delete_button_text_color" value="#ffffff" id="id_css_delete_button_text_color" class="custom-control">
                      </div>
                    </div>
                    
                  </div>
                </div>

                <div class="form-body">
                  <h4 class="form-section"><i class="icon-home"></i>Imagens</h4>

                  
                    <div class="row">
                      
                      

                        
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_imagem">Imagem destacada na tela inicial de agendamento:</label>
                          
                          
                          <input type="file" name="imagem" accept="image/*" class="form-control custom-control" id="id_imagem">
                          Recomendamos imagem com tamanho até 500kb para melhor velocidade de carregamento da página
                        </div>
                        <hr>
                      </div>
                      
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_background_img">Imagem de Fundo:</label>
                          
                          
                          <input type="file" name="background_img" accept="image/*" class="form-control custom-control" id="id_background_img">
                          Recomendamos imagem com tamanho até 500kb para melhor velocidade de carregamento da página
                        </div>
                        <hr>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_logo">Logotipo:</label>
                          
                          
                          <input type="file" name="logo" accept="image/*" class="form-control custom-control" id="id_logo">
                          Recomendamos imagem com tamanho 30x30
                        </div>
                        <hr>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="id_favicon">Favicon:</label>
                          
                          
                          <input type="file" name="favicon" class="form-control custom-control" id="id_favicon">
                          (.ico|.png|.gif - 16x16|32x32 px)
                        </div>
                        <hr>
                      </div>
                      
                    </div>
                  
                </div>


                <div class="form-body">
                  <h4 class="form-section"><i class="icon-users"></i>Links para Redes Sociais</h4>
                  <h6>Os links são exibidos no rodapé da sua tela de agendamento</h6>
                  <div class="row">
                    

                      
                    
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_linkedin_page">Página no Linkedin:</label>
                        
                        
                        <input type="url" name="linkedin_page" maxlength="250" id="id_linkedin_page" class="custom-control form-control mb-3">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_instagram_page">Página no Instagram:</label>
                        
                        
                        <input type="url" name="instagram_page" maxlength="250" id="id_instagram_page" class="custom-control form-control mb-3">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_facebook_page">Página no Facebook:</label>
                        
                        
                        <input type="url" name="facebook_page" maxlength="250" id="id_facebook_page" class="custom-control form-control mb-3">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_twitter_page">Página no Twitter:</label>
                        
                        
                        <input type="url" name="twitter_page" maxlength="250" id="id_twitter_page" class="custom-control form-control mb-3">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_youtube_page">Canal no YouTube:</label>
                        
                        
                        <input type="url" name="youtube_page" maxlength="250" id="id_youtube_page" class="custom-control form-control mb-3">
                      </div>
                    </div>
                    
                  </div>
                </div>

                <div class="form-body">
                  <h4 class="form-section"><i class="icon-home"></i>Endereço</h4>
                  <h6>Seu endereço principal de atendimento. É exibido na tela de agendamento e usado como endereço padrão em suas agendas. Caso você tenha cadastrado unidades de atendimento com endereços diferentes, será considerado o endereço da unidade.</h6>
                  <div class="row">
                    

                      
                  </div>
                  <div class="row">
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_cep">CEP:</label>
                        
                        
                        <input type="text" name="cep" data-mask="00000-000" maxlength="9" class="form-control custom-control mb-3" id="id_cep" autocomplete="off">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_street">Endereço:</label>
                        
                        
                        <input type="text" name="street_f" id="id_street" maxlength="100" class="form-control custom-control mb-3">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_number">Número:</label>
                        
                        
                        <input type="text" name="number" maxlength="10" class="form-control custom-control mb-3" id="id_number">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_complement">Complemento (ex: Apt 201, Bl B):</label>
                        
                        
                        <input type="text" name="complement" maxlength="200" class="form-control custom-control mb-3" id="id_complement">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_neighbourhood">Bairro:</label>
                        
                        
                        <input type="text" name="neighbourhood_f" id="id_neighbourhood" maxlength="100" class="form-control custom-control mb-3">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_district">Distrito:</label>
                        
                        
                        <input type="text" name="district" maxlength="100" class="form-control custom-control mb-3" id="id_district">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_city">Município:</label>
                        
                        
                        <input type="text" name="city_f" id="id_city" maxlength="100" class="form-control custom-control mb-3">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="id_state">Estado:</label>
                        
                        
                        <select name="state" maxlength="2" class="form-control mb-3" id="id_state">
  <option value="" selected=""></option>

  <option value="AC">Acre</option>

  <option value="AL">Alagoas</option>

  <option value="AP">Amapá</option>

  <option value="AM">Amazonas</option>

  <option value="BA">Bahia</option>

  <option value="CE">Ceará</option>

  <option value="DF">Distrito Federal</option>

  <option value="ES">Espírito Santo</option>

  <option value="GO">Goiás</option>

  <option value="MA">Maranhão</option>

  <option value="MT">Mato Grosso</option>

  <option value="MS">Mato Grosso do Sul</option>

  <option value="MG">Minas Gerais</option>

  <option value="PA">Pará</option>

  <option value="PB">Paraíba</option>

  <option value="PR">Paraná</option>

  <option value="PE">Pernambuco</option>

  <option value="PI">Piauí</option>

  <option value="RJ">Rio de Janeiro</option>

  <option value="RN">Rio Grande do Norte</option>

  <option value="RS">Rio Grande do Sul</option>

  <option value="RO">Rondônia</option>

  <option value="RR">Roraima</option>

  <option value="SC">Santa Catarina</option>

  <option value="SP">São Paulo</option>

  <option value="SE">Sergipe</option>

  <option value="TO">Tocantins</option>

</select>
                      </div>
                    </div>
                    
                  </div>
                </div>

                <!--

                

                

                <p><label for="id_cep">CEP:</label> <input type="text" name="cep" data-mask="00000-000" maxlength="9" class="form-control" id="id_cep"></p>
<p><label for="id_street">Endereço:</label> <input type="text" name="street_f" id="id_street" name="street" maxlength="100" class="form-control"></p>
<p><label for="id_number">Número:</label> <input type="text" name="number" maxlength="10" class="form-control" id="id_number"></p>
<p><label for="id_complement">Complemento (ex: Apt 201, Bl B):</label> <input type="text" name="complement" maxlength="200" class="form-control" id="id_complement"></p>
<p><label for="id_neighbourhood">Bairro:</label> <input type="text" name="neighbourhood_f" id="id_neighbourhood" name="neighbourhood" maxlength="100" class="form-control"></p>
<p><label for="id_district">Distrito:</label> <input type="text" name="district" maxlength="100" class="form-control" id="id_district"></p>
<p><label for="id_city">Município:</label> <input type="text" name="city_f" id="id_city" name="city" maxlength="100" class="form-control"></p>
<p><label for="id_state">Estado:</label> <select name="state" maxlength="2" class="form-control" id="id_state">
  <option value="" selected></option>

  <option value="AC">Acre</option>

  <option value="AL">Alagoas</option>

  <option value="AP">Amapá</option>

  <option value="AM">Amazonas</option>

  <option value="BA">Bahia</option>

  <option value="CE">Ceará</option>

  <option value="DF">Distrito Federal</option>

  <option value="ES">Espírito Santo</option>

  <option value="GO">Goiás</option>

  <option value="MA">Maranhão</option>

  <option value="MT">Mato Grosso</option>

  <option value="MS">Mato Grosso do Sul</option>

  <option value="MG">Minas Gerais</option>

  <option value="PA">Pará</option>

  <option value="PB">Paraíba</option>

  <option value="PR">Paraná</option>

  <option value="PE">Pernambuco</option>

  <option value="PI">Piauí</option>

  <option value="RJ">Rio de Janeiro</option>

  <option value="RN">Rio Grande do Norte</option>

  <option value="RS">Rio Grande do Sul</option>

  <option value="RO">Rondônia</option>

  <option value="RR">Roraima</option>

  <option value="SC">Santa Catarina</option>

  <option value="SP">São Paulo</option>

  <option value="SE">Sergipe</option>

  <option value="TO">Tocantins</option>

</select></p>

                -->

                
                  <button type="submit" class="btn btn-raised btn-raised btn-primary">Salvar</button>
                  <a href="/painel/" class="btn btn-info">Voltar</a>
                

            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<script>
  //$('input').addClass('form-control mb-3');
  $('input').addClass('custom-control');
  $('input[type=text]').addClass('form-control mb-3');
  $('input[type=url]').addClass('form-control mb-3');
  $('select').addClass('form-control mb-3');
  $('#id_label').on('keypress', function(e) {
      if (e.which == 32){
          console.log('Space Detected');
          return false;
      }

  });

  var main_img = document.getElementById("id_imagem");
  main_img.onchange = function() {
      if(this.files[0].size > 1048576){
         alert("O tamanho da imagem é muito grande. O arquivo deve possuir no máximo 1MB!");
         this.value = "";
      };
  };
  var back_img = document.getElementById("id_background_img");
  back_img.onchange = function() {
      if(this.files[0].size > 1048576){
         alert("O tamanho da imagem é muito grande. O arquivo deve possuir no máximo 1MB!");
         this.value = "";
      };
  };
  var logo_img = document.getElementById("id_logo");
  logo_img.onchange = function() {
      if(this.files[0].size > 1048576){
         alert("O tamanho da imagem é muito grande. O arquivo deve possuir no máximo 1MB!");
         this.value = "";
      };
  };
  var fav_img = document.getElementById("id_favicon");
  fav_img.onchange = function() {
      if(this.files[0].size > 1048576){
         alert("O tamanho da imagem é muito grande. O arquivo deve possuir no máximo 1MB!");
         this.value = "";
      };
  };
</script>


            </div>
          </div>