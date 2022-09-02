<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserRequest extends FormRequest
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
        $id = $this->segment(2);
        return [
            'nome' => 'required|min:3|max:100|',
            'sobrenome' => 'required|min:3|max:100',
            'email' => 'required|min:3|max:10000',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório.',
            'nome.min' => "Ops! Em 'Nome' é preciso informar pelo menos 3 caracteres.",
            'sobrenome.required' => 'Sobrenome é obrigatório.',
            'sobrenome.min' => "Ops! Em 'Sobrenome' é preciso informar pelo menos 3 caracteres.",
            'email.required' => "O e-mail é obrigatório.",
            'email.min' => "Ops! Em 'E-mail' é preciso informar pelo menos 3 caracteres.",
        ];
    }
}
