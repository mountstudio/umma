@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-2">
                @include('admin.partials.sidebar')
            </div>
            <div class="col-12 col-lg-10 " >
                @yield('dashboard_content')
            </div>
        </div>
    </div>
@endsection
