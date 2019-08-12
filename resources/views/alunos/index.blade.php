@extends('layout')

@section('content')
    <div class="row">
        <a href="aluno/cadastrar" class="btn btn-success ml-auto my-3">Cadastrar Aluno</a>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
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
                                @foreach ($alunos as $aluno)

                                <tr>
                                    <td>{{$aluno->id_aluno}}</td>
                                    <td>{{$aluno->nome}}</td>
                                    <td>{{$aluno->nome_curso}}</td>
                                    <td>
                                        <div class="ml-auto">
                                            <form class="float-right ml-3" action="/aluno/excluir/{{$aluno->id_aluno}}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">Excluir</button>
                                                @csrf
                                            </form>
                                            <a href="/aluno/{{$aluno->id_aluno}}" class="btn btn-primary">Detalhes</a>
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
