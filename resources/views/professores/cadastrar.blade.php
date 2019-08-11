@extends('layout')

@section('content')
    <div class="row">
        <a href="/professores" class="btn btn-danger ml-auto my-3">Cancelar</a>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3>Cadastrar Professor</h3>

                    <form action="/professor/cadastrar" method="post">
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
                        <input type="submit" value="Cadastrar" class="btn btn-success text-center">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
