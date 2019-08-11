@extends('layout')

@section('content')
    <div class="row">
        <a href="alunos/cadastrar" class="btn btn-success ml-auto my-3">Cadastrar Aluno</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Alunos Cadastrados</h3>
                    <table class="table text-center">
                            <thead>
                              <tr>
                                <th>id</th>
                                <th>Nome</th>
                                <th>Curso</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody >
                              <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>Laravel Básico</td>
                                <td>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-primary">Detalhes</a>
                                        <a href="#" class="btn btn-danger">Excluir</a>
                                    </div>
                                </td>
                              </tr>
                              <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>Laravel Básico</td>
                                    <td>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-primary">Detalhes</a>
                                            <a href="#" class="btn btn-danger">Excluir</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>Laravel Básico</td>
                                    <td>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-primary">Detalhes</a>
                                            <a href="#" class="btn btn-danger">Excluir</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                          </table>
                </div>
            </div>
        </div>
    </div>
@endsection
