<div class="main-content">
    <div class="content-wrapper">
        <div id="err_msg"></div>
            <div class="content-page">
                <div class="container">
                    <div class="center-page">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card" style="padding:15px">
                                    <form method="post" enctype="multipart/form-data" id="person-form">
                                        <input type="hidden" name="csrfmiddlewaretoken" value="wDlRyeaHS8T5i1yikQf3zOwkvLmIEo2wXd62cKTleMHkvaahoWFCynIhLZxAA0Mz">
                                        <div id="div_id_name" class="form-group"> 
                                            <label for="id_name" class=" requiredField">
                                                Nome Completo
                                                <span class="asteriskField">*</span> 
                                            </label> 
                                            <div> 
                                                <input type="text" name="name" maxlength="200" minlength="6" class="textinput textInput form-control" required="" id="id_name"> 
                                            </div> 
                                        </div> 
                                        <div id="div_id_email" class="form-group"> 
                                            <label for="id_email" class="">
                                                E-mail
                                            </label> 
                                            <div> 
                                                <input type="email" name="email" maxlength="254" class="emailinput form-control" id="id_email"> 
                                            </div> 
                                        </div> 
                                        <div id="div_id_cpf" class="form-group"> 
                                            <label for="id_cpf" class="">
                                                CPF
                                            </label> 
                                            <div> 
                                                <input type="text" name="cpf" data-mask="000.000.000-00" class="textinput textInput form-control" id="id_cpf" autocomplete="off" maxlength="14"> 
                                            </div> 
                                        </div> 
                                        <div id="div_id_old_phone" class="form-group"> 
                                            <label for="id_old_phone" class="">
                                                Telefone
                                            </label> 
                                            <div> 
                                                <input type="text" name="old_phone" data-mask="(00) 00000-0000" maxlength="15" minlength="14" class="textinput textInput form-control" id="id_old_phone" autocomplete="off"> 
                                            </div> 
                                        </div> 
                                        <div id="div_id_domicile" class="form-group"> 
                                            <label for="id_domicile" class="">
                                                Endereço
                                            </label>
                                            <div>
                                                <input type="text" name="address" maxlength="254" class="form-control" id="id_address"> 
                                            </div> 
                                        </div> 
                                        <div id="div_id_work_company" class="form-group"> <label for="id_work_company" class="">
                                                Empresa
                                            </label> 
                                            <div>
                                                <input type="text" name="empresa" maxlength="254" class="form-control" id="id_empresa"> 
                                            </div> 
                                        </div> 
                                        <div id="div_id_birthday" class="form-group"> 
                                            <label for="id_birthday" class="">
                                                Data de Nascimento
                                            </label> 
                                            <div> 
                                                <input type="text" name="birthday" data-mask="00/00/0000" format="%d/%m/%Y" placeholder="dd/mm/aaaa" class="dateinput form-control" id="id_birthday" autocomplete="off" maxlength="10"> 
                                            </div> 
                                        </div> 
                                        <div id="div_id_gender" class="form-group"> <label class="">
                                                Gênero
                                            </label> 
                                            <div> 
                                                <div class="form-check"> 
                                                    <input type="radio" class="form-check-input" name="gender" value="M" id="id_gender_0"> 
                                                    <label class="form-check-label" for="id_gender_0">
                                                    Masculino
                                                    </label> 
                                                </div> 
                                                <div class="form-check"> 
                                                    <input type="radio" class="form-check-input" name="gender" value="F" id="id_gender_1"> 
                                                    <label class="form-check-label" for="id_gender_1">
                                                        Feminino
                                                    </label> 
                                                </div> 
                                                <div class="form-check"> 
                                                    <input type="radio" class="form-check-input" name="gender" value="O" id="id_gender_2"> 
                                                    <label class="form-check-label" for="id_gender_2">
                                                        Outros
                                                    </label> 
                                                </div> 
                                            </div> 
                                        </div> 
                                            <!--     
                                        Tipo de identidade
                                            </label> <div> <select name="identification" class="select form-control" id="id_identification"> <option value="" selected="">---------</option> <option value="1">RG</option> <option value="2">CNH</option> <option value="3">Passaporte</option> <option value="4">Carteira de Trabalho</option> <option value="5">Carteira de Identidade Profissional (OAB, CRC, CRM, CRA, CREA, etc)</option>

                                            </select> </div> </div> <div id="div_id_identification_number" class="form-group"> <label for="id_identification_number" class="">
                                                Número de identidade
                                            </label> <div> <input type="text" name="identification_number" maxlength="20" class="textinput textInput form-control" id="id_identification_number"> </div> </div> <div id="div_id_nationality" class="form-group"> <label for="id_nationality" class="">
                                                Nacionalidade
                                            </label> <div> <input type="text" name="nationality" maxlength="100" class="textinput textInput form-control" id="id_nationality"> </div> </div> <div id="div_id_place_of_birth" class="form-group"> <label for="id_place_of_birth" class="">
                                                Naturalidade

                                            </label> 
                                            <div> 
                                                <input type="text" name="place_of_birth" maxlength="100" class="textinput textInput form-control" id="id_place_of_birth"> 
                                            </div> 
                                        </div>
                                        --> 
                                        <div id="div_id_profession" class="form-group">
                                            <label for="id_profession" class="">
                                            Profissão
                                            </label> 
                                            <div> 
                                                <input type="text" name="profession" maxlength="100" class="textinput textInput form-control" id="id_profession"> 
                                            </div> 
                                        </div> 
                                        <input type="submit" class="btn btn-success" value="salvar">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>