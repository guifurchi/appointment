$(document).ready(function() {
    jQuery("#id_phone").mask("(99) 9999-99999")
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

function check_if_exists(value,field){
    return field
       .filter(function (i, o) { return o.value === value; })
       .length > 0;
}


function add_city(value) {

    city = $("#id_city option")

    if(!check_if_exists(value,city)){
        var x = document.getElementById("id_city");
        var option = document.createElement("option");
        option.text = value;
        //x.add(option);
        x.value = value;
    }
    $("#id_city").val(value).change();
}

function add_neighbourhood(value) {

    neighbourhood = $("#id_neighbourhood option")

    if(!check_if_exists(value,neighbourhood)){
        var x = document.getElementById("id_neighbourhood");
        var option = document.createElement("option");
        option.text = value;
        //x.add(option);
        x.value = value;
    }
    $("#id_neighbourhood").val(value).change();
}

function add_street(value) {

    street = $("#id_street option")

    if(!check_if_exists(value,street)){
        var x = document.getElementById("id_street");
        var option = document.createElement("option");
        option.text = value;
        //x.add(option);
        x.value = value;
    }
    $("#id_street").val(value).change();
}

function add_state(value) {

    state = $("#id_state option")

    if(!check_if_exists(value,state)){
        var x = document.getElementById("id_state");
        var option = document.createElement("option");
        option.text = value;
        //x.add(option);
        x.value=value
    }
    $("#id_state").val(value).change();
}

$(document).ready(function() {
  $("#id_cep").keyup(function( event ) {
      cep = $("#id_cep").val()
      if(cep.length>8){
        get_cep(cep).then(function (address) {
            add_street(address.logradouro)
            add_city(address.localidade)
            add_neighbourhood(address.bairro)
            add_state(address.uf)
        });
      }
  });
});

$(document).ready(function() {
    $('#monday_initial').click(()=>{
        var monday_count = $("[id-fixed=monday]").length;
        // console.log(monday_count)
        })
});



var monday_count = $("[id-fixed=monday]").length;
var tuesday_count = $("[id-fixed=tuesday]").length;
var wednesday_count = $("[id-fixed=wednesday]").length;
var thursday_count = $("[id-fixed=thursday]").length;
var friday_count = $("[id-fixed=friday]").length;
var saturday_count = $("[id-fixed=saturday]").length;
var sunday_count = $("[id-fixed=sunday]").length;
var person_count = 0;

function remove_time(day){

    switch(day){
        case "monday":

            monday_count = monday_count - 1
            if(monday_count<0){
                monday_count=0;
            }
            console.log(monday_count)

            $('#initial_time_monday'+monday_count).remove();
            $('#end_time_monday'+monday_count).remove();
            $('#amount_monday'+monday_count).remove();
            $('.label_monday'+monday_count).remove();

        break;

        case "tuesday":

            tuesday_count = tuesday_count - 1
            if(tuesday_count<0){
                tuesday_count=0;
            }
            $('#initial_time_tuesday'+tuesday_count).remove();
            $('#end_time_tuesday'+tuesday_count).remove();
            $('#amount_tuesday'+tuesday_count).remove();
            $('.label_tuesday'+tuesday_count).remove();

        break;

        case "wednesday":

            wednesday_count = wednesday_count - 1
            if(wednesday_count<0){
                wednesday_count=0;
            }
            $('#initial_time_wednesday'+wednesday_count).remove();
            $('#end_time_wednesday'+wednesday_count).remove();
            $('#amount_wednesday'+wednesday_count).remove();
            $('.label_wednesday'+wednesday_count).remove();

        break;

        case "thursday":

            thursday_count = thursday_count - 1
            if(thursday_count<0){
                thursday_count=0;
            }
            $('#initial_time_thursday'+thursday_count).remove();
            $('#end_time_thursday'+thursday_count).remove();
            $('#amount_thursday'+thursday_count).remove();
            $('.label_thursday'+thursday_count).remove();

        break;

        case "friday":

            friday_count = friday_count - 1
            if(friday_count<0){
                friday_count=0;
            }
            $('#initial_time_friday'+friday_count).remove();
            $('#end_time_friday'+friday_count).remove();
            $('#amount_friday'+friday_count).remove();
            $('.label_friday'+friday_count).remove();

        break;

        case "saturday":

            saturday_count = saturday_count - 1
            if(saturday_count<0){
                saturday_count=0;
            }
            $('#initial_time_saturday'+saturday_count).remove();
            $('#end_time_saturday'+saturday_count).remove();
            $('#amount_saturday'+saturday_count).remove();
            $('.label_saturday'+saturday_count).remove();

        break;

        case "sunday":

            sunday_count = sunday_count - 1
            if(sunday_count<0){
                sunday_count=0;
            }
            $('#initial_time_sunday'+sunday_count).remove();
            $('#end_time_sunday'+sunday_count).remove();
            $('#amount_sunday'+sunday_count).remove();
            $('.label_sunday'+sunday_count).remove();

        break;
    }

}


function add_new_time(day){
    
    switch(day){
        case "monday":

            $('#monday_initial').append("<label id-fixed='monday' class=label_monday"+monday_count+">Hora incial</label><input type='time' class='form-control' name=initial_time_monday"+"["+monday_count+"]"+" id=initial_time_monday"+monday_count+">");
            $('#monday_end').append("<label class=label_monday"+monday_count+">Hora final</label><input type='time' class='form-control' name=end_time_monday"+"["+monday_count+"]"+" id=end_time_monday"+monday_count+">");
            $('#monday_amount').append("<label class=label_monday"+monday_count+">Número de Pessoas por Horário</label><input type='number' min=0 class='form-control' name=amount_monday"+"["+monday_count+"]"+" id=amount_monday"+monday_count+">");
            $('#monday_number_times').val(monday_count);
            monday_count += 1


        break;

        case "tuesday":
            $('#tuesday_initial').append("<label id-fixed='tuesday'  class=label_tuesday"+tuesday_count+">Hora incial</label><input type='time' class='form-control' name=initial_time_tuesday"+"["+tuesday_count+"]"+" id=initial_time_tuesday"+tuesday_count+">");
            $('#tuesday_end').append("<label class=label_tuesday"+tuesday_count+">Hora final</label><input type='time' class='form-control' name=end_time_tuesday"+"["+tuesday_count+"]"+" id=end_time_tuesday"+tuesday_count+">");
            $('#tuesday_amount').append("<label class=label_tuesday"+tuesday_count+">Número de Pessoas por Horário</label><input type='number' min=0 class='form-control' name=amount_tuesday"+"["+tuesday_count+"]"+" id=amount_tuesday"+tuesday_count+">");
            $('#tuesday_number_times').val(tuesday_count);
            tuesday_count += 1
        break;

        case "wednesday":
            $('#wednesday_initial').append("<label id-fixed='wednesday' class=label_wednesday"+wednesday_count+">Hora incial</label><input type='time' class='form-control' name=initial_time_wednesday"+"["+wednesday_count+"]"+" id=initial_time_wednesday"+wednesday_count+">");
            $('#wednesday_end').append("<label class=label_wednesday"+wednesday_count+">Hora final</label><input type='time' class='form-control' name=end_time_wednesday"+"["+wednesday_count+"]"+" id=end_time_wednesday"+wednesday_count+">");
            $('#wednesday_amount').append("<label class=label_wednesday"+wednesday_count+">Número de Pessoas por Horário</label><input type='number' min=0 class='form-control' name=amount_wednesday"+"["+wednesday_count+"]"+" id=amount_wednesday"+wednesday_count+">");
            $('#wednesday_number_times').val(wednesday_count);
            wednesday_count += 1
        break;

        case "thursday":

            $('#thursday_initial').append("<label id-fixed='thursday' class=label_thursday"+thursday_count+">Hora incial</label><input type='time' class='form-control' name=initial_time_thursday"+"["+thursday_count+"]"+" id=initial_time_thursday"+thursday_count+">");
            $('#thursday_end').append("<label class=label_thursday"+thursday_count+">Hora final</label><input type='time' class='form-control' name=end_time_thursday"+"["+thursday_count+"]"+" id=end_time_thursday"+thursday_count+">");
            $('#thursday_amount').append("<label class=label_thursday"+thursday_count+">Número de Pessoas por Horário</label><input type='number' min=0 class='form-control' name=amount_thursday"+"["+thursday_count+"]"+" id=amount_thursday"+thursday_count+">");
            $('#thursday_number_times').val(thursday_count);
            thursday_count += 1
        break;

        case "friday":

            $('#friday_initial').append("<label id-fixed='friday' class=label_friday"+friday_count+">Hora incial</label><input type='time' class='form-control' name=initial_time_friday"+"["+friday_count+"]"+" id=initial_time_friday"+friday_count+">");
            $('#friday_end').append("<label class=label_friday"+friday_count+">Hora final</label><input type='time' class='form-control' name=end_time_friday"+"["+friday_count+"]"+" id=end_time_friday"+friday_count+">");
            $('#friday_amount').append("<label class=label_friday"+friday_count+">Número de Pessoas por Horário</label><input type='number' min=0 class='form-control' name=amount_friday"+"["+friday_count+"]"+" id=amount_friday"+friday_count+">");
            $('#friday_number_times').val(friday_count);
            friday_count += 1
        break;

        case "saturday":

            $('#saturday_initial').append("<label id-fixed='saturday' class=label_saturday"+saturday_count+">Hora incial</label><input type='time' class='form-control' name=initial_time_saturday"+"["+saturday_count+"]"+" id=initial_time_saturday"+saturday_count+">");
            $('#saturday_end').append("<label class=label_saturday"+saturday_count+">Hora final</label><input type='time' class='form-control' name=end_time_saturday"+"["+saturday_count+"]"+" id=end_time_saturday"+saturday_count+">");
            $('#saturday_amount').append("<label class=label_saturday"+saturday_count+">Número de Pessoas por Horário</label><input type='number' min=0 class='form-control' name=amount_saturday"+"["+saturday_count+"]"+" id=amount_saturday"+saturday_count+">");
            $('#saturday_number_times').val(saturday_count);
            saturday_count += 1
        break;

        case "sunday":

            $('#sunday_initial').append("<label id-fixed='sunday' class=label_sunday"+sunday_count+">Hora incial</label><input type='time' class='form-control' name=initial_time_sunday"+"["+sunday_count+"]"+" id=initial_time_sunday"+sunday_count+">");;
            $('#sunday_end').append("<label class=label_sunday"+sunday_count+">Hora final</label><input type='time' class='form-control' name=end_time_sunday"+"["+sunday_count+"]"+" id=end_time_sunday"+sunday_count+">");
            $('#sunday_amount').append("<label class=label_sunday"+sunday_count+">Número de Pessoas por Horário</label><input type='number' min=0 class='form-control' name=amount_sunday"+"["+sunday_count+"]"+" id=amount_sunday"+sunday_count+">");
            $('#sunday_number_times').val(sunday_count);
            sunday_count += 1
        break;
    }   
}


function copy_to_alldays(start_day,end_day){


    if(start_day=='monday'){

        $('#tuesday_initial').html("");
        $('#tuesday_end').html("");
        $('#tuesday_amount').html("");
        tuesday_count = 0

        $('#wednesday_initial').html("");
        $('#wednesday_end').html("");
        $('#wednesday_amount').html("");
        wednesday_count = 0

        $('#thursday_initial').html("");
        $('#thursday_end').html("");
        $('#thursday_amount').html("");
        thursday_count = 0

        $('#friday_initial').html("");
        $('#friday_end').html("");
        $('#friday_amount').html("");
        friday_count = 0

        if(end_day !='friday'){
            $('#saturday_initial').html("");
            $('#saturday_end').html("");
            $('#saturday_amount').html("");
            saturday_count = 0

            $('#sunday_initial').html("");
            $('#sunday_end').html("");
            $('#sunday_amount').html("");
            sunday_count = 0
        }

        for(var count=0;count<monday_count;count++){
            
             initial_time_monday = $('#initial_time_monday'+count).val();
             end_time_monday = $('#end_time_monday'+count).val();
             amount_monday = $('#amount_monday'+count).val();

             console.log(amount_monday)

             add_new_time('tuesday')
             $('#initial_time_tuesday'+count).val(initial_time_monday);
             $('#end_time_tuesday'+count).val(end_time_monday);
             $('#amount_tuesday'+count).val(amount_monday);

             add_new_time('wednesday')
             $('#initial_time_wednesday'+count).val(initial_time_monday);
             $('#end_time_wednesday'+count).val(end_time_monday);
             $('#amount_wednesday'+count).val(amount_monday);

             add_new_time('thursday')
             $('#initial_time_thursday'+count).val(initial_time_monday);
             $('#end_time_thursday'+count).val(end_time_monday);
             $('#amount_thursday'+count).val(amount_monday);

             add_new_time('friday')
             $('#initial_time_friday'+count).val(initial_time_monday);
             $('#end_time_friday'+count).val(end_time_monday);
             $('#amount_friday'+count).val(amount_monday);

             if(end_day !='friday'){

                 add_new_time('saturday')
                 $('#initial_time_saturday'+count).val(initial_time_monday);
                 $('#end_time_saturday'+count).val(end_time_monday);
                 $('#amount_saturday'+count).val(amount_monday);

                 add_new_time('sunday')
                 $('#initial_time_sunday'+count).val(initial_time_monday);
                 $('#end_time_sunday'+count).val(end_time_monday);
                 $('#amount_sunday'+count).val(amount_monday);

             }

        }

    }

}

function add_person() {
    num_acompanhante = person_count + 1
    if (num_acompanhante <= 3){
    $('#person_name').append("<label class=label_person"+person_count+">Nome Completo - Acompanhante " + num_acompanhante +" </label><input type='text' class='form-control' name=person_name"+person_count+" id=person_name"+person_count+">");
    $('#person_number').val(person_count);
    person_count += 1
    }
}
function remove_person(){
    person_count = person_count - 1
    if(person_count<0){
        person_count=0;
    }
    $('#person_name'+person_count).remove();
    $('.label_person'+person_count).remove();
    $('#person_number').val(person_count);
}

$(document).ready(function() {


    try{
        length = appointment_config.att_time.length

        if (length==0){
            add_new_time("monday");
            var count_monday = monday_count - 1  
        }

        for(var count=0;count<=length;count++){

            var week_day = appointment_config.att_time[count].week_day;
            if(week_day=="0"){
                add_new_time("monday");
                var count_monday = monday_count - 1
                $('#initial_time_monday'+count_monday).val(appointment_config.att_time[count].opening_time);
                $('#end_time_monday'+count_monday).val(appointment_config.att_time[count].closing_time);
                $('#amount_monday'+count_monday).val(appointment_config.att_time[count].max_people);
            }
            else if(week_day == "1"){
                add_new_time("tuesday");
                var count_tuesday = tuesday_count - 1
                $('#initial_time_tuesday'+count_tuesday).val(appointment_config.att_time[count].opening_time);
                $('#end_time_tuesday'+count_tuesday).val(appointment_config.att_time[count].closing_time);
                $('#amount_tuesday'+count_tuesday).val(appointment_config.att_time[count].max_people);

            }
            else if(week_day=="2"){
                add_new_time("wednesday");
                var count_wednesday = wednesday_count - 1
                $('#initial_time_wednesday'+count_wednesday).val(appointment_config.att_time[count].opening_time);
                $('#end_time_wednesday'+count_wednesday).val(appointment_config.att_time[count].closing_time);
                $('#amount_wednesday'+count_wednesday).val(appointment_config.att_time[count].max_people);
            }
            else if(week_day=="3"){
                add_new_time("thursday");
                var count_thursday = thursday_count - 1
                $('#initial_time_thursday'+count_thursday).val(appointment_config.att_time[count].opening_time);
                $('#end_time_thursday'+count_thursday).val(appointment_config.att_time[count].closing_time);
                $('#amount_thursday'+count_thursday).val(appointment_config.att_time[count].max_people);
            }
            else if(week_day=="4"){
                add_new_time("friday");
                var count_friday = friday_count - 1
                $('#initial_time_friday'+count_friday).val(appointment_config.att_time[count].opening_time);
                $('#end_time_friday'+count_friday).val(appointment_config.att_time[count].closing_time);
                $('#amount_friday'+count_friday).val(appointment_config.att_time[count].max_people);
            }
            else if(week_day=="5"){
                add_new_time("saturday");
                var count_saturday = saturday_count - 1
                $('#initial_time_saturday'+count_saturday).val(appointment_config.att_time[count].opening_time);
                $('#end_time_saturday'+count_saturday).val(appointment_config.att_time[count].closing_time);
                $('#amount_saturday'+count_saturday).val(appointment_config.att_time[count].max_people);
            }
            else if(week_day=="6"){
                add_new_time("sunday");
                var count_sunday = sunday_count - 1
                $('#initial_time_sunday'+count_sunday).val(appointment_config.att_time[count].opening_time);
                $('#end_time_sunday'+count_sunday).val(appointment_config.att_time[count].closing_time);
                $('#amount_sunday'+count_sunday).val(appointment_config.att_time[count].max_people);
            }
        }


    }catch(e){

    }

});