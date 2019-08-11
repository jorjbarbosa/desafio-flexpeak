<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use Illuminate\Support\Carbon;

class ProfessorController extends Controller
{
    public function index()
    {
        $professores = Professor::all();
        return view('professores/index', [
            'professores' => $professores
        ]);
    }

    public function store()
    {

        $data = request()->validate([
            'nome' => 'required',
            'data_nascimento' => 'required'
        ]);
        $data['data_criacao'] = Carbon::now();
        Professor::create($data);
        return redirect('professores');
    }

    public function show($id)
    {
        $professor = Professor::find($id);

        return view('professores/detalhes', [
            'professor' => $professor
        ]);
    }

    public function update($id)
    {
        $professor = Professor::find($id);
        // dd(request()->method());
        if (request()->isMethod('put')) {
            $data = request()->validate([
                'nome' => 'required',
                'data_nascimento' => 'required'
            ]);
            $professor->update($data);
            return redirect('professores');
        } else {
            return view('professores/editar', ['professor' => $professor]);
        }
    }
}
