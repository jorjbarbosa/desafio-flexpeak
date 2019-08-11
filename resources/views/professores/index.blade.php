@extends('layout')

@section('content')
    <div class="row">
        <a href="professor/cadastrar" class="btn btn-success ml-auto my-3">Cadastrar Professor</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Professores Cadastrados</h3>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nome</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody >
                                @foreach ($professores as $professor)
                                <tr>
                                    <td>{{$professor->id_professor}}</td>
                                    <td>{{$professor->nome}}</td>
                                    <td>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-primary">Detalhes</a>
                                            <a href="#" class="btn btn-danger">Excluir</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection

