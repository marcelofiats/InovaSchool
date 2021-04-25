<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pessoa;
use App\Models\Secretaria;
use Illuminate\Http\Request;
use App\Http\Requests\PessoaRequest;
use Illuminate\Support\Facades\Hash;
use App\Jobs\sendMailUser as JobsSendMailUser;

class SecretariaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        return view('secretaria.home');
    }

    public function index(){
        return view("secretaria.index");
    }

    public function create(){
        return view("secretaria.create");
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
            $user->permissao = 3;
            $user->pessoa()->associate($pessoa);
            $user->save();
            $secretaria = New Secretaria();
            $secretaria->user()->associate($user);
            $secretaria->save();
        }
        $index = $pessoa->save();


        if(!$index){
            return redirect()->route('secretaria.index')->with('error', 'erro ao cadastrar nova secretária');
        }
        JobsSendMailUser::dispatch($user);
        return redirect()->route('secretaria.index')->with('success', 'secretária cadastrado com sucesso!!!');
    }

    public function edit($id){
        $secretaria = Secretaria::find($id);
        return view('secretaria.edit', compact('secretaria'));
    }

    public function update(Request $request, $id){
        $secretaria = Secretaria::find($id);
        $secretaria->user->pessoa->nome = $request->nome;
        $secretaria->user->pessoa->data_nascimento = $request->dataNascimento;
        $secretaria->user->pessoa->sexo = $request->sexo;
        $secretaria->user->pessoa->cpf = $request->cpf;
        $secretaria->user->pessoa->rg = $request->rg;
        $secretaria->user->pessoa->telefone1 = $request->telefone1;
        $secretaria->user->pessoa->telefone2 = $request->telefone2;
        $secretaria->user->pessoa->cep = $request->cep;
        $secretaria->user->pessoa->rua = $request->rua;
        $secretaria->user->pessoa->numero = $request->numero;
        $secretaria->user->pessoa->complemento = $request->complemento;
        $secretaria->user->pessoa->bairro = $request->bairro;
        $secretaria->user->pessoa->cidade = $request->cidade;

        $secretaria->user->email = $request->email;
        $secretaria->user->save();

        $index = $secretaria->user->pessoa->save();

        if(!$index){
            return redirect()->route('secretaria.index')->with('error', 'erro ao alterar cadastrar novo secretaria');
        }
        return redirect()->route('secretaria.index')->with('success', 'secretaria alterado com sucesso!!!');
    }
}
