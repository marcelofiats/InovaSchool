<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'=> 'required|min:8',
            'dataNascimento'=>'required',
            'sexo'=>'required',
            'cpf'=>'required|min: 9|unique:App\Models\Pessoa,cpf',
            'rg'=>'required|min: 7',
            'email'=>'required|email|unique:App\Models\User,email',
            'telefone1'=>'required',
            'cep'=>'required|size: 9',
            'rua'=>'required',
            'bairro'=>'required',
            'cidade'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório.',
            'nome.min' => 'Nome deve conter pelo menos 8 caracteres',
            'dataNascimento.required' => 'O campo data de nascimento é obrigatório.',
            'sexo.required' => 'Selecione um sexo.',
            'cpf.required' => 'O Campo CPF é obrigatório',
            'cpf.min' => 'CPF muito curto',
            'cpf.unique' => 'CPF já esta cadastrado',
            'rg.required' => 'O Campo RG é Obrigatório',
            'email.required' => 'Digite um e-mail',
            'email.email' => 'Digite um e-mail valido',
            'email.unique' => 'O e-mail utilizado já esta em uso',
            'rg.min' => 'RG muito curto',
            'telefone1.required' => 'O campo telefone é obrigatório',
            'cep.required' => 'Digite o cep',
            'cep.size' => 'CEP inválido',
            'rua.required' => 'O campo rua é obrigatório',
            'bairro.required' => 'O campo bairro é obrigatório',
            'cidade.required' => 'O campo cidade é obrigatório',
        ];
    }
}
