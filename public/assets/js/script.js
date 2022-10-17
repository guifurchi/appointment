(function(win,doc){
    'use strict';

    //Delete
    function confirmDel(event)
    {

        event.preventDefault();
        console.log(window.location.pathname);
        
        let token=document.getElementsByName("_token")[0].value;
        if(confirm("Deseja mesmo cancelar agendamento?")){
            console.log(event.target.parentNode.href)
           let ajax=new XMLHttpRequest();
           ajax.open("get",event.target.parentNode.href);
           ajax.setRequestHeader('X-CSRF-TOKEN',token);
           ajax.onreadystatechange=function(){
               if(ajax.readyState === 4 && ajax.status === 200){
                   console.log('feito')
                   window.location.href= window.location.pathname;
               }
           };
           ajax.send();
        }else{
            return false;
        }
    }
    if(document.querySelector('.js-del')){
        let btn=document.querySelectorAll('.js-del');
        for(let i=0; i < btn.length; i++){
            btn[i].addEventListener('click',confirmDel,false);
        }
    }
})(window,document);


function redirect_register(){
    var organization = organization = window.location.search.split("/").pop()
    if (organization !== ""){
        var url = window.location.origin + "/accounts/signup?next=/agendamentos/novo/"+organization
    }else{
        var url = window.location.origin + "/users/tipo_conta/"
    }
    window.location.replace(url);
}

function back_to_login(){
    var organization = organization = window.location.search.split("/").pop()
    var url = window.location.origin + "/accounts/login?next=/agendamentos/novo/"+organization
    window.location.replace(url);
}


function append_inputs(item, index, arr) {
    $('#files').append("<label>"+item+"</label><input type='file' class='form-control-file' name="+item+">");
    $('#files').append("<br>");
}

function add_dates(value, index, array) {
    var x = document.getElementById("available_date");
    var option = document.createElement("option");
    option.text = value;
    x.add(option);
}

function add_time(value, index, array) {
    var x = document.getElementById("available_time");
    var option = document.createElement("option");
    option.text = value;
    x.add(option);
}

function add_time_choose_option() {
    $("#available_time").empty();
    var x = document.getElementById("available_time");
    var option = document.createElement("option");
    option.text = "Escolha o horário";
    x.add(option);
}

function add_dates_choose_option() {
    $("#available_date").empty();
    var x = document.getElementById("available_date");
    var option = document.createElement("option");
    option.text = "Escolha o dia";
    option.value = 0;
    x.add(option);
}

function add_dates_no_option() {
    $("#available_date").empty();
    var x = document.getElementById("available_date");
    var option = document.createElement("option");
    option.text = "Não há opções de agendamento no momento";
    x.add(option);
}

function add_time_no_option() {
    $("#available_time").empty();
    var x = document.getElementById("available_time");
    var option = document.createElement("option");
    option.text = "Não há opções de horário nesse dia";
    x.add(option);
}


$(document).ready(function() {
    if(document.getElementById('err_msg').innerText != ""){
        error("Erro",document.getElementById('err_msg').innerText);
    }

    $('#appointment_subtype').on('change', function() {
        $('#available_date').prop('selectedIndex', 0);
        $('#available_time').prop('selectedIndex', 0);

    })

    var sub_types_count = 0;
    $('#appointment_type').on('change', function() {
        $('#appointment_subtype').prop('selectedIndex', 0);
        $('#available_date').prop('selectedIndex', 0);
        $('#available_time').prop('selectedIndex', 0);

        var id = $('#appointment_type').val();

        if(id==0||id==''||id== '-----Selecione-----'){
            document.getElementById("subtype").style.display = "none";
            $("#available_date").empty()
            add_dates_choose_option()
            $("#available_time").empty()
            add_time_choose_option()
            return false
        }

        var documents_types = ""
        var organization = window.location.pathname.split("/").pop()
        var j;
        var list_servicos = document.getElementById("appointment_subtype")
        for (j = 0; j < list_servicos.length; j++){
            list_servicos[j].hidden=true; 
            list_servicos[j].disabled=true; 
        }

        $.ajax({
            type: 'POST',
            headers: { "X-CSRFToken": csrftoken,"cache-control":"no-cache" },
            url: "/agendamentos/documents_type/",
            data: {
                "id":id,
                "organization":organization
            },
            success: function (response) {
                //console.log(response);
                documents_types = response.documents_types;
                if (response.available_dates.length == 0){
                    add_dates_no_option()
                }else{
                    add_dates_choose_option()
                }
                if (response.servicos.length > 0){
                    document.getElementById("subtype").style.display = "block";
                    var list_servicos = document.getElementById("appointment_subtype")
                    var i,k;
                    sub_types_count = 0;
                    for (i = 0; i < response.servicos.length; i++){
                        for (j = 0; j < list_servicos.length; j++){
                            if (response.servicos[i] == list_servicos[j].value){
                                list_servicos[j].hidden=false;
                                list_servicos[j].disabled=false; 
                                sub_types_count = sub_types_count + 1;
                                k=j;
                                break ;
                            }
                        }
                    }
                    if (sub_types_count==1){
                        list_servicos.selectedIndex=k;
                    }
                }else{
                    sub_types_count = 0;
                    document.getElementById("subtype").style.display = "none";
                }
                add_time_choose_option()
                document.getElementById("sup_info").innerText=response.additional_info;
                document.getElementById("label_text").innerText=response.textos;
                if (response.textos.length > 0){
                    document.getElementById("sup_text").style.visibility = "visible";
                }else{
                    document.getElementById("sup_text").style.visibility = "hidden";
                }
                response.available_dates.forEach(add_dates);
                $('#files').html("");
                documents_types.forEach(append_inputs);

                if (response.appointment_type.request_cpf == true){
                    document.getElementById("cpf_form").style.display = "block";
                }else{
                    document.getElementById("cpf_form").style.display = "none";
                }
                if (response.appointment_type.b_recorrencia == true){
                    document.getElementById("form_recorrencia").style.display = "block";
                }else{
                    document.getElementById("form_recorrencia").style.display = "none";
                }
                if (response.appointment_type.b_multiple_people == true || response.appointment_type.b_acc_people == true){
                    document.getElementById("form_acompanhantes").style.display = "block";
                }else{
                    document.getElementById("form_acompanhantes").style.display = "none";
                }
                if (response.appointment_type.b_multiple_people == true){
                    document.getElementById("qtde_acompanhantes").style.display = "block"; 
                }else{
                    document.getElementById("qtde_acompanhantes").style.display = "none";
                }
                if (response.appointment_type.b_acc_people == true){
                    document.getElementById("qtde_acompanhantes").style.display = "none";
                    document.getElementById("list_acompanhantes").style.display = "block";
                }else{
                    document.getElementById("list_acompanhantes").style.display = "none";
                }
                //console.log(response)

                if (response.requer_codigo == true){
                    document.getElementById("div_label_pass_code").style.display = "block";
                }else{
                    document.getElementById("div_label_pass_code").style.display = "none";    
                }

                if (response.appointment_type.att_local == false){
                    document.getElementById("address_form").style.display = "block";
                }else{
                    document.getElementById("address_form").style.display = "none";
                }

                if (response.appointment_type.request_data_nascimento == true){
                    document.getElementById("birthday_form").style.display = "block";
                }else{
                    document.getElementById("birthday_form").style.display = "none";
                }
                if (response.appointment_type.b_solicita_add == true){
                    document.getElementById("div_label_text_extra").style.display = "block";
                }else{
                    document.getElementById("div_label_text_extra").style.display = "none";
                }

            },
            error: function (response) {
                //console.log(response)
            }
        })
    });

    $('#available_date').on('change', function() {
        var day = $('#available_date').val();
        if(day==0||day == ''){
            return false;
        }


        var documents_types = ""
        var id = $('#appointment_type').val();
        var id_subtype = $('#appointment_subtype').val();
        var organization = window.location.pathname.split("/").pop()

        if (sub_types_count > 1){
            if (id_subtype == 0||!id_subtype){
                error("Atenção!",document.getElementById("appointment_subtype")[0].text);
                document.getElementById('available_date').selectedIndex = 0;
                return false
            }
        }

        $.ajax({
            type: 'POST',
            headers: { "X-CSRFToken": csrftoken,"cache-control":"no-cache"  },
            url: "/agendamentos/available_time/",
            data: {
                "id":id,
                "id_subtype":id_subtype,
                "day":day,
                "organization":organization,
                },
            success: function (response) {
               if (!response){
                    add_time_no_option()
               }else{
               add_time_choose_option()
               response.forEach(add_time);
               //console.log(response);
               }
            },
            error: function (response) {
                //console.log(response)
            }
        })
    });
});

//CONFIGURA OS CARDS DO agendamentos/configurar/
function checkWidth(init)
{
    if ($(window).width() < 800) {
        $('.config_card').removeClass('col-6');
        $('.config_card').addClass('col-12');
    }
    else {
         $('.config_card').removeClass('col-12');
         $('.config_card').addClass('col-6');
    }
}

$(document).ready(function() {
    checkWidth(true);

    $(window).resize(function() {
        checkWidth(false);
    });
});

