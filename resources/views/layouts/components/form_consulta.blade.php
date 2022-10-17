<div class="container">
    <div class="row">
        @if(isset($errors) && count($errors)>0)
            <div class="col text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}</small>
                @endforeach
            </div>
        @endif

        @if(isset($consulta))
            <form name='formEdit' action=" {{url("/consulta/$consulta->id/edit")}} " method="post">
            @method('PUT')
        @else
            <form name='formCad' action=" {{url("/consulta/create")}} " method="post">
        @endif
            @csrf
                <div class="col mb-2">
                    <input name="nome" value='@if(isset($consulta)){{ $consulta->nome }}@else{{ $user->name }}@endif' id="nome" class="form-control" type="text" placeholder="Nome Completo" aria-label="default input example" required readOnly>
                </div>
                <div class="col mb-2">
                    <input name="data_consulta" value='@if(isset($consulta)){{ $consulta->data_consulta }}@endif' id="data_consulta" class="form-control" type="text" placeholder="Escolha uma data" aria-label="default input example" required >
                </div>
            <div class="col mb-2">
                <select name="dentista" id="dentista" class="form-select" value=''>
                @if(isset($consulta))
                    <option value="{{ $consulta->dentista }}">{{ $consulta->dentista }}</option>
                    <option value="Valéria">Valéria</option>
                    <option value="Lucas">Lucas</option>
                @else
                    <option value="Valéria">Valéria</option>
                    <option value="Lucas">Lucas</option>
                @endif
                </select>
            </div>
            <div class="col mb-2">
                <input name="observacao" value='@if(isset($consulta)){{ $consulta->observacao }}@endif' id="observacao"  class="form-control" type="text" placeholder='Descreva qual a ncessidade da consulta' aria-label="default input example" required>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary ">@if(isset($consulta))Alterar @else Agendar Consulta @endif</button> 
            </div>
        </form>
            <div class="col mt-4">
                <a href="{{url('/consultaQuery')}}">
                    <button class="btn btn-success">Voltar</button>
                </a>
            </div>
    </div>
</div>
