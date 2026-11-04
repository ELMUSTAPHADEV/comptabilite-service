<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class JournalRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // l'accès est déjà protégé par auth:sanctum
    }

    // Normalise le code AVANT validation : "vte" devient "VTE"
    protected function prepareForValidation(): void
    {
        $this->merge(['code' => strtoupper((string) $this->code)]);
    }

    public function rules(): array
    {
        return [
            'code' => [
                'required', 'string', 'max:5', 'regex:/^[A-Z0-9]+$/',
                // unique, sauf pour le journal en cours de modification
                Rule::unique('journaux', 'code')->ignore($this->route('journal')),
            ],
            'libelle' => ['required', 'string', 'max:255'],
        ];
    }
}
