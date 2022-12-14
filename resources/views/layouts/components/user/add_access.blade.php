<div class="container">
    <div class="row">
            @if(isset($errors) && count($errors)>0)
            <div class="col-12 text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}
                @endforeach
            </div>
            @endif
            <div class="col ms-3 mb-4">
                <h4>Criar Conta</h4>
            </div>
           
            <form action='@if (isset($user)) {{url("/access/$user->id/edit")}} @else {{url("/access/create")}} @endif' method="post">
            @csrf
            <div class="col">
                <small style="color: red">{{$erro}}</small>
                <input value="@if(isset($_POST['name'])){{$_POST['name']}} @endif" name="name" type="text" placeholder="Nome" class="form-control" required >
            </div>
            <div class="col mt-2">
                <input value="@if(isset($_POST['email'])){{$_POST['email']}} @endif" name="email" type="email" placeholder="email" class="form-control" required>
            </div>
            @if (!isset($user))
            <div class="col mt-2">
                <input value="@if(isset($user)){{$user->password}}@endif" name="password" id="password" type="password" placeholder="Senha" class="form-control" required>
            </div>
            <div class="col mt-2">
                <input value="@if(isset($user)){{$user->password}}@endif" name="repetPassword" id="repetPassword" type="password" placeholder="Repetir Senha" class="form-control" required>
            </div>
            <div class="col  mt-4">
                <b><small id="erro-email"></small></b>
            </div>
            <div class="col mt-4 ms-4">
                <input value="free" class="form-check-input" type="radio" id="u_planType" name="u_planType" checked> Plano free
            </div>
            <div class="col mt-4">
                <input type="checkbox" required="" value='S' name="u_agreementEulaPrivacity">
                Confirmo que li e aceito os 
                    <a href="/eula" target="_blank">Termos de Uso</a>
                e a 
                    <a href="/privacity" target="_blank">Pol??tica de Privacidade</a>
                para utiliza????o da plataforma qAgenda, bem como forne??o meu consentimento para que seja feito o tratamento de meus dados pessoais conforme a finalidade da plataforma. 
                <!--
                Tamb??m confirmo que li a p??gina sobre os 
                    <a href="/plans/" target="_blank">
                planos e pacotes oferecidos
                </a>
                -->
            </div>
    
            @endif
            <div class="col d-flex justify-content-between">
                <div class="mt-4 ">
                    <button disabled='true' type="" id='btn-create' class="btn btn-success">@if (!isset($user)) Criar Conta @else Alterar @endif </button>
                @if (isset($user))
                    <a href="{{url("/password/$user->id")}}" class="btn btn-danger">Alterar Senha</a>
                @endif
                </div>
                <div class="mt-4">
                    <a class="btn btn-primary" href="{{url('/')}}">Entrar</a>
                </div>
            </div>

        </form>
    </div>
</div>
<script src="{{ asset('assets/vendors/js/core/jquery-3.6.0.min.js?v32b')}}" type="text/javascript"></script>

<script>
    $(document).ready(()=>{
        console.log($('#repetPassword').attr('value'))

        $('#repetPassword, #password').on('blur', ()=>{

            if(($('#password').val().length > 0 && $('#repetPassword').val().length > 0)){

                if(($('#repetPassword').val() === $('#password').val())){
                    $('#btn-create').prop('disabled',false)
                    $('#erro-email').html('')
                    $('#erro-email').attr('class', '')


                    console.log('iguais',)

                }else{
                    $('#btn-create').prop('disabled',true)
                    $('#erro-email').html('As senhas devem ser iguais!')
                    $('#erro-email').attr('class', 'alert alert-danger d-flex flex-grow-1')

                    console.log('diferente')
                }
            }else{
                    $('#btn-create').prop('disabled',true)

                    $('#erro-email').html('')

                }


        })
    })
</script>
