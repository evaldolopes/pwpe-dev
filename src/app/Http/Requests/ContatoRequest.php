<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'name'    => ['required', 'string', 'max:120'],
            'email'   => ['required', 'email:rfc,dns', 'max:160'],
            'phone'   => ['nullable', 'string', 'max:30'],
            'subject' => ['nullable', 'string', 'max:160'],
            'message' => ['required', 'string', 'max:5000'],

            // Honeypot anti-spam: campo invisível que deve sempre vir vazio.
            'website' => ['nullable', 'size:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'    => 'Informe seu nome.',
            'email.required'   => 'Informe um e-mail válido.',
            'email.email'      => 'O e-mail informado não parece válido.',
            'message.required' => 'Conte para a gente como podemos te ajudar.',
        ];
    }
}
