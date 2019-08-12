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
            <hr>
            <div class="card mt-3 p-3">
                    <h3 class="mb-3">Cursos Deste Professor</h3>
                    <ul>
                        @foreach ($cursos as $curso)
                            <li><a href="/curso/{{$curso->id_aluno}}">{{$curso->nome}}</a></li>
                        @endforeach
                    </ul>
                </div>
        </div>
    </div>
@endsection
