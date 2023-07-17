<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceitaForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array {
        return [
            'title' => 'required|max:100|string',
            'description' => 'required|max:300|string',
            'ingredientes' => 'required|max:1000|string',
            'preparo' => 'required|max:1000|string',
        ];
    }

    public function messages(): array {
        return [
            'title.required' => 'Informe o título da receita.',
            'title.max' => 'O título deve ter menos de 100 caracteres.',
            'description.required' => 'Adicione uma descrição á receita.',
            'description.max' => 'A descrição da receita deve ter menos de 300 caracteres.',
            'ingredientes.required' => 'Adicione os ingredientes da receita.',
            'ingredientes.max' => 'Máximo de 1000 caracteres.',
            'preparo.required' => 'Adicione a forma de preparo da receita.',
            'preparo.max' => 'Máximo de de 1000 caracteres'
        ];
    }   
}
