<?php

namespace App\Http\Controllers\Freelancers;

use App\Enums\OnboardStep;
use Illuminate\Routing\Controller;
use App\Http\Requests\Freelancers\OtherInfoStoreRequest;
use App\Http\Requests\Freelancers\PersonalInfoStoreRequest;
use App\Http\Requests\Freelancers\SkillsStoreRequest;
use App\Models\Certification;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Freelancer;
use App\Models\Language;
use App\Models\Skill;
use App\Models\SocialMedia;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;


class FreelancerController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }

    public function index(Request $request): RedirectResponse|View
    {
        $step = session('step');
        if ($step !== null){
            Session::forget('step');
            return view('onboard-screen', ['step'=>$step]);
        }
        $user = $request->user();
        if($user->email_verified_at){
            return redirect()->to(route('freelancer-dashboard'));
        }

        $freelancer = $request->user()->freelancer;
        if($freelancer){
          if($freelancer->skills()->exists()){
              if($freelancer->country){
                  $step = OnboardStep::SEND_EMAIL->value;
              }else{
                  $step = OnboardStep::OTHER_INFO->value;
              }
          }else{
              $step = OnboardStep::SKILLS->value;
          }
        }else{
            $step = OnboardStep::PERSONAL_INFO->value;
        }

        if($step === OnboardStep::SEND_EMAIL->value){
            $user->sendEmailVerificationNotification();
        }

        return view('onboard-screen', ['step'=>$step]);
    }


    public function store_personal_info(PersonalInfoStoreRequest $request)
    {
        $data = $request->validated();
        if($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')?->store('profile_pictures');
            $data['profile_picture_path'] = $path;
            unset($data['profile_picture']);
        }

        return Freelancer::create($data);
    }

    public function store_skills(SkillsStoreRequest $request): array
    {
        $validated = $request->validated();
        $freelancer = $validated['freelancer'];
        unset($validated['freelancer']);
        $now = Carbon::now();

        foreach ($validated as $key => $iValue) {
            foreach ($iValue as $i => $v) {
                $validated[$key][$i] = array_merge($validated[$key][$i], ['freelancer' => $freelancer->id, 'created_at' => $now, 'updated_at' => $now]);
            }
        }

        $output = [];
        $output['education'] = Education::insert($validated['education']);
        $output['skills'] = Skill::insert($validated['skills']);
        $output['languages'] = Language::insert($validated['language']);
        if(array_key_exists('certification', $validated)){
            $output['certification'] = Certification::insert($validated['certification']);
        }
        if(array_key_exists('experience', $validated)){
            $output['experience'] = Experience::insert($validated['experience']);
        }
        return $output;
    }

    public function store_other_info(OtherInfoStoreRequest $request): array
    {
        $validated = $request->validated();
        $freelancer = $validated['freelancer'];
        unset($validated['freelancer']);
        $now = Carbon::now();
        $output = [];

        if(array_key_exists('social_media', $validated)){
            $social_media = [];
            foreach ($validated['social_media'] as $i => $iValue) {
                if($validated['social_media'][$i]['handle']){
                    $social_media = array_merge($validated['social_media'][$i], ['freelancer' => $freelancer->id, 'created_at' => $now, 'updated_at' => $now]);
                }
            }
            if(count($social_media) > 0){
                $output['social_media'] = SocialMedia::insert($social_media);
            }
        }
        unset($validated['social_media']);
        $freelancer->fill($validated);
        $freelancer->save();
        $output['freelancer'] = $freelancer;
        return $output;
    }

    private function _store_personal_info(Request $request): RedirectResponse
    {
        $this->store_personal_info(app(PersonalInfoStoreRequest::class));
        return redirect()->to(route('onboard-screen'))->with(['step'=>OnboardStep::SKILLS->value]);
    }

    private function _store_skills(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'skills' => ['required', 'array'],
            'education' => ['required', 'array'],
            'language' => ['required', 'array'],
            'certification' => ['nullable', 'array'],
            'experience' => ['nullable', 'array'],
        ]);
        $request->merge(assoc_from_array($validated));

        $this->store_skills(app(SkillsStoreRequest::class));

        return redirect()->to(route('onboard-screen'))->with(['step'=>OnboardStep::OTHER_INFO->value]);
    }

    private function _store_other_info(Request $request): RedirectResponse
    {
        if($request->has('social_media')){
            $request->validate([
               'social_media' => ['nullable', 'array'],
            ]);
            $request->merge(assoc_from_array(['social_media' => $request->get('social_media')]));
        }
        $this->store_other_info(app(OtherInfoStoreRequest::class));
        return redirect()->to(route('onboard-screen'))->with(['step'=>OnboardStep::SEND_EMAIL->value]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        return match ((int)$request->step) {
            OnboardStep::PERSONAL_INFO->value => $this->_store_personal_info($request),
            OnboardStep::SKILLS->value => $this->_store_skills($request),
            default => $this->_store_other_info($request),
        };
    }
}
