<?php


Route::view('/', 'home');

// Professores
Route::get('professores', 'ProfessorController@index');
Route::view('professor/cadastrar', 'professores/cadastrar');
Route::post('professor/cadastrar', 'ProfessorController@store');
Route::get('professor/{id}', 'ProfessorController@show');
Route::get('professor/editar/{id}', 'ProfessorController@update');
Route::put('professor/editar/{id}', 'ProfessorController@update');
Route::delete('professor/excluir/{id}', 'ProfessorController@delete');

// Cursos
Route::get('cursos', 'CursoController@index');
Route::get('curso/cadastrar', 'CursoController@store');
Route::post('curso/cadastrar', 'CursoController@store');
Route::get('curso/{id}', 'CursoController@show');
Route::get('curso/editar/{id}', 'CursoController@update');
Route::put('curso/editar/{id}', 'CursoController@update');
Route::delete('curso/excluir/{id}', 'CursoController@delete');

// Alunos
Route::get('alunos', 'AlunoController@index');
Route::get('aluno/cadastrar', 'AlunoController@store');
Route::post('aluno/cadastrar', 'AlunoController@store');
Route::get('aluno/{id}', 'AlunoController@show');
Route::get('aluno/editar/{id}', 'AlunoController@update');
Route::put('aluno/editar/{id}', 'AlunoController@update');
Route::delete('aluno/excluir/{id}', 'AlunoController@delete');

// Relatorio
Route::get('relatorio', 'RelatorioController@index');
Route::get('gerar-relatorio', 'RelatorioController@generate');
