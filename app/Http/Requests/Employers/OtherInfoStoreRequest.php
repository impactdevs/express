<?php

declare(strict_types=1);

namespace App\Http\Requests\Employers;

final class OtherInfoStoreRequest extends EmployerValidationAbstractRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            "employer" => ["required"],

            "social_media.*.platform" => ['required_with:social_media.*.handle'],
            "social_media.*.handle" => ['nullable'],

            "country_id" => ['required', "exists:countries,id"],
            "city" => ['required'],
            "state" => ['required'],
            "zip_code" => ['required'],
            "kyc_document_name" => ['required'],
            "kyc_document" => ['required', 'file', 'mimetypes:application/pdf', 'extensions:pdf', 'max:10240'],
            "working_hours" => ['required'],
        ];
    }

}
