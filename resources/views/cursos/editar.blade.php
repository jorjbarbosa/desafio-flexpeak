@extends('layout')

@section('content')
    <div class="row">
        <a href="cursos/cadastrar" class="btn btn-success ml-auto my-3">Cadastrar Curso</a>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3>Cadastrar Curso</h3>
                    <form action="/curso/editar/{{$curso->id_curso}}" method="post">
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nome">Nome do Curso</label>
                            <input type="text" name="nome" class="form-control" value="{{$curso->nome}}">
                        </div>
                        <div class="form-group">
                            <label for="nome">Professor Responsável</label>
                            <select name="id_professor" class="form-control">
                            <option value="{{$curso->id_professor}}" selected disabled>{{$curso->nome_professor}}</option>
                                @foreach ($professores as $professor)
                                <option value="{{$professor->id_professor}}">{{$professor->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" value="Cadastrar" class="btn btn-success text-center">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
