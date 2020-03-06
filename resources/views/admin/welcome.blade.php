@extends('admin.dashboard')

@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <canvas id="myChart" width="300" height="300"></canvas>
            </div>
            <div class="col-6">
                <canvas id="myChart2" width="300" height="300"></canvas>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <canvas id="myChart3" width="300" height="300"></canvas>
            </div>
        </div>
    </div>
@endsection
