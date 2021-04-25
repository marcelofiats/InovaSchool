<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pessoa;
use App\Models\Professor;
use App\Jobs\sendMailUser;
use Illuminate\Http\Request;
use App\Http\Requests\PessoaRequest;
use Illuminate\Support\Facades\Hash;

class ProfessorController extends Controller
{
    public function home(){
        return view('professor.home');
    }

    public function index()
    {
        return view("professor.index");
    }

    public function create(){
        return view("professor.create");
    }

    public function store(PessoaRequest $request){
        $pessoa = new Pessoa();
        $pessoa->nome = $request->nome;
        $pessoa->data_nascimento = $request->dataNascimento;
        $pessoa->sexo = $request->sexo;
        $pessoa->cpf = $request->cpf;
        $pessoa->rg = $request->rg;
        $pessoa->telefone1 = $request->telefone1;
        $pessoa->telefone2 = $request->telefone2;
        $pessoa->cep = $request->cep;
        $pessoa->rua = $request->rua;
        $pessoa->numero = $request->numero;
        $pessoa->complemento = $request->complemento;
        $pessoa->bairro = $request->bairro;
        $pessoa->cidade = $request->cidade;
        $pessoa->uf = $request->uf;
        $index = $pessoa->save();

        $user = new User();

        if($index)
        {
            $index = null;
            $user->email = $request->email;
            $user->password = Hash::make($request->cpf);
            $user->permissao = 4;
            $user->pessoa()->associate($pessoa);
            $user->save();
            $professor = New Professor();
            $professor->user()->associate($user);
            $professor->save();
        }
        $index = $pessoa->save();


        if(!$index){
            return redirect()->route('professor.index')->with('error', 'erro ao cadastrar nova secretária');
        }
        sendMailUser::dispatch($user);
        return redirect()->route('professor.index')->with('success', 'secretária cadastrado com sucesso!!!');
    }

    public function edit($id){
        $professor = Professor::find($id);
        return view('professor.edit', compact('professor'));
    }

    public function update(Request $request, $id){
        $professor = Professor::find($id);
        $professor->user->pessoa->nome = $request->nome;
        $professor->user->pessoa->data_nascimento = $request->dataNascimento;
        $professor->user->pessoa->sexo = $request->sexo;
        $professor->user->pessoa->cpf = $request->cpf;
        $professor->user->pessoa->rg = $request->rg;
        $professor->user->pessoa->telefone1 = $request->telefone1;
        $professor->user->pessoa->telefone2 = $request->telefone2;
        $professor->user->pessoa->cep = $request->cep;
        $professor->user->pessoa->rua = $request->rua;
        $professor->user->pessoa->numero = $request->numero;
        $professor->user->pessoa->complemento = $request->complemento;
        $professor->user->pessoa->bairro = $request->bairro;
        $professor->user->pessoa->cidade = $request->cidade;

        $professor->user->email = $request->email;
        $professor->user->save();

        $index = $professor->user->pessoa->save();

        if(!$index){
            return redirect()->route('professor.index')->with('error', 'erro ao alterar cadastrar novo professor');
        }
        return redirect()->route('professor.index')->with('success', 'professor alterado com sucesso!!!');
    }
}
