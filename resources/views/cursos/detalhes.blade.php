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
        </div>
    </div>
@endsection
