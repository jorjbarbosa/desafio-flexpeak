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
                    <table class="table">
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

                                        <form class="float-right ml-3" action="/professor/excluir/{{$professor->id_professor}}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                            @csrf
                                        </form>
                                        <a href="/professor/{{$professor->id_professor}}" class="btn btn-primary float-right ">Detalhes</a>
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

