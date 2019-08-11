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
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="nome">Nome do Curso</label>
                            <input type="text" name="nome" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nome">Professor Responsável</label>
                            <select name="id_professor" class="form-control">
                                <option value="1">John Doe</option>
                                <option value="1">John Doe</option>
                                <option value="1">John Doe</option>
                            </select>
                        </div>
                        <input type="submit" value="Cadastrar" class="btn btn-success text-center">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
