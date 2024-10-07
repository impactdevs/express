<?php

declare(strict_types=1);

namespace App\Http\Requests\Freelancers;

final class SkillsStoreRequest extends FreelancerValidationAbstractRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            "freelancer" => ["required"],
            "skills.*.skill" => ['required'],
            "skills.*.level" => ['required'],

            "language.*.language_id" => ['required'],
            "language.*.level" => ['required'],

            "education.*.degree" => ['required'],
            "education.*.university_name" => ['required'],
            "education.*.start_date" => ['required', 'date_format:Y-m-d'],
            "education.*.end_date" => ['required', 'date_format:Y-m-d'],

            "experience.*.organisation" => ['required_with:experience.*.position'],
            "experience.*.position" => ['required_with:experience.*.start_date'],
            "experience.*.start_date" => ['required_with:experience.*.end_date', 'date_format:Y-m-d'],
            "experience.*.end_date" => ['required_with:experience.*.start_date', 'date_format:Y-m-d'],


            "certification.*.certification_type" => ['required_with:certification.*.name'],
            "certification.*.name" => ['required_with:certification.*.certified_from'],
            "certification.*.certified_from" => ['required_with:certification.*.certified_on'],
            "certification.*.certified_on" => ['required_with:certification.*.certified_from', 'date_format:Y-m-d'],
        ];
    }

    public function messages(): array
    {
        return [
            'freelancer.required' => 'User is not a freelancer.',
            'language.*.language_id.required' => 'Language is required.',
        ];
    }

}
