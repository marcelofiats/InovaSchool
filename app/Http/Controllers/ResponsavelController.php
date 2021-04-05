<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pessoa;
use App\Models\Responsavel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PessoaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $pessoa->cep = $request->cep;
        $pessoa->rua = $request->rua;
        $pessoa->numero = $request->numero;
        $pessoa->complemento = $request->complemento;
        $pessoa->bairro = $request->bairro;
        $pessoa->cidade = $request->cidade;
        $pessoa->uf = $request->uf;
        $index = $pessoa->save();

        if($index)
        {
            $index = null;
            $user = new User();
            $user->email = $request->email;
            $user->password = Hash::make($request->cpf);
            $user->save();
            $pessoa->user()->associate($user);
        }
        $index = $pessoa->save();
        if(!$index){
            return redirect()->back()->with('error', 'erro ao cadastrar novo responsavel');
        }
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
        //
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
