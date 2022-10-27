<div class="container">
    <div class="row">
    <div class="col">
                <h2>Alterar Senha</h2>
                <p>Para trocar a senha, é necessário que a senha atual seja digitada.</p>
            </div>
        <div class="card p-2">
        @if(isset($erro))
                <div class="col text-center mt-4 mb-4 p-2 alert-danger">
                    {{$erro}}
                </div>
            @endif
            <form class="mt-4" action="/password/{{$_SESSION['id']}}/edit" method="post">
                @csrf
                <div class="col-4 mt-2">
                    <input name="password_old" type="password" placeholder="Senha atual" class="form-control" required>
                </div>
                <div class="col-4 mt-2">
                    <input name="password" type="password" placeholder="Senha nova" class="form-control" required>
                </div>
                <div class="col mt-2">
                    <button type="submit" class="btn btn-primary">Alterar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
@if (isset($msg))
<script>
swal(
    'Parabéns!',
    '{{$msg}}',
    'success')
</script>
@endif

