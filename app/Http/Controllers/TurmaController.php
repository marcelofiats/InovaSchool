<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;
use App\Http\Requests\TurmaRequest;

class TurmaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('turma.index');
    }

    public function create(){
        return view('turma.create');
    }

    public function edit($id){
        $turma = Turma::find($id);
        return view('turma.edit', compact('turma'));
    }

    public function store(TurmaRequest $request){
        $turma = new Turma();
        $turma->nome = $request->nome;
        $turma->ano_letivo = $request->ano_letivo;
        $turma->status = true;
        $index = $turma->save();

        if (! $index){
            return redirect()->route('turma.index');
        }

        return redirect()->route('turma.index');

    }
}
