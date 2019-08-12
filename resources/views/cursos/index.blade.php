@extends('layout')

@section('content')
    <div class="row">
        <a href="curso/cadastrar" class="btn btn-success ml-auto my-3">Cadastrar Curso</a>
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
                                @foreach ($cursos as $curso)
                                <tr>
                                    <td>{{$curso->id_curso}}</td>
                                    <td>{{$curso->nome}}</td>
                                    <td>{{$curso->data_criacao}}</td>
                                    <td>{{$curso->nome_professor}}</td>
                                    <td>
                                        <div class="ml-auto">
                                            <form class="float-right ml-3" action="/curso/excluir/{{$curso->id_curso}}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">Excluir</button>
                                                @csrf
                                            </form>
                                            <a href="/curso/{{$curso->id_curso}}" class="btn btn-primary">Detalhes</a>

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
