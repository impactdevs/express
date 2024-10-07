<?php

namespace App\Http\Controllers\Employers;

use App\Enums\OnboardStep;
use App\Models\Employer;
use Illuminate\Routing\Controller;
use App\Http\Requests\Employers\OtherInfoStoreRequest;
use App\Http\Requests\Employers\EmployerInfoStoreRequest;
use App\Models\SocialMedia;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;


class EmployerController extends Controller
{
    public function index(Request $request): RedirectResponse|View
    {
        $step = session('step');
        if ($step !== null){
            Session::forget('step');
            return view('onboard-screen-employer', ['step'=>$step]);
        }
        $user = $request->user();
        if($user->email_verified_at){
            return redirect()->to(route('dashboard'));
        }

        $employer = $request->user()->employer;
        if($employer){
          if($employer->country){
              $step = OnboardStep::SEND_EMAIL->value;
          }else{
              $step = OnboardStep::OTHER_INFO->value;
          }
        }else{
            $step = OnboardStep::EMPLOYER_INFO->value;
        }

        if($step === OnboardStep::SEND_EMAIL->value){
            $user->sendEmailVerificationNotification();
        }

        return view('onboard-screen-employer', ['step'=>$step]);
    }


    public function store_employer_info(EmployerInfoStoreRequest $request)
    {
        $data = $request->validated();
        if($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')?->store('profile_pictures');
            $data['profile_picture_path'] = $path;
            unset($data['profile_picture']);
        }

        return Employer::create($data);
    }

    public function store_other_info(OtherInfoStoreRequest $request): array
    {
        $validated = $request->validated();
        $employer = $validated['employer'];
        unset($validated['employer']);
        $now = Carbon::now();
        $output = [];

        if(array_key_exists('social_media', $validated)){
            $social_media = [];
            foreach ($validated['social_media'] as $i => $iValue) {
                if($validated['social_media'][$i]['handle']){
                    $social_media = array_merge($validated['social_media'][$i], ['employer_id' => $employer->id, 'created_at' => $now, 'updated_at' => $now]);
                }
            }
            if(count($social_media) > 0){
                $output['social_media'] = SocialMedia::insert($social_media);
            }
        }
        unset($validated['social_media']);
        $data = $request->validated();
        if($request->hasFile('kyc_document')) {
            $path = $request->file('kyc_document')?->store('kyc_documents');
            $data['kyc_document_path'] = $path;
            unset($data['kyc_document']);
        }
        $employer->fill($validated);
        $employer->save();
        $output['employer'] = $employer;
        return $output;
    }

    private function _store_employer_info(Request $request): RedirectResponse
    {
        $this->store_employer_info(app(EmployerInfoStoreRequest::class));
        return redirect()->to(route('onboard-screen-employer'))->with(['step'=>OnboardStep::OTHER_INFO->value]);
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
        return redirect()->to(route('onboard-screen-employer'))->with(['step'=>OnboardStep::SEND_EMAIL->value]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        return match ((int)$request->step) {
            OnboardStep::EMPLOYER_INFO->value => $this->_store_employer_info($request),
            default => $this->_store_other_info($request),
        };
    }
}
