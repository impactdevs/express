<?php

namespace App\Http\Controllers\Freelancers;

use App\Enums\OnboardStep;
use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Freelancer;
use App\Models\Language;
use App\Models\Skill;
use DateTime;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class FreelancerController extends Controller
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            'auth',
        ];
    }

    public function index(Request $request){
        $step = session('step');
        if ($step !== null){
            Session::forget('step');
            return view('onboard-screen', ['step'=>$step]);
        }
        $step = OnboardStep::PERSONAL_INFO->value;
        if ($request->user()->freelancer()->exists()){
            $step = OnboardStep::SKILLS->value;
        }
        return view('onboard-screen', ['step'=>$step]);
    }



    private function store_personal_info(Request $request): RedirectResponse
    {
        $request->merge([
            'user' => $request->user()->id,
        ]);

        $validated = $request->validate(array_merge(Freelancer::validators,[
            'date_of_birth' => ['required', 'date_format:d/m/Y'],
            'profile_picture' => ['nullable', 'image', 'mimes:jpg,bmp,png,jpeg,svg,webp', 'extensions:jpg,bmp,png,jpeg,svg,webp', 'max:2048'],
        ]));

        $validated['date_of_birth'] = DateTime::createFromFormat('d/m/Y', $validated['date_of_birth']);

        if($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')?->store('profile_pictures');
            $validated['profile_picture_path'] = $path;
            unset($validated['profile_picture']);
        }

        Freelancer::create($validated);
        return redirect()->to(route('onboard-screen'))->with(['step'=>OnboardStep::SKILLS->value]);
    }

    private function store_skills(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'skills' => ['required', 'array'],
            'education' => ['required', 'array'],
            'language' => ['required', 'array'],
            'certification' => ['nullable', 'array'],
            'experience' => ['nullable', 'array'],
        ]);
        $outputArray = assoc_from_array($validated);

        $validated1 = Validator::make($outputArray, [
            "skills.*.skill" => ['required'],
            "skills.*.level" => ['required'],

            "language.*.name" => ['required'],
            "language.*.level" => ['required'],

            "education.*.degree" => ['required'],
            "education.*.university_name" => ['required'],
            "education.*.start_date" => ['required', 'date_format:d/m/Y'],
            "education.*.end_date" => ['required', 'date_format:d/m/Y'],

            "experience.*.organisation" => ['required_with:experience.*.position'],
            "experience.*.position" => ['required_with:experience.*.start_date'],
            "experience.*.start_date" => ['required_with:experience.*.end_date', 'date_format:d/m/Y'],
            "experience.*.end_date" => ['required_with:experience.*.start_date', 'date_format:d/m/Y'],


            "certification.*.certification_type" => ['required_with:certification.*.name'],
            "certification.*.name" => ['required_with:certification.*.certified_from'],
            "certification.*.certified_from" => ['required_with:certification.*.certified_on'],
            "certification.*.certified_on" => ['required_with:certification.*.certified_from', 'date_format:d/m/Y'],

        ])->validate();

        dd($validated1);

        $now = Carbon::now();
        $freelancer = $request->user()->freelancer()->id;
        foreach ($validated1 as $key => $iValue) {
            foreach ($iValue as $i => $v) {
                $validated1[$key][$i]['freelancer'] = $freelancer;
                $validated1[$key][$i]['created_at'] = $now;
                $validated1[$key][$i]['updated_at'] = $now;
            }
        }

        Skill::insert($validated1['skills']);
        Language::insert($validated1['language']);
        Education::insert($validated1['education']);

        return redirect()->to(route('onboard-screen'))->with(['step'=>OnboardStep::OTHER_INFO->value]);
    }

    private function store_other_info(Request $request): RedirectResponse
    {
        return redirect()->to(route('onboard-screen'))->with(['step'=>OnboardStep::SEND_EMAIL->value]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        return match ((int)$request->step) {
            OnboardStep::PERSONAL_INFO->value => $this->store_personal_info($request),
            OnboardStep::SKILLS->value => $this->store_skills($request),
            default => $this->store_other_info($request),
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
