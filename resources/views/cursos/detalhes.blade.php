@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card mt-3 p-3">
                <h3>Detalhes do Curso</h3>
                <p>Nome do Curso: {{$curso->nome}}</p>
                <p>Data de cadastro: {{$curso->data_criacao}}</p>
                <p>Professor Responsável: {{$curso->nome_professor}}</p>
                <a href="/curso/editar/{{$curso->id_curso}}" class="btn btn-primary btn-block">Editar Detalhes</a>
            </div>
            <hr>
            <div class="card mt-3 p-3">
                <h3 class="mb-3">Alunos Matriculados Neste Curso</h3>
                <ul>
                    @foreach ($alunos as $aluno)
                        <li><a href="/aluno/{{$aluno->id_aluno}}">{{$aluno->nome}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
