<?php

declare(strict_types=1);

namespace App\Http\Requests\Freelancers;

final class OtherInfoStoreRequest extends FreelancerValidationAbstractRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            "freelancer" => ["required"],

            "social_media.*.platform" => ['required_with:social_media.*.handle'],
            "social_media.*.handle" => ['nullable'],

            "country" => ['required', "exists:countries,id"],
            "city" => ['required'],
            "state" => ['required'],
            "zip_code" => ['required'],
        ];
    }

}
