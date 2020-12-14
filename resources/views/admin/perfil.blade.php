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
        <div class="row col-md-12 justify-content-center">
            <div class="card col-md-6">
                <div class="card-body">
                    <h1 class="text-center">Suas informações de perfil</h1>
                    <div class="row col-md-12">
                        <form class="col-md-12">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Nome completo:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-text text-muted" id="email" placeholder="Insira seu e-mail">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')

@endpush

@push('js')

@endpush
