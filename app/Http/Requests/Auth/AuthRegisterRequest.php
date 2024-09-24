<?php

declare(strict_types=1);

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

final class AuthRegisterRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'min:5'],
            'email'    => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed'],
            'is_company' => ['nullable']
        ];
    }
}
