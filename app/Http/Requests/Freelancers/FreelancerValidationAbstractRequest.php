<?php

declare(strict_types=1);

namespace App\Http\Requests\Freelancers;
use Illuminate\Foundation\Http\FormRequest;

abstract class FreelancerValidationAbstractRequest extends FormRequest
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
            'freelancer' => $this->user()->freelancer,
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
            'freelancer.required' => 'User is not a freelancer.',
        ];
    }
}
