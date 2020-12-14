@extends('adminlte::page')

@section('title', 'Fluxo de Caixa')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="fas fa-tachometer-alt mr-2"></i><a href="#">Fluxo de caixa</a>
        </li>
    </ol>
@stop

@section('content')
    <div class="container col-md-12">
        <div class="row col-md-12">
            <div class="row col-md-12">
                <h1>Fluxo de caixa</h1>
            </div>
            <div class="row col-md-12">
                <h5>Informe as receitas e custos abaixo para verificar seu saldo.</h5>
            </div>
        </div>
        <div class="row col-md-12 mt-4">
            <div class="row col-md-12">
                <div class="card col-md-12">
                    <div class="card-body">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="row col-md-12">
                                    <h1 class="text-justify">Receita</h1>
                                </div>
                                <div class="row col-md-12">
                                    <form class="col-md-12">
                                        <div class="form-group">
                                            <label for="veiculo">Escolha o veículo</label>
                                            <select class="form-control" id="veiculo">
                                                <option>Ford</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="reboque"> Reboque/Guincho R$:</label>
                                            <input type="text" class="form-control col-md-6" id="reboque" placeholder="Digite o total do reboque/guincho">
                                        </div>
                                        <div class="form-group">
                                            <label for="adicional"> Valor total da Hora adicional R$:</label>
                                            <input type="text" class="form-control col-md-6" id="adicional" placeholder="Digite o total da hora adicional">
                                        </div>
                                        <div class="form-group">
                                            <label for="infracao"> Valor Infração de Trânsito: R$:</label>
                                            <input type="text" class="form-control col-md-6" id="infracao" placeholder="Digite o total da hora adicional">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Apreensão do Carro R$:</label>
                                            <input type="email" class="form-control col-md-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o total da hora adicional">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> No Show R$:</label>
                                            <input type="email" class="form-control col-md-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o total da hora adicional">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Lavagem do Carro R$:</label>
                                            <input type="email" class="form-control col-md-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o total da hora adicional">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Documentos do Carro R$:</label>
                                            <input type="email" class="form-control col-md-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o total da hora adicional">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Combustível R$:</label>
                                            <input type="email" class="form-control col-md-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o total da hora adicional">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Chave do Carro R$:</label>
                                            <input type="email" class="form-control col-md-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o total da hora adicional">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Custos Operacionais R$:</label>
                                            <input type="email" class="form-control col-md-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o total da hora adicional">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Outros R$:</label>
                                            <input type="email" class="form-control col-md-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o total da hora adicional">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row col-md-12">
                                    <h1>Custo</h1>
                                </div>
                                <div class="row col-md-12">
                                    <form class="col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputEmail1">Revisão</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputEmail1">Reparo</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputPassword1">Seguro</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputEmail1">Imposto</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputPassword1">Combustível</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputPassword1">Lavagem</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputPassword1">Rastreamento</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputPassword1">IPVA</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputPassword1">DPVAT</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputPassword1">Peças</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-md-12">
                <div class="card col-md-12">
                    <div class="card-body">
                        <table class="table table-striped table-responsive-md table-light">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Receita R$</th>
                                <th scope="col">Custo R$</th>
                                <th scope="col">Veículo</th>
                                <th scope="col">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <div class="row col-md-12">
                                        <a class="btn btn-danger mr-2" href="">Remover</a>
                                        <a class="btn btn-warning" href="">Alterar</a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row col-md-12 mt-4">
                            <a class="btn btn-success mr-2" href="">Calcular</a>
                            <a class="btn btn-danger" href="">Cancelar</a>
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
<script>
    import Button from "@/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>
