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
                    <form action="/curso/cadastrar" method="post">
                        <div class="form-group">
                            <label for="nome">Nome do Curso</label>
                            <input type="text" name="nome" class="form-control {{ $errors->has('nome') ? ' is-invalid' : '' }}" value="{{old('nome')}}">
                            @if ($errors->has('nome'))
                                <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="id_professor">Professor Responsável</label>
                            <select name="id_professor" class="form-control {{ $errors->has('id_professor') ? ' is-invalid' : '' }}">
                                @foreach ($professores as $professor)
                                <option value="{{$professor->id_professor}}">{{$professor->nome}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('id_professor'))
                                <div class="invalid-feedback">{{ $errors->first('id_professor') }}</div>
                            @endif
                        </div>
                        <input type="submit" value="Cadastrar" class="btn btn-success text-center">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
