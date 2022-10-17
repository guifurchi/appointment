$(document).ready(function() {
    $(".invalid_cpf").hide();
    $(".invalid_fullname").hide();
    $(".invalid_birthday").hide();
  
  });
  
  function check_fullname(){
      var full_name = $('#full_name').val();
      if(!full_name){
          $(".invalid_fullname").show();
          return false
      }
      $(".invalid_fullname").hide();
      return true
  }
  
  function format_cpf(){
     $('#cpf').mask('000.000.000-00');
  }
  
  function format_birthday(){
     $('#birth_date').mask('00/00/0000');
  }
  
  
  function validade_email(){
  
      email = $("#email").val();
  
      console.log(email);
  
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if(email.match(mailformat))
      {
          $('.invalid_email').hide();
          return true;
      }
      else
      {
          $('.invalid_email').show();
          return false;
  
      }
  }
  
  function check_cpf(){
      cpf = validade_cpf()
      if(cpf){
          $(".invalid_cpf").hide();
          return true
      }
      $(".invalid_cpf").show();
      return false
  }
  
  function validade_cpf() {
  
      var cpf = $('#cpf').val();
      cpf = cpf.replace(/[^\d]+/g, '');
      if (cpf == '') return false;
      if (cpf.length != 11 ||
          cpf == "00000000000" ||
          cpf == "11111111111" ||
          cpf == "22222222222" ||
          cpf == "33333333333" ||
          cpf == "44444444444" ||
          cpf == "55555555555" ||
          cpf == "66666666666" ||
          cpf == "77777777777" ||
          cpf == "88888888888" ||
          cpf == "99999999999")
          return false;
      add = 0;
      for (i = 0; i < 9; i++)
          add += parseInt(cpf.charAt(i)) * (10 - i);
      rev = 11 - (add % 11);
      if (rev == 10 || rev == 11)
          rev = 0;
      if (rev != parseInt(cpf.charAt(9)))
          return false;
      add = 0;
      for (i = 0; i < 10; i++)
          add += parseInt(cpf.charAt(i)) * (11 - i);
      rev = 11 - (add % 11);
      if (rev == 10 || rev == 11)
          rev = 0;
      if (rev != parseInt(cpf.charAt(10)))
          return false;
      return true;
  }
  
  
  $(document).ready(function() {
  
      jQuery("#phone").mask("(99) 9999-99999")
      .focusout(function (event) {
          var target, phone, element;
          target = (event.currentTarget) ? event.currentTarget : event.srcElement;
          phone = target.value.replace(/\D/g, '');
          element = $(target);
          element.unmask();
          if(phone.length > 10) {
              element.mask("(99) 99999-9999");
          } else {
              element.mask("(99) 9999-99999");
          }
      });
  
  });
  
  
  $("#id_organization_id").keydown(function( event ) {
      MascaraCpfCnpj(event.currentTarget,event.originalEvent)
  });
  
  $("#id_organization_id").keyup(function( event ) {
      MascaraCpfCnpj(event.currentTarget,event.originalEvent)
  });
  
  function MascaraCpfCnpj(campo,teclapres) {
      var tecla = teclapres.keyCode;
  
      if ((tecla < 48 || tecla > 57) && (tecla < 96 || tecla > 105) && tecla != 46 && tecla != 8 && tecla != 9) {
          return false;
      }
  
      var vr = campo.value;
      vr = vr.replace( /\//g, "" );
      vr = vr.replace( /-/g, "" );
      vr = vr.replace( /\./g, "" );
      var tam = vr.length;
  
      if ( tam <= 2 ) {
          campo.value = vr;
      }
      if ( (tam > 2) && (tam <= 5) ) {
          campo.value = vr.substr( 0, tam - 2 ) + '-' + vr.substr( tam - 2, tam );
      }
      if ( (tam >= 6) && (tam <= 8) ) {
          campo.value = vr.substr( 0, tam - 5 ) + '.' + vr.substr( tam - 5, 3 ) + '-' + vr.substr( tam - 2, tam );
      }
      if ( (tam >= 9) && (tam <= 11) ) {
          campo.value = vr.substr( 0, tam - 8 ) + '.' + vr.substr( tam - 8, 3 ) + '.' + vr.substr( tam - 5, 3 ) + '-' + vr.substr( tam - 2, tam );
      }
      if ( (tam == 12) ) {
          campo.value = vr.substr( tam - 12, 3 ) + '.' + vr.substr( tam - 9, 3 ) + '/' + vr.substr( tam - 6, 4 ) + '-' + vr.substr( tam - 2, tam );
      }
      if ( (tam > 12) && (tam <= 14) ) {
          campo.value = vr.substr( 0, tam - 12 ) + '.' + vr.substr( tam - 12, 3 ) + '.' + vr.substr( tam - 9, 3 ) + '/' + vr.substr( tam - 6, 4 ) + '-' + vr.substr( tam - 2, tam );
      }
      if (tam > 13){
          if (tecla != 8){
              return false
          }
      }
  }
  