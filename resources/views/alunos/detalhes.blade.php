@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card mt-3 p-3">
                <h3>Detalhes do Aluno</h3>
                <p>Nome: {{$aluno->nome}}</p>
                <p>Data de Nascimento: {{$aluno->data_nascimento}}</p>
                <p>Logradouro: {{$aluno->logradouro}}</p>
                <p>Número: {{$aluno->numero}}</p>
                <p>Bairro: {{$aluno->bairro}}</p>
                <p>Cidade: {{$aluno->cidade}}</p>
                <p>Estado: {{$aluno->estado}}</p>
                <p>Data de cadastro: {{$aluno->data_criacao}}</p>
                <p>Nome do Curso: {{$aluno->nome_curso}}</p>
                <a href="/aluno/editar/{{$aluno->id_aluno}}" class="btn btn-primary btn-block">Editar Detalhes</a>
            </div>
        </div>
    </div>
@endsection
