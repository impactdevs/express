<?php

declare(strict_types=1);

namespace App\Http\Requests\Employers;
use App\Models\Employer;
use Illuminate\Foundation\Http\FormRequest;

final class EmployerInfoStoreRequest extends FormRequest
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
            'user_id' => $this->user()->id,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return array_merge(Employer::createRules,[
            'profile_picture' => ['nullable', 'image', 'mimes:jpg,bmp,png,jpeg,svg,webp', 'extensions:jpg,bmp,png,jpeg,svg,webp', 'max:2048'],
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
            'phone.regex' => 'Phone is invalid. Use country_code e.g (+256) +256123456789',
        ];
    }
}
