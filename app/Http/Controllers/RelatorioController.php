<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use PDF;

class RelatorioController extends Controller
{
    public function index()
    {
        return view('gerar-relatorio');
    }
    public function generate()
    {
        $alunos = Aluno::join('curso', 'aluno.id_curso', '=',  'curso.id_curso')
            ->join('professor', 'curso.id_professor', '=', 'professor.id_professor')
            ->select('aluno.*', 'curso.nome AS nome_curso', 'professor.nome AS nome_professor')
            ->get();
        $pdf = PDF::loadView('relatorio', compact('alunos'));
        return $pdf->stream('report.pdf');
    }
}
