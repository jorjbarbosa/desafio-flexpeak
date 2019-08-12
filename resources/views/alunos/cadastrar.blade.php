@extends('layout')

@section('content')
    <div class="row">
        <a href="/alunos" class="btn btn-danger ml-auto my-3">Cancelar</a>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card mb-3">
                <div class="card-body">
                    <h3>Cadastrar Aluno</h3>

                    <form action="/aluno/cadastrar" method="post">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control {{ $errors->has('nome') ? ' is-invalid' : '' }}">
                            @if ($errors->has('nome'))
                                <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="nome">Data de Nascimento</label>
                            <input type="date" name="data_nascimento" class="form-control {{ $errors->has('data_nascimento') ? ' is-invalid' : '' }}">
                            @if ($errors->has('data_nascimento'))
                                <div class="invalid-feedback">{{ $errors->first('data_nascimento') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="cep">CEP</label>
                            <input type="text" id="cep" name="cep" class="form-control {{ $errors->has('cep') ? ' is-invalid' : '' }}">
                            @if ($errors->has('cep'))
                                <div class="invalid-feedback">{{ $errors->first('cep') }}</div>
                            @endif
                            <button type="button" class="btn btn-primary mt-1" id="consulta_cep">Consultar CEP</button>
                        </div>
                        <div class="form-group">
                            <label for="logradouro">Logradouro</label>
                            <input type="text" name="logradouro" class="form-control {{ $errors->has('logradouro') ? ' is-invalid' : '' }}" id="logradouro">
                            @if ($errors->has('logradouro'))
                                <div class="invalid-feedback">{{ $errors->first('logradouro') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="numero">Numero</label>
                            <input type="text" name="numero" class="form-control {{ $errors->has('numero') ? ' is-invalid' : '' }}" >
                            @if ($errors->has('numero'))
                                <div class="invalid-feedback">{{ $errors->first('numero') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" class="form-control {{ $errors->has('bairro') ? ' is-invalid' : '' }}" id="bairro">
                            @if ($errors->has('bairro'))
                                <div class="invalid-feedback">{{ $errors->first('bairro') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" class="form-control {{ $errors->has('cidade') ? ' is-invalid' : '' }}" id="cidade">
                            @if ($errors->has('cidade'))
                                <div class="invalid-feedback">{{ $errors->first('cidade') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" class="form-control {{ $errors->has('estado') ? ' is-invalid' : '' }}" id="estado">
                            @if ($errors->has('estado'))
                                <div class="invalid-feedback">{{ $errors->first('estado') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="id_curso">Curso</label>
                            <select name="id_curso" class="form-control {{ $errors->has('estado') ? ' is-invalid' : '' }}">
                                @foreach ($cursos as $curso)
                                <option value="{{$curso->id_curso}}">{{$curso->nome}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('estado'))
                                    <div class="invalid-feedback">{{ $errors->first('estado') }}</div>
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
