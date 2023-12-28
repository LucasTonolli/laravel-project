<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'    => 'required|ascii',
            'email'   => 'required|email',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Digita o seu nome caralho',
            'name.ascii' => 'Digita o seu nome sem número imbecil',
            'email.required' => 'Digita o seu email porra!',
            'email.email' => 'Digita certo isso aí!',
            'message.required' => 'Digita a mensagem imundícia',

        ];
    }
}
