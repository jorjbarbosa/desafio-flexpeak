@extends('layout')

@section('content')
    <div class="row">
        <a href="cursos/cadastrar" class="btn btn-success ml-auto my-3">Cadastrar Curso</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Cursos Cadastrados</h3>
                    <table class="table text-center">
                            <thead>
                              <tr>
                                <th>id</th>
                                <th>Nome</th>
                                <th>Data de Criação</th>
                                <th>Professor Responsável</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody >
                              <tr>
                                <td>1</td>
                                <td>Laravel Básico</td>
                                <td>01/01/2019</td>
                                <td>John Doe</td>
                                <td>
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-primary">Detalhes</a>
                                        <a href="#" class="btn btn-danger">Excluir</a>
                                    </div>
                                </td>
                              </tr>
                              <tr>
                                    <td>1</td>
                                    <td>Laravel Básico</td>
                                    <td>01/01/2019</td>
                                    <td>John Doe</td>
                                    <td>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-primary">Detalhes</a>
                                            <a href="#" class="btn btn-danger">Excluir</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Laravel Básico</td>
                                    <td>01/01/2019</td>
                                    <td>John Doe</td>
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
