<?php


Route::get('/', function () {
    return view('professores/index');
});

// Professores
Route::get('professores', 'ProfessorController@index');
Route::view('professor/cadastrar', 'professores/cadastrar');
Route::post('professor/cadastrar', 'ProfessorController@store');
Route::get('professor/{id}', 'ProfessorController@show');
Route::get('professor/editar/{id}', 'ProfessorController@update');
Route::put('professor/editar/{id}', 'ProfessorController@update');
