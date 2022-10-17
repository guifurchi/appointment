@extends('layouts.partials.head')

@section('content')

@include('layouts.partials.head')

<div class="wrapper nav-collapsed menu-collapsed">
    <!-- side bar-->
    <!-- top bar -->
    @include('layouts.partials.sideTopBar')

    <div class="main-panel">
        <!-- end Component -->
        @include('layouts.components.add_appointment')

        <!-- start footer -->
        @include('layouts.partials.footer')
    </div>
</div>
<!-- notification Side Bar -->
@include('layouts.partials.notificationSideBar')

@endsection