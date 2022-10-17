
$(document).ready(function() {

    $(".cliente_not_found").hide();
    $(".invalid_name").hide();
    $(".invalid_phone").hide();
    $(".invalid_email").hide();
  
  });
  
  
  function success(title,text){
     swal(title, text, "success");
  };
  
  function error(title,text){
     swal(title, text, "error");
  };
  
  
  function check_create_fields(){
  
      var cpf = $('#cpf').val();
      var name = $('#name').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
      var appointment_type = $('#appointment_type').val();
      var available_date = $('#available_date').val();
      var available_time = $('#available_time').val();
  
  
      if (document.getElementById('appointment_type').selectedIndex == 0){
          error("Error","Selecione um agendamento para continuar");
          return false
      }
  
      if (document.getElementById('appointment_subtype').selectedIndex == 0 && document.getElementById("appointment_subtype").style.display == "block"){
          error("Error","Selecione um serviço");
          return false
      }
  
      if (document.getElementById('available_date').selectedIndex == 0){
          error("Error","Selecione uma data para continuar");
          return false
      }
  
      if (document.getElementById('available_time').selectedIndex == 0){
          error("Error","Selecione uma horário para continuar");
          return false
      }
  
      cpf_valid = validade_cpf()
  
      email_valid = validade_email(email)
  
      //console.log(cpf_valid,email_valid)
      if(!name || !available_time || !available_date || !appointment_type ){
          error("validação de Dados","Preencha pelo menos o nome da pessoa");
          return
      }
      if(!email_valid || !phone || !cpf_valid){
          swal({
          title: "Confirmar",
          text: "Prosseguir sem preencher todos os dados da pessoa?",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#0CC27E',
          cancelButtonColor: '#FF586B',
          confirmButtonText: 'Sim',
          cancelButtonText: "Não"
              }).then(function (isConfirm) {
                  $("#submit_create").click();
              })}
      else{
  
          if (document.getElementById('cpf_form').style.visibility == "visible"){
                      if(!cpf){
                          error("Erro","CPF não pode ser vazio");
                          return false
                      }
                      if(!cpf_valid){
                          error("Erro","CPF inválido");
                          return false
                      }
                  }
  
          if(!email_valid){
              error("Erro de validação","E-mail Inválido");
              return
          }
  
  
          if(!phone || !available_time || !available_date || !appointment_type || !email || !name ){
              error("Erro de validação","Preencha todos os campos");
              return
          }
  
          $("#submit_create").click();
      }
  }
  
  function find_cpf(){
      var cpf = $('#cpf').val();
      var name = $('#name').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
  
      if(cpf.length<14){
          return
      }
  
      $.ajax({
          type: 'POST',
          headers: { "X-CSRFToken": csrftoken },
          url:"/agendamentos/find_cpf/",
          data: {
              "cpf":cpf,
          },
          success: function (response) {
              if(response=="Not found"){
                  console.log(response)
                  $(".cliente_not_found").show();
                  return
              }
              $(".cliente_not_found").hide();
              $('#name').val(response.name);
              $('#email').val(response.email);
              $('#phone').val(response.phone);
  
              console.log(response);
          },
          error: function (response) {
              console.log(response)
          }
      })
  }
  
  function find_person(){
      var busca = $('#search').val();
      
  
      if(busca.length<5){
          return
      }
  
      $.ajax({
          type: 'POST',
          headers: { "X-CSRFToken": csrftoken },
          url:"/agendamentos/find_person/",
          data: {
              "busca":busca,
          },
          success: function (response) {
              if(response=="Not found"){
                  console.log(response)
                  var table = document.getElementById("result_table");
                  table.innerHTML = "Nenhuma pessoa encontrada";
                  return
              }
              //$(".cliente_not_found").hide();
              console.log(response)
              var table = document.getElementById("result_table");
              table.innerHTML = "";
              //var header = table.createTHead();
              //var row = header.insertRow(0);
              //var cell1 = row.insertCell(0).innerHTML="Nome";
              //var cell2 = row.insertCell(1).innerHTML="Email";
              //var cell3 = row.insertCell(2).innerHTML="CPF";
              //var cell4 = row.insertCell(3).innerHTML="Telefone";
              //var header = table.createTHead();
              for (i = 0; i < response.length; i++){
                  var row = table.insertRow(i);
                  var cell1 = row.insertCell(0);
                  var cell2 = row.insertCell(1);
                  var cell3 = row.insertCell(2);
                  var cell4 = row.insertCell(3);
                  var cell5 = row.insertCell(4);
                  cell1.innerHTML = response[i].name;
                  cell2.innerHTML = response[i].email;
                  cell3.innerHTML = response[i].cpf;
                  cell4.innerHTML = response[i].phone;
                  cell5.innerHTML = response[i].person_id;
                  cell5.style.display = 'none';
                  row.onclick  = function(){
                      selectClient(this);
                  };
              }
              //$('#name').val(response.name);
              //$('#email').val(response.email);
              //$('#phone').val(response.phone);
  
              console.log(response);
          },
          error: function (response) {
              console.log(response)
          }
      })
  }
  
  function check_name(){
  
      var name =  $('#name').val();
      if(!name){
          $(".invalid_name").show();
          return
      }
      $(".invalid_name").hide();
  
  }
  
  function selectClient(tableCell) {
      $('#name').val(tableCell.cells[0].innerHTML);
      $('#email').val(tableCell.cells[1].innerHTML);
      $('#cpf').val(tableCell.cells[2].innerHTML);
      $('#phone').val(tableCell.cells[3].innerHTML);
      $('#person_id').val(tableCell.cells[4].innerHTML);
      $('#id_name').val(tableCell.cells[0].innerHTML);
      $('#id_email').val(tableCell.cells[1].innerHTML);
      $('#id_cpf').val(tableCell.cells[2].innerHTML);
      $('#id_old_phone').val(tableCell.cells[3].innerHTML);
      $('#person_id').val(tableCell.cells[4].innerHTML);
      format_cpf()
      var table = document.getElementById("result_table");
      table.innerHTML = "";
      $.ajax({                       // initialize an AJAX request
          url: '/agendamentos/get_forms/',                    // set the url of the request (= localhost:8000/hr/ajax/load-cities/)
          data: {
            'app_type_id':$("#id_agenda").val(),      // add the country id to the GET parameters
            'incluir':true,
            'internal':true,
            'person_id':$('#person_id').val()
          },
          success: function (data) {   // `data` is the return of the `load_cities` view function
            console.log(data)
            $("#form_dados").html(data);  // replace the contents of the city input with the data that came from the server
          }
        });
  }
  
  function check_email(){
      var email =  $('#email').val();
      email = validade_email(email)
      if(!email){
          $(".invalid_email").show();
          return
      }
      $(".invalid_email").hide();
  }
  
  function check_phone(){
      var phone =  $('#phone').val();
      var phone_num = phone.replace(/\D/g, "");
      if(phone_num.length<10){
          $(".invalid_phone").show();
          return false
      }
      $(".invalid_phone").hide();
      return true
  }  