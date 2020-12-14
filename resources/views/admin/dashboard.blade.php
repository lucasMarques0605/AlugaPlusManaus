@extends('adminlte::page')

@section('title', 'Dashboard')

{{--@section('content_header')--}}
{{--    <ol class="breadcrumb">--}}
{{--        <li class="breadcrumb-item"><i class="fas fa-tachometer-alt mr-2"></i><a href="#">Dashboard</a>--}}
{{--        </li>--}}
{{--    </ol>--}}
{{--@stop--}}

@section('content')
    <div class="container col-md-12">
        <div class="row col-md-12">
            <div class="col-md-3">
                <div class="card bg-success">
                    <div class="card-body">
                        <h2>Receita R$</h2>
                        <h4>300.000</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-danger">
                    <div class="card-body">
                        <h2>Custo R$</h2>
                        <h4>300.000</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-primary">
                    <div class="card-body">
                        <h2>Usuários</h2>
                        <h4>100</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-dark">
                    <div class="card-body">
                        <h2>Veículos alugados hoje</h2>
                        <h4>10</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-md-12">
            <div class="card col-md-8">
                <div class="card-body">
                    <canvas class="col-md-12" id="myChart" width="300" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')

@endpush

@push('js')
<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            datasets: [{
                label: 'Receita R$',
                data: [12, 19, 3, 5, 2, 3],
                // backgroundColor: [
                //     'rgba(255, 99, 132, 0.2)',
                //     'rgba(54, 162, 235, 0.2)',
                //     'rgba(255, 206, 86, 0.2)',
                //     'rgba(75, 192, 192, 0.2)',
                //     'rgba(153, 102, 255, 0.2)',
                //     'rgba(255, 159, 64, 0.2)'
                // ],
                // borderColor: [
                //     'rgba(255, 99, 132, 1)',
                //     'rgba(54, 162, 235, 1)',
                //     'rgba(255, 206, 86, 1)',
                //     'rgba(75, 192, 192, 1)',
                //     'rgba(153, 102, 255, 1)',
                //     'rgba(255, 159, 64, 1)'
                // ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

@endpush
