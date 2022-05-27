<div class="container">
    <div class="row">
        <div class="col">
            ID: {{ $consulta->id }} <br>
            Nome: {{ $consulta->nome }} <br>
            Endereço: {{ $consulta->endereco }} <br>
            Dentista: {{ $consulta->dentista }} <br>
            Observação: {{ $consulta->observacao }} <br>
            Data Consulta: {{ $consulta->data_consulta }} <br>
            Data do Agendamento: {{ $consulta->created_at }} <br>
        </div>
    </div>
            <div class="col mt-4">
            <a href="{{url('/consultaQuery')}}">
                <button class="btn btn-success">Voltar</button>
            </a>
        </div>

</div>
