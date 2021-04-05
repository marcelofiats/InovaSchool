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
        $validate = [
            'nome'=> 'required|min:8',
            'dataNascimento'=>'required',
            'sexo'=>'required',
            'cpf'=>'required',
            'rg'=>'required',
            'telefone1'=>'required',
            'cep'=>'required',
            'rua'=>'required',
            'bairro'=>'required',
            'cidade'=>'required',
        ];
        return $validate;
    }
}
