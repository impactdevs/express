<?php

declare(strict_types=1);

namespace App\Http\Requests\Countries;

use Illuminate\Foundation\Http\FormRequest;

final class CompanyStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //$this->user()->can('delete customers');
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [];
    }
}
