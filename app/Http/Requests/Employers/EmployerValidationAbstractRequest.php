<?php

declare(strict_types=1);

namespace App\Http\Requests\Employers;
use Illuminate\Foundation\Http\FormRequest;

abstract class EmployerValidationAbstractRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'employer' => $this->user()->employer,
        ]);
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'employer.required' => 'User is not an Employer.',
        ];
    }
}
