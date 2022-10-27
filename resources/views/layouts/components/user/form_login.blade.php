@if($erro)
<div class="text-center p-3 mb-2 bg-danger text-white border">
    <div class="row">
        <h3>{{$action}}</h2>
        <small style="color: white">{{$erro}}</small>
    </div>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
            <div class="col-4 mt-2 border border-1 rounded p-4">
                <form action="/login" method="post">
                    @csrf
                    <div class="col mt-2 ">
                        <h3><i class="icon-signin"></i> {{$title}}</h3>
                    </div>
                    <div class="col mt-4">
                        <input name="email" type="text" placeholder="email" class="form-control">
                    </div>
                    <div class="col mt-2">
                        <input name="password" type="password" placeholder="senha" class="form-control">
                    </div>
                    <div class="col mt-4 d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Logar</button>
                        <a class="btn btn-success" href="/access/create">criar uma conta</a>
                    </div>
                </form>
            </div>
    </div>
</div>

