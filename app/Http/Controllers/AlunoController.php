<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use Illuminate\Support\Carbon;
use App\Curso;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::join('curso', 'aluno.id_curso', '=',  'curso.id_curso')
            ->select('aluno.*', 'curso.nome AS nome_curso')
            ->get();
        return view('alunos/index', ['alunos' => $alunos]);
    }

    public function show($id)
    {
        $aluno = Aluno::join('curso', 'aluno.id_curso', '=',  'curso.id_curso')
            ->select('aluno.*', 'curso.nome AS nome_curso')
            ->where('id_aluno', '=', $id)
            ->first();
        return view('alunos/detalhes', ['aluno' => $aluno]);
    }

    public function store()
    {

        $cursos = Curso::all();

        if (request()->isMethod('post')) {
            $data = request()->validate([
                'nome' => 'required',
                'data_nascimento' => 'required',
                'logradouro' => 'required',
                'numero' => 'required',
                'bairro' => 'required',
                'cidade' => 'required',
                'estado' => 'required',
                'cep' => 'required',
                'id_curso' => 'required'
            ]);
            $data['data_criacao'] = Carbon::now();
            $curso = Curso::find($data['id_curso']);
            $curso->alunos()->create($data);
            return redirect('alunos');
        } else {
            return view('alunos/cadastrar', ['cursos' => $cursos]);
        }
    }

    public function update($id)
    {
        $aluno = Aluno::join('curso', 'aluno.id_curso', '=',  'curso.id_curso')
            ->select('aluno.*', 'curso.nome AS nome_curso')
            ->where('id_aluno', '=', $id)
            ->first();
        $cursos = Curso::all();

        if (request()->isMethod('put')) {
            $data = request()->validate([
                'nome' => 'required',
                'data_nascimento' => 'required',
                'logradouro' => 'required',
                'numero' => 'required',
                'bairro' => 'required',
                'cidade' => 'required',
                'estado' => 'required',
                'cep' => 'required',
                'id_curso' => 'required'
            ]);
            $aluno->update($data);
            return redirect('alunos');
        } else {
            return view('alunos/editar', ['cursos' => $cursos, 'aluno' => $aluno]);
        }
    }

    public function delete($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return redirect('alunos');
    }
}
