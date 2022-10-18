<div class="main-content">
    <div class="content-wrapper">
        <section id="icon-tabs">
            <div class="row">
                <div class="col-sm-12">
                <div class="content-header">Incluir novo feriado / dia sem atendimento</div>
                </div>
                <div class="col-6" style="width:100%">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <h4></h4>
                                <br>
                                <form method="POST" class="post-form"><input type="hidden" name="csrfmiddlewaretoken" value="QXXAnexn83OhTfQGx2fkFTjBhZYSpxLahxIL1Kg1uHCw6osFB8FTEsvyxd9Kl9vd">
                                <label>Informe o intervalo de dias sem atendimento. Se for um único dia, basta preencher a data inicial.</label>
                                    <p>
                                        <label for="id_name">Descrição:</label> 
                                        <input type="text" name="name" maxlength="255" class="form-control" required="" id="id_name"></p>
                                    <p>
                                        <label for="id_date_holiday">Data Inicial sem Atendimento:</label> 
                                        <input type="text" name="date_holiday" data-mask="00/00/0000" format="%d/%m/%Y" placeholder="dd/mm/aaaa" class="form-control" required="" id="id_date_holiday" autocomplete="off" maxlength="10"> <span class="helptext">Exemplo de data no formato correto: 31/12/2020</span></p>
                                    <p>
                                        <label for="id_final_date_holiday">Data Final sem  Atendimento:</label> 
                                        <input type="text" name="final_date_holiday" data-mask="00/00/0000" format="%d/%m/%Y" placeholder="dd/mm/aaaa" class="form-control" id="id_final_date_holiday" autocomplete="off" maxlength="10"></p>
                                    <p>
                                        <label for="id_b_all_agendas">Aplicar feriado a todas as agendas:</label> 
                                        <input type="checkbox" name="b_all_agendas" id="id_b_all_agendas" checked=""></p>
                                    <p>
                                        <label for="id_agendas">Agendas:</label> 
                                        <select name="agendas" class="form-control select2-hidden-accessible" id="id_agendas" multiple="" data-select2-id="select2-data-id_agendas" tabindex="-1" aria-hidden="true">
                                            <option value="2226">Cópia da Nutricionista Valéria Furchi</option>
                                            <option value="2176">Nutricionista Valéria Furchi</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-2ydv" style="width: 554.5px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-id_agendas-container">

                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-id_agendas-container" placeholder="" style="width: 0.75em;">
                                                    </textarea>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true">

                                            </span>
                                        </span> 
                                        <span class="helptext">Selecione em quais agendas deseja aplicar o feriado.     Deixe em branco para aplicar a todas as agendas.</span>
                                    </p>
                                    <p>
                                        <label for="id_b_all_day">Dia inteiro:</label>
                                        <input type="checkbox" name="b_all_day" id="id_b_all_day" checked="">
                                    </p>
                                    <p>
                                        <label for="id_start_time">Horário de Início:</label>
                                        <input type="text" name="start_time" data-mask="00:00" format="%H:%M" placeholder="hh:mm" class="form-control" id="id_start_time" autocomplete="off" maxlength="5">
                                    </p>
                                    <p>
                                        <label for="id_end_time">Horário de Fim:</label>
                                        <input type="text" name="end_time" data-mask="00:00" format="%H:%M" placeholder="hh:mm" class="form-control" id="id_end_time" autocomplete="off" maxlength="5">
                                    </p>
                                    <br>
                                    <button type="submit" class="btn btn-raised btn-raised btn-primary">Salvar</button>
                                    <a href="/appointments/config_holiday" class="btn btn-outline-secondary" role="button">Voltar</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script>

selected_sub_type = [];

function select_subtype(id,event){
    if(event.target.checked){
        selected_sub_type.push(id);
    }
    else
    {
        selected_sub_type = arrayRemove(selected_sub_type, id);
    }

    $("#subtypes").val(selected_sub_type)
    }

    function arrayRemove(arr, value) {
    return arr.filter(function(ele){
        return ele != value;
    });

}

</script>

