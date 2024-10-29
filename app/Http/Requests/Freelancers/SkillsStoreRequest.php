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
            'certification.*.certified_on.date_format' => 'Certified on filed should follow Year-Month-Day format e.g 1999-02-27',
            'experience.*.start_date.date_format' => 'Experience Start date should follow Year-Month-Day format e.g 1999-02-27',
            'experience.*.end_date.date_format' => 'Experience End date should follow Year-Month-Day format e.g 1999-02-27',
            'education.*.start_date.date_format' => 'Education Start date should follow Year-Month-Day format e.g 1999-02-27',
            'education.*.end_date.date_format' => 'Education End date should follow Year-Month-Day format e.g 1999-02-27',

            "certification.*.certification_type.required_with" => 'Please fill in all certificate details or leave blank completely.',
            "certification.*.name.required_with" => 'Please fill in all certificate details or leave blank completely.',
            "certification.*.certified_from.required_with" => 'Please fill in all certificate details or leave blank completely.',
            "certification.*.certified_on.required_with" => 'Please fill in all certificate details or leave blank completely.',
        ];
    }

}
