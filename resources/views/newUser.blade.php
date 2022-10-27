@extends('layouts.partials.basic')

@section('content')

@include('layouts.partials.head')

@include('layouts.partials.top_d')

<div class="container">
        <div class="row">
            <div class="col-sm mt-4">
                <img src="../../assets/img/create_account.png" style="width: 500px;">
            </div>
            <div class="col-sm card mt-4">
                <div class="mt-4">

                    @include('layouts.components.user.add_access')

                </div>        
            </div>
        </div>
    </div>

@endsection