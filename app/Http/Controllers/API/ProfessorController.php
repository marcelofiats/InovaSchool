<?php

namespace App\Http\Controllers\API;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProfessorController extends Controller
{
    public function index($nome = '', $order_by='nome', $desc = 'DESC')
    {
        $professores = DB::table('pessoas')
                        ->join('users', 'pessoas.id', '=', 'users.pessoa_id')
                        ->join('professores', 'users.id', '=', 'professores.user_id')
                        ->where('nome', 'like', $nome.'%');

        $professores->when($order_by, function($q) use($order_by, $desc) {
            return $q->orderBy($order_by, $desc);
        });

        return $professores->get()->toJson();
    }

    public function professoresTurma($id, $nome = ''){

        $professores = DB::table('pessoas')
                        ->join('users', 'pessoas.id', '=', 'users.pessoa_id')
                        ->join('professores', 'users.id', '=', 'professores.user_id')
                        ->join('professor_turmas', 'professores.id', 'professor_turmas.professor_id')
                        ->where('professor_turmas.turma_id', $id)
                        ->where('pessoas.nome', 'like', $nome.'%')->get();

        foreach($professores as $professor){
            $professor->disciplinas = Professor::find($professor->id)->disciplina;
        }

        return $professores->toJson();
    }
}



