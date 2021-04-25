<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'start' => 'required|date|before:today',
            'end' => 'required|date|before:start',
        ];
    }

    public function messages()
    {
        return [
            'title.required' =>'O titulo é obrigatorio',
            'start.required' => 'insira uma data inicio',
            'start.before' => 'Por favor insira datas futuras',
            'end.required' => 'insira a data de termino',
            'end.before'=> 'a data de termino tem que ser maio que a de inicio',
        ];
    }
}
