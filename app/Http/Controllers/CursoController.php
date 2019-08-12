<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Professor;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Aluno;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::join('professor', 'curso.id_professor', '=',  'professor.id_professor')
            ->select('curso.*', 'professor.nome AS nome_professor')
            ->get();
        return view('cursos/index', ['cursos' => $cursos]);
    }

    public function store()
    {
        $professores = Professor::all();

        if (request()->isMethod('post')) {
            $data = request()->validate([
                'nome' => 'required',
                'id_professor' => 'required'
            ]);
            $data['data_criacao'] = Carbon::now();
            $professor = Professor::find($data['id_professor']);
            $professor->cursos()->create($data);
            return redirect('cursos');
        } else {
            return view('cursos/cadastrar', ['professores' => $professores]);
        }
    }

    public function show($id)
    {
        $curso = Curso::join('professor', 'curso.id_professor', '=',  'professor.id_professor')
            ->select('curso.*', 'professor.nome AS nome_professor')
            ->where('id_curso', '=', $id)
            ->first();
        $alunosCurso = Aluno::where('id_curso', '=', $curso->id_curso)->get();
        return view('cursos/detalhes', ['curso' => $curso, 'alunos' => $alunosCurso]);
    }

    public function update($id)
    {
        $curso = Curso::join('professor', 'curso.id_professor', '=',  'professor.id_professor')
            ->select('curso.*', 'professor.nome AS nome_professor')
            ->where('id_curso', '=', $id)
            ->first();
        $professores = Professor::all();
        if (request()->isMethod('put')) {
            $data = request()->validate([
                'nome' => 'required',
                'id_professor' => 'required'
            ]);
            $curso->update($data);
            return redirect('professores');
        } else {
            return view('cursos/editar', ['curso' => $curso, 'professores' => $professores]);
        }
    }

    public function delete($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();
        return redirect('cursos');
    }
}
