<div class="container">
    @foreach ($validA as $act)
        @if($act == 'create')
            <div class="col text-center">
                <a href="{{url('/consulta')}}">
                    <button class="btn btn-success">Cadastrar</button>
                </a>
            </div>
        @endif
    @endforeach
    <div class="row">
        <div class="col">
            @csrf
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nome</th>
                        <th scope="col">dentista</th>
                        <th scope="col">data</th>
                        <th scope="col">observação</th>
                        <th scope="col">data do Agendamento</th>
                        <th class="text-end"> {{$consulta->count()}} registros no total {{$consulta->total()}}. </th>
                    </tr>
                    
                </thead>
                <tbody>
                @foreach ($consulta as $consultas)
                    <tr>
                        <th scope="row">{{$consultas->id}}</th>
                        <td>{{substr($consultas->nome,0, 40)}}</td>
                        <td>{{substr($consultas->dentista,0, 40)}}</td>
                        <td>{{$consultas->data_consulta}}</td>
                        <td>{{$consultas->observacao}}</td>
                        <td>{{$consultas->created_at}}</td>
                        <td class="text-end">
                            <a href="{{url("showDetails/$consultas->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            @foreach ($validA as $act)
                                @if($act == 'edit')
                                    <a href="{{url("consulta/$consultas->id/edit")}}">
                                        <button class="btn btn-primary">Editar</button>
                                    </a>
                                @endif
                            @endforeach
                            @foreach ($validA as $act)
                                @if($act == 'delete')
                            <a href="{{url("consulta/$consultas->id/delete")}}" class="js-del" >
                                <button class="btn btn-danger" >Cancelar</button>
                            </a>
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$consulta->links()}} 
</div>

