<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pessoa;
use App\Models\Diretoria;
use App\Jobs\sendMailUser;
use Illuminate\Http\Request;
use App\Http\Requests\PessoaRequest;
use Illuminate\Support\Facades\Hash;

class DiretoriaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('diretoria.home');
    }

    public function index()
    {
        return view ("diretoria.index");
    }


    public function create(){
        return view("diretoria.create");
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
            $user->permissao = 2;
            $user->password = Hash::make($request->cpf);
            $user->pessoa()->associate($pessoa);
            $user->save();
            $diretoria = New Diretoria();
            $diretoria->user()->associate($user);
            $diretoria->save();
        }
        $index = $pessoa->save();


        if(!$index){
            return redirect()->route('diretoria.index')->with('error', 'erro ao cadastrar nova secretária');
        }
        sendMailUser::dispatch($user);
        return redirect()->route('diretoria.index')->with('success', 'secretária cadastrado com sucesso!!!');
    }

    public function edit($id){
        $diretoria = Diretoria::find($id);
        return view('diretoria.edit', compact('diretoria'));
    }

    public function update(Request $request, $id){
        $diretoria = Diretoria::find($id);
        $diretoria->user->pessoa->nome = $request->nome;
        $diretoria->user->pessoa->data_nascimento = $request->dataNascimento;
        $diretoria->user->pessoa->sexo = $request->sexo;
        $diretoria->user->pessoa->cpf = $request->cpf;
        $diretoria->user->pessoa->rg = $request->rg;
        $diretoria->user->pessoa->telefone1 = $request->telefone1;
        $diretoria->user->pessoa->telefone2 = $request->telefone2;
        $diretoria->user->pessoa->cep = $request->cep;
        $diretoria->user->pessoa->rua = $request->rua;
        $diretoria->user->pessoa->numero = $request->numero;
        $diretoria->user->pessoa->complemento = $request->complemento;
        $diretoria->user->pessoa->bairro = $request->bairro;
        $diretoria->user->pessoa->cidade = $request->cidade;
        $diretoria->user->pessoa->uf = $request->uf;

        $diretoria->user->email = $request->email;
        $diretoria->user->save();

        $index = $diretoria->user->pessoa->save();

        if(!$index){
            return redirect()->route('diretoria.index')->with('error', 'erro ao alterar cadastrar novo diretoria');
        }
        return redirect()->route('diretoria.index')->with('success', 'diretoria alterado com sucesso!!!');
    }
}
