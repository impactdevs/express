<?php

namespace App\Http\Controllers\Freelancers;

use App\Enums\OnboardStep;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class FreelancerController extends Controller
{
    private function store_personal_info(Request $request): RedirectResponse
    {
        return redirect()->to(route('onboard', ['step'=>OnboardStep::SKILLS]));
    }

    private function store_skills(Request $request): RedirectResponse
    {
        return redirect()->to(route('onboard', ['step'=>OnboardStep::OTHER_INFO]));
    }

    private function store_other_info(Request $request): RedirectResponse
    {
        return redirect()->to(route('onboard', ['step'=>OnboardStep::SEND_EMAIL]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        switch ($request->step) {
            case OnboardStep::PERSONAL_INFO:
                return $this->store_personal_info($request);
            case OnboardStep::SKILLS:
                return $this->store_skills($request);
            default:
                return $this->store_other_info($request);
        }
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
