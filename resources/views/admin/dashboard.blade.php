@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                @include('admin.partials.sidebar')
            </div>
            <div class="col-9">
                @yield('dashboard_content')
            </div>
        </div>
    </div>
@endsection
@push('styles')
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/default.css') }}"/>--}}

@endpush
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <script>
        let labels1 = ['Yes', 'Yes but in green'];
        let data1 = [69, 31];
        let colors1 = ['#49a9ea', '#36']

        let mychart1 = document.getElementById('myChart').getContext('2d');

        let chart1 = new Chart(mychart1, {
            type: 'doughnut',
            data: {
                labels: labels1,
                datasets: [{
                    data: data1,
                    backgroundColor: colors1
                }]
            },
            options: {
                title: {
                    text: "Do you like doughnuts?",
                    display: true
                }
            }
        });

        let labels2 = ['Germany', 'France', 'Uk', 'Italy', 'Spain', 'Others(23)'];
        let data2 = [83, 67, 66, 61, 47, 187];
        let colors2 = ['#49a9ea', '#36caab', '#34495e', '#b370cf', '#ac5353', '#cfd4d8']

        let mychart2 = document.getElementById('myChart2').getContext('2d');

        let chart2 = new Chart(mychart2, {
            type: 'pie',
            data: {
                labels: labels2,
                datasets: [{
                    data: data2,
                    backgroundColor: colors2
                }]
            },
            options: {
                title: {
                    text: "Do you like pie?",
                    display: true
                }
            }
        });

        let labels3 = ['Germany', 'France', 'Uk', 'Italy', 'Spain', 'Others(23)'];
        let data3 = [83, 67, 66, 61, 47, 187];
        let colors3 = ['#49a9ea', '#36caab', '#34495e', '#b370cf', '#ac5353', '#cfd4d8']

        let mychart3 = document.getElementById('myChart3').getContext('2d');

        let chart3 = new Chart(mychart3, {
            type: 'line',
            data: {
                datasets: [{
                    label: 'First dataset',
                    data: [0, 20, 40, 50]
                }],
                labels: ['January', 'February', 'March', 'April']
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 50,
                            suggestedMax: 100
                        }
                    }]
                }
            }
        });

    </script>
@endpush
