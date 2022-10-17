var organization
var use_captcha
var client_id

function success(title,text){
   swal(title, text, "success");
};

function error(title,text){
   swal(title, text, "error");
};


$(document).ready( function(){

    var pass_code = false;
    $(".icons-tab-steps").steps({
        headerTag: "h6",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: 'Enviar',
            next: 'Próximo',
            previous: 'Anterior',
        },
        onStepChanging: function (event, currentIndex, newIndex)
        {   
            if(currentIndex==0){
                $("#submit").prop('disabled',false);

                if($("#id_hora").val()<1 || $("#id_hora").val()=='' ){
                    error("Atenção!","Selecione um horário para continuar");
                    return false;
                }
                if(pass_code){
                    pass_code = false;
                    return true;
                }
                if (use_captcha == true) {
                    if( recaptcha_rendered ) {
                            hcaptcha.reset();
                        } else {
                            hcaptcha.render( 'hcaptcha', {
                                'sitekey': '9bc48965-8982-4e96-afd3-03a823d15e37',
                                'callback': 'recaptchaOnData',
                                'expired-callback': 'recaptchaOnExpiry'
                            } );
                            recaptcha_rendered = true;
                        }}
                if($('#id_pass_agenda').prop('required')){
                    $.ajax({
                        type: 'POST',
                        headers: { "X-CSRFToken": csrftoken },
                        url: "/agendamentos/code/",
                        data: {
                            "id":$('#id_agenda option:selected').val(),
                            "code":$('#id_pass_agenda')[0].value,
                            },
                        success: function (response) {
                            //console.log(response);
                            pass_code = true;
                            $(".icons-tab-steps").steps("next");
                            $('a[href="#previous"]').show()
                            $('#btn_back').hide()
                            return true;
                        },
                        error: function (response) {
                            currentIndex = 0;
                            newIndex = 0;
                            error("Atenção!","Código de Agendamento Inválido");
                            return false;
                        }
                    })
               
                //if(!check_code){
                 //   error("Atenção!","Código de Agendamento Inválido");
                 //   return false   
                //}

                }else{
                    $('a[href="#previous"]').show()
                    $('#btn_back').hide()
                    return true;
                }

            }else{
                $('a[href="#previous"]').hide()
                $('#btn_back').show()
                return true;
            }
                /*
                if (document.getElementById('available_time').selectedIndex == 0){
                    error("Atenção!","Selecione um horário para continuar");
                    return false
                }

                if (document.getElementById('available_date').selectedIndex == 0){
                    error("Atenção!","Selecione uma data para continuar");
                    return false
                }

                if (document.getElementById('div_label_pass_code').style.display == "block"){
                    if ($('#sup_pass_code')[0].value==''){
                    error("Atenção!","Você precisa ter o código de agendamento! Entre em contato com o responsável pelo atendimento");
                    return false
                    }
                }

                //check_code = validate_code($('#appointment_type option:selected').val(),'');
                 $.ajax({
                        type: 'POST',
                        headers: { "X-CSRFToken": csrftoken },
                        url: "/agendamentos/code/",
                        data: {
                            "id":$('#appointment_type option:selected').val(),
                            "code":$('#sup_pass_code')[0].value,
                            },
                        success: function (response) {
                            //console.log(response);
                            //pass_code = '1';
                        },
                        error: function (response) {
                            error("Atenção!","Código de Agendamento Inválido");
                            window.location.reload();
                            //currentIndex = '0';    
                        }
                    })

                //if(!check_code){
                 //   error("Atenção!","Código de Agendamento Inválido");
                 //   return false   
                //}
            }
            if(currentIndex>0){
                checkcpf = check_cpf();
                checkfull = check_fullname();
                checkphone = check_phone();
                cpf = $('#cpf').val();
                birth_date = $('#birth_date').val();
                checkemail = validade_email();

                if (document.getElementById('address_form').style.display == "block"){
                    id_cep = $('#id_cep').val();
                    id_street = $('#id_street').val();
                    id_number = $('#id_number').val();
                    id_neighbourhood = $('#id_neighbourhood').val();
                    id_state = $('#id_state').val();
                    id_city = $('#id_city').val();

                    if(!id_cep){
                        error("Atenção!","CEP não pode ser vazio");
                        return false
                    }

                    if(!id_street){
                        error("Atenção!","Endereço não pode ser vazio");
                        return false
                    }

                    if(!id_number){
                        error("Atenção!","Número não pode ser vazio");
                        return false
                    }

                    if(!id_neighbourhood){
                        error("Atenção!","Bairro não pode ser vazio");
                        return false
                    }

                    if(!id_state){
                        error("Atenção!","Estado não pode ser vazio");
                        return false
                    }

                    if(!id_city){
                        error("Atenção!","Cidade não pode ser vazio");
                        return false
                    }


                }

                if (document.getElementById('cpf_form').style.display == "block"){
                    if(!cpf){
                        error("Atenção!","CPF não pode ser vazio");
                        return false
                    }
                    if(!checkcpf){
                        error("Atenção!","CPF inválido");
                        return false
                    }
                }

                if (document.getElementById('birthday_form').style.display == "block"){

                    console.log("BIRTHDATE");
                    console.log($('#birth_date').val());

                    if(!birth_date){
                        error("Atenção!","Data de nascimento não pode ser vazio");
                        $(".invalid_birthday").show();
                        return false
                    }
                }

                if(!checkemail){
                    error("Atenção!","E-mail inválido");
                    return false
                }

                if(!checkfull){
                    error("Atenção!","Nome inválido");
                    return false
                }

                if(!checkphone){
                    console.log("te")
                    error("Atenção!","Telefone inválido");
                    return false
                }
            }

            if (document.getElementById('available_time').selectedIndex == 0){
                error("Atenção!","Selecione um horário para continuar");
                return false
            }

            if (document.getElementById('available_date').selectedIndex == 0){
                error("Atenção!","Selecione uma data para continuar");
                return false
            }

            if(newIndex==3){
                if($('#sup_text')[0].value=='' && $('#label_text').text()!=''){
                    error("Atenção!","Informe os dados adicionais solicidados");
                    return false
                }
                $("#confirm").html("");

                var appointment_type = $('#appointment_type option:selected').text();
                var available_date = $('#available_date option:selected').text();

                var time = $('#available_time option:selected').text();
                $("#confirm").append("Tipo do agendamento: "+appointment_type);
                $("#confirm").append("<br>");
                $("#confirm").append("Dia: "+available_date );
                $("#confirm").append("<br>");
                $("#confirm").append("Hora: "+time );

            }*/
            
        },
        onFinished: function (event, currentIndex) {
            
            /*if($('#sup_text')[0].value=='' && $('#label_text').text()!=''){
                    error("Atenção!","Informe os dados adicionais solicidados");
                    return false
                }

            if (document.getElementById('cpf_form').style.display == "block"){
                cpf = $('#cpf').val();
                //if(cpf){
                //    loading();
                //    $("#submit").click();
                //    $("#submit").prop('disabled',true);
                //}
                //else
                if (!cpf)
                {
                    error("Atenção!","Ocorreu um erro, o CPF não pode ser vazio");
                    return false
                }
            }*/
            if (use_captcha == true){
                var recaptcha = hcaptcha.getResponse();
                   if (recaptcha === "") {
                      event.preventDefault();
                      hcaptcha.reset();
                      swal({
                            title: "Marque a opção 'Não sou robô'"
                        })
                      return false
                   }
                }
            if($('#aceite').prop("checked") == false){
            //error("Atenção!","Aceite os termos de uso");
                swal({
                    title: "Uso de Dados",
                    //text: "Declaro estar ciente e de acordo que meus dados pessoais são coletados com finalidade de permitir o agendamento de atendimento e serão armazenados, utilizados e descartados de acordo com os Termos de Uso e a Política de Privacidade, sempre respeitando as normas de segurança da informação e disposições da Lei 13.709/18 – Lei Geral de Proteção de Dados Pessoais (LGPD)",
                    html: "Declaro estar ciente e de acordo que meus dados pessoais são coletados com finalidade de permitir o agendamento de atendimento e serão armazenados, utilizados e descartados de acordo com os <a href='/termos-de-uso' target='_blank'>Termos de Uso</a> e a <a href='/politica-de-privacidade' target='_blank'>Política de Privacidade</a>, sempre respeitando as normas de segurança da informação e disposições da Lei 13.709/18 – Lei Geral de Proteção de Dados Pessoais (LGPD)",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#0CC27E',
                    cancelButtonColor: '#FF586B',
                    confirmButtonText: 'Sim',
                    cancelButtonText: "Não"
                        }).then(function (isConfirm) {
                            //$("#submit_create").click();
                            document.getElementById("aceite").checked = true
                            /*loading();*/
                             $("#submit").click();    
                             /*$("#submit").prop('disabled',true);*/
                        })
                return false
            }
            //else{
                 /*loading();*/
                 $("#submit").click();    
                 /*$("#submit").prop('disabled',true);*/
            //}
        },
    });

    //disable back
    $('a[href="#previous"]').hide()

    // To select event date
    $('.pickadate').pickadate();
 });


 $(document).ready( function(){

    $(".icons-tab-steps-config").steps({
        headerTag: "h6",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: 'Enviar',
            next: 'Próximo',
            previous: 'Anterior',
        },
        onStepChanging: function (event, currentIndex, newIndex)
        {

            if(newIndex==3){


            }
            return true;
        },
        onFinished: function (event, currentIndex) {
            loading();
            $('#submit_add_form').click();
        },
    });

    function ajax_refresh_dates()
   {
      var url = '/agendamentos/available_days/';  // get the url of the `load_cities` view
      var app_type_id = $("#id_agenda").val();
      var app_subtype_id = $("#id_servico").val();
      var id_client = client_id;
      $("#id_hora").empty()
      $("#id_dia").empty()

      if(app_type_id>0){

      $.ajax({                       // initialize an AJAX request
        url: url,                    // set the url of the request (= localhost:8000/hr/ajax/load-cities/)
        data: {
          'app_type_id':app_type_id,
          'app_subtype_id':app_subtype_id,
          'internal':false,
          'client_id':id_client
        },
        success: function (data) {   // `data` is the return of the `load_cities` view function
          $("#id_dia").html(data);  // replace the contents of the city input with the data that came from the server
        }
      })
    }

   }
   $("#id_agenda").change(function () {
      //var url = '/agendamentos/services/';  // get the url of the `load_cities` view
      var url = '/agendamentos/appointment_form/';
      var appId = $(this).val();  // get the selected country ID from the HTML input
      var organization_id = organization;
      var id_client = client_id;
      $("#id_servico").empty()
      $("#id_dia").empty()
      $("#id_hora").empty()

      if(appId>0){
      $.ajax({                       // initialize an AJAX request
        url: url,                    // set the url of the request (= localhost:8000/hr/ajax/load-cities/)
        data: {
          'app_type_id': appId,       // add the country id to the GET parameters
          'organization':organization_id,
          'internal':false
        },
        success: function (data) {   // `data` is the return of the `load_cities` view function
          $("#form_agenda").html(data);
          ajax_refresh_dates()
        }
      });

      $.ajax({                       // initialize an AJAX request
        url: '/agendamentos/get_forms/',                    // set the url of the request (= localhost:8000/hr/ajax/load-cities/)
        data: {
          'app_type_id': appId,       // add the country id to the GET parameters
          'organization':organization_id,
          'internal':false,
          'client_id':id_client
        },
        success: function (data) {   // `data` is the return of the `load_cities` view function
          $("#form_dados").html(data);  // replace the contents of the city input with the data that came from the server
        }
      });
    }
      //inicializar formulário de dados pessoais

    });

   $("#form_agenda").on('change','#id_servico',function () {
      var url = '/agendamentos/available_time_new/';  // get the url of the `load_cities` view
      var dayId = $("#id_dia").val();  // get the selected country ID from the HTML input
      var app_type_id = $("#id_agenda").val();
      var app_subtype_id = $("#id_servico").val();
      $("#id_hora").empty()
      if(app_subtype_id>0 && dayId>0){
      $.ajax({                       // initialize an AJAX request
        url: url,                    // set the url of the request (= localhost:8000/hr/ajax/load-cities/)
        data: {
          'day_id': dayId,       // add the country id to the GET parameters
          'app_type_id':app_type_id,
          'app_subtype_id':app_subtype_id,
          'internal':false
        },
        success: function (data) {   // `data` is the return of the `load_cities` view function
          $("#id_hora").html(data);  // replace the contents of the city input with the data that came from the server
        }
      });
      }
    });


   $("#form_agenda").on('change','#id_dia', function () {
      var url = '/agendamentos/available_time_new/';  // get the url of the `load_cities` view
      var dayId = $(this).val();  // get the selected country ID from the HTML input
      var app_type_id = $("#id_agenda").val();
      var app_subtype_id = $("#id_servico").val();
      $("#id_hora").empty()
      if(dayId>0 && app_type_id>0){
      $.ajax({                       // initialize an AJAX request
        url: url,                    // set the url of the request (= localhost:8000/hr/ajax/load-cities/)
        data: {
          'day_id': dayId,       // add the country id to the GET parameters
          'app_type_id':app_type_id,
          'app_subtype_id':app_subtype_id,
          'internal':false
        },
        success: function (data) {   // `data` is the return of the `load_cities` view function
          $("#id_hora").html(data);  // replace the contents of the city input with the data that came from the server
        }
      });
      }

    });

    // To select event date
    $('.pickadate').pickadate();
 });