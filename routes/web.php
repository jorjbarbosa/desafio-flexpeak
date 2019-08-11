<?php


Route::get('/', function () {
    return view('professores/index');
});

// Professores
Route::get('professores', 'ProfessorController@index');
Route::view('professor/cadastrar', 'professores/cadastrar');
Route::post('professor/cadastrar', 'ProfessorController@store');
