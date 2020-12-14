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
                        <h2>Veículos alugados</h2>
                        <h4>10</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-md-12">

        </div>
    </div>
@endsection

@push('css')

@endpush

@push('js')

@endpush
