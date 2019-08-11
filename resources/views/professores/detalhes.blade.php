@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card mt-3 p-3">
                <h3>Detalhes do Professor</h3>
                <p>Nome: {{$professor->nome}}</p>
                <p>Data de Nascimento: {{$professor->data_nascimento}}</p>
                <p>Data de cadastro: {{$professor->data_criacao}}</p>
                <a href="/professor/editar/{{$professor->id_professor}}" class="btn btn-primary btn-block">Editar Detalhes</a>
            </div>
        </div>
    </div>
@endsection
