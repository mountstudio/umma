@extends('admin.dashboard')

@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <canvas class="p-3 card-body-admin" id="myChart" width="300" height="300"></canvas>
            </div>
            <div class="col-12 col-lg-6">
                <canvas class="p-3 card-body-admin" id="myChart2" width="300" height="300"></canvas>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
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
                                    suggestedMin: 5,
                                }
                            }],
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
            let values = [];
            $.get(url, function (response) {
                for (key in response) {
                    types.push(key);
                    values.push(response[key]);
                }
                let chartForViews = document.getElementById('myChart2').getContext('2d');
                new Chart(chartForViews, {
                    type: 'bar',
                    data: {
                        labels: types,
                        datasets: [{
                            data: values,
                            backgroundColor:
                                ['#eaab2c', '#49a9ea', '#36caab', '#ac5353'],
                        }]
                    },
                    options: {
                        title: {
                            text: "Количество просмотров за послений месяц",
                            display: true
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    suggestedMin: 5,
                                }
                            }],
                        },
                        legend: {
                            display: false
                        }
                    }
                });

            });
        });
    </script>
@endpush
