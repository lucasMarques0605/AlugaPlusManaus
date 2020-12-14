@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="fas fa-car mr-2"></i><a href="#">Veículos</a>
        </li>
    </ol>
@stop

@section('content')
    <div class="container col-md-12">
        <div class="row col-md-12 justify-content-center">
            <div class="card col-md-6">
                <div class="card-body">
                    <div class="row col-md-12 justify-content-center mt-4">
                        <i class="fas fa-car mr-2"></i>
                    </div>
                    <h1 class="text-center">Informe os dados do veículo</h1>
                    <div class="row col-md-12 mt-4">
                        <form class="col-md-12">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Nome do veículo:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="row col-md-12">
                                <div class="form-group col-6">
                                    <label for="exampleFormControlSelect1">Escolha a marca</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Ford</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleFormControlSelect1">Escolha o modelo</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Ford</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row col-md-12">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Placa do veículo:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Chassi:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="row col-md-12">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Número do documento:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="row col-md-12 mt-4">
                                <a class="btn btn-success mr-2" href="">Cadastrar</a>
                                <a class="btn btn-danger" href="">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row col-md-12 justify-content-center">
            <div class="card col-md-12">
                <div class="card-body">
                    <div class="row col-md-12 justify-content-center mt-4">
                        <i class="fas fa-car mr-2"></i>
                    </div>
                    <h1 class="text-center">Caso precise cadastrar marca/modelo</h1>
                    <div class="row col-md-12 mt-4">
                        <div class="col-6">
                            <h1 class="text-center">Modelo</h1>
                            <form class="col-md-12">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Nome da marca:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="row col-md-12 mt-4">
                                    <a class="btn btn-success mr-2" href="">Cadastrar</a>
                                    <a class="btn btn-danger" href="">Cancelar</a>
                                </div>
                            </form>
                        </div>
                        <div class="col-6">
                            <h1 class="text-center">Marca</h1>
                            <form class="col-md-12">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Nome do modelo:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="row col-md-12 mt-4">
                                    <a class="btn btn-success mr-2" href="">Cadastrar</a>
                                    <a class="btn btn-danger" href="">Cancelar</a>
                                </div>
                            </form>
                        </div>
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
