<?php

declare(strict_types=1);

namespace App\Http\Requests\Freelancers;
use App\Models\Freelancer;
use Illuminate\Foundation\Http\FormRequest;

final class PersonalInfoStoreRequest extends FormRequest
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
            'user' => $this->user()->id,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return array_merge(Freelancer::createRules,[
            'profile_picture' => ['nullable', 'image', 'mimes:jpg,bmp,png,jpeg,svg,webp', 'extensions:jpg,bmp,png,jpeg,svg,webp', 'max:2048'],
        ]);
    }
}
