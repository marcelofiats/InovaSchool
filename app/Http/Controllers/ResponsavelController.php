<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pessoa;
use App\Models\Responsavel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\PessoaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Jobs\sendMailUser as JobsSendMailUser;

class ResponsavelController extends Controller
{
    protected $table = 'Responsaveis';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        $id = Auth::user()->responsavel->id;
        $responsavel = Responsavel::find($id);
        return view('responsavel.home', compact('responsavel'))->with('alunos');
    }

    public function index()
    {
        $responsaveis = Responsavel::all();
        return view('responsavel.index', compact('responsaveis'));
    }

    public function create()
    {
        return view('responsavel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PessoaRequest $request)
    {
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
            $user->permissao = 5;
            $user->pessoa()->associate($pessoa);
            $user->save();
            $responsavel = New Responsavel();
            $responsavel->parentesco_aluno = $request->parentesco_aluno;
            $responsavel->user()->associate($user);
            $responsavel->save();
        }
        $index = $pessoa->save();


        if(!$index){
            return redirect()->route('responsavel.index')->with('error', 'erro ao cadastrar novo responsavel');
        }
        JobsSendMailUser::dispatch($user);
        return redirect()->route('responsavel.index')->with('success', 'Responsavel cadastrado com sucesso!!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $responsavel = Responsavel::find($id);
        return view('responsavel.edit', compact('responsavel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $responsavel = Responsavel::find($id);
        $responsavel->user->pessoa->nome = $request->nome;
        $responsavel->user->pessoa->data_nascimento = $request->dataNascimento;
        $responsavel->user->pessoa->sexo = $request->sexo;
        $responsavel->user->pessoa->cpf = $request->cpf;
        $responsavel->user->pessoa->rg = $request->rg;
        $responsavel->user->pessoa->telefone1 = $request->telefone1;
        $responsavel->user->pessoa->telefone2 = $request->telefone2;
        $responsavel->user->pessoa->cep = $request->cep;
        $responsavel->user->pessoa->rua = $request->rua;
        $responsavel->user->pessoa->numero = $request->numero;
        $responsavel->user->pessoa->complemento = $request->complemento;
        $responsavel->user->pessoa->bairro = $request->bairro;
        $responsavel->user->pessoa->cidade = $request->cidade;
        $responsavel->user->pessoa->uf = $request->uf;

        $responsavel->user->email = $request->email;
        $responsavel->user->save();

        $responsavel->parentesco_aluno = $request->parentesco_aluno;
        $responsavel->save();

        $index = $responsavel->user->pessoa->save();

        if(!$index){
            return redirect()->route('responsavel.index')->with('error', 'erro ao alterar cadastrar novo responsavel');
        }
        return redirect()->route('responsavel.index')->with('success', 'Responsavel alterado com sucesso!!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
