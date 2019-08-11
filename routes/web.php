<?php


Route::get('/', function () {
    return view('professores/index');
});

// Professores
Route::get('professores', function () {
    return view('professores/index');
});
Route::get('professor/{id}', function () {
    return view('professores/detalhes');
});
Route::get('professor/editar/{id}', function () {
    return view('professores/editar');
});

// Alunos

Route::get('alunos', function () {
    return view('alunos/index');
});
Route::get('aluno/{id}', function () {
    return view('alunos/detalhes');
});
Route::get('alunos/editar/{id}', function () {
    return view('alunos/editar');
});
