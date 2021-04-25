<?php

namespace App\Http\Controllers\API;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlunoController extends Controller
{
    public function index($nome = '', $order_by='nome', $desc = 'DESC')
    {
        $alunos = Aluno::when($nome, function($q) use($nome) {
            if ($nome == 'todos') {
                return $q;
            }
            return $q->where('nome', 'like', $nome . '%');
        });

        /**
         * @todo Colocar o order by
         */
        $alunos->when($order_by, function($q) use($order_by, $desc) {
            return $q->orderBy($order_by, $desc);
        });

        return $alunos->get()->toJson();
    }

    public function alunosTurma($id, $nome = '') {
        $alunos = Aluno::where('turma_id', $id)
                        ->where('nome', 'like', $nome.'%');

        return $alunos->get()->toJson();
    }
}
