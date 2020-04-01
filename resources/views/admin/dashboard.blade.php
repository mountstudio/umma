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
    {{--first chart for registered--}}
    <script>
        $(document).ready(function () {
            let url = "{{ route('chart.count.registered') }}";
            let mouths = [];
            let numbers = [];
            $.get(url, function (response) {
                for (key in response) {
                    mouths.push(key);
                    numbers.push(response[key]);
                }
                let chartForRegistered = document.getElementById("myChart").getContext('2d');
                new Chart(chartForRegistered, {
                    type: 'bar',
                    data: {
                        labels: mouths,
                        datasets: [{
                            data: numbers,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        title: {
                            text: "Количество зарегистрированных пользователей",
                            display: true
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    stepSize: 1,
                                }
                            }]
                        },
                        legend: {
                            display: false
                        }
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            let url = "{{ route('chart.count.views') }}";
            let types = [];
            let numbers = [];
            $.get(url, function (response) {
                for (key in response) {
                    types.push(key);
                    numbers.push(response[key]);
                }
                let chartForViews = document.getElementById('myChart2').getContext('2d');
                new Chart(chartForViews, {
                    type: 'bar',
                    data: {
                        labels: types,
                        datasets: [{
                            data: numbers,
                            backgroundColor:
                                ['#49a9ea', '#36caab', '#ac5353'],
                        }]
                    },
                    options: {
                        title: {
                            text: "Количество просмотров",
                            display: true
                        },
                        legend: {
                            display: false
                        }
                    }
                });

            });
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
                            suggestedMax: 100,

                        }
                    }]
                }
            }
        });

    </script>
@endpush
