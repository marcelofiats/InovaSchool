<?php

namespace App\Http\Controllers\API;

use App\Models\Aluno;
use App\Models\Turma;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TurmaController extends Controller
{
    public function buscarTurma($nome = ''){
        $turmas = Turma::all();

        for ($i = 0; $i < count($turmas); $i++) {
            $qtyAluno = Aluno::where('turma_id', $turmas[$i]->id)->get();
            $turmas[$i]->qtyAluno = count($qtyAluno);
        }

        return $turmas->toJson();
    }
}
