<?php use App\Enums\OnboardStep;

$page = "onboard-screen"; ?>

@extends('layout.mainlayout')
@section('content')
    @php
        $jobTypes = App\Enums\JobTypes::cases();
        $degrees = App\Enums\Degrees::cases();
        $languageLevels = App\Enums\LanguageLevels::cases();
        $skillLevels = App\Enums\SkillLevels::cases();
        $certificationTypes = App\Enums\CertificationTypes::cases();
        $socialMedia = App\Enums\SocialMediaPlatforms::cases();
        $duplicateCount = 20;
        $user = Auth::user();
        if (isset($step)){
          $countries = $step===OnboardStep::OTHER_INFO->value? App\Models\Country::all(['id', 'name', 'code']) : [];
        }
    @endphp
        <!-- Page Wrapper -->
    <div class="page-wrapper board-screen">
        <div class="content container-fluid">
            <div class="acc-content">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="multistep-form">
                            <!-- Freelancer Multistep -->
                            <div class="multistep-progress" id="freelance_step">
                                <div class="container">
                                    <div class="first-progress">
                                        <div class="row align-items-center">
                                            <div class="col-md-3">
                                                <div class="board-logo">
                                                    <a href="{{url('index')}}"><img
                                                            src="{{URL::asset('/assets/img/logo.svg')}}" alt="Img"
                                                            class="img-fluid"/></a>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <ul id="progressbar" class="progressbar">
                                                    <li @if($step===OnboardStep::PERSONAL_INFO->value) class="progress-active" @endif>
                                                        <div class="multi-step"><img
                                                                src="{{URL::asset('/assets/img/icon/wizard-icon-02.svg')}}"
                                                                alt="Img"></div>
                                                        <div class="steps-count">
                                                            <span>Step 2/5</span>
                                                            <h5>Personal info</h5>
                                                        </div>
                                                    </li>
                                                    <li @if($step===OnboardStep::SKILLS->value) class="progress-active" @endif>
                                                        <div class="multi-step"><img
                                                                src="{{URL::asset('/assets/img/icon/wizard-icon-03.svg')}}"
                                                                alt="Img"></div>
                                                        <div class="steps-count">
                                                            <span>Step 3/5</span>
                                                            <h5>Skills & Experience</h5>
                                                        </div>
                                                    </li>
                                                    <li @if($step===OnboardStep::OTHER_INFO->value) class="progress-active" @endif>
                                                        <div class="multi-step"><img
                                                                src="{{URL::asset('/assets/img/icon/wizard-icon-04.svg')}}"
                                                                alt="Img"></div>
                                                        <div class="steps-count">
                                                            <span>Step 4/5</span>
                                                            <h5>Other Information</h5>
                                                        </div>
                                                    </li>
                                                    <li @if($step===OnboardStep::SEND_EMAIL->value) class="progress-active" @endif>
                                                        <div class="multi-step"><img
                                                                src="{{URL::asset('/assets/img/icon/wizard-icon-05.svg')}}"
                                                                alt="Img"></div>
                                                        <div class="steps-count">
                                                            <span>Step 5/5</span>
                                                            <h5>Email Verification</h5>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Freelancer Multistep -->

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Personal Info -->
                            @if($step===OnboardStep::PERSONAL_INFO->value)
                                <div class="on-board field-card select-account select-btn"
                                     style="display: block">
                                    <div class="text-center onboard-head">
                                        <h2>Personal Info</h2>
                                        <p>Tell a bit about yourself. This information will appear on your public
                                            profile,
                                            so that potential buyers can get to know you better.</p>
                                    </div>
                                    <form action="{{url('onboard')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="step" value="{{$step}}"/>
                                        <div class="field-item personal-info space-info">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="pro-form-img">
                                                        <div class="profile-pic">
                                                            Profile Photo
                                                        </div>
                                                        <div class="upload-files">
                                                            <label class="file-upload image-upbtn ">
                                                                <i class="feather-upload me-2"></i>Upload Photo <input
                                                                    type="file" name="profile_picture"
                                                                    value="{{old('profile_picture')}}"
                                                                    onchange="document.getElementById('upload-message').innerHTML = 'Photo uploaded successfully.';">
                                                            </label>
                                                            <span id="upload-message" class="text-success"></span>
                                                            <span>For better preview recommended size is 450px x 450px. Max size 5mb.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Full Name</label>
                                                        <input type="text" class="form-control"
                                                               value="{{ $user->name }}" disabled readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Phone Number</label><span
                                                            class="label-star"> *</span>
                                                        <input type="tel" name="phone" class="form-control"
                                                               value="{{old('phone')}}" placeholder="e.g +256777777777"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Email Address</label>
                                                        <input type="text" class="form-control"
                                                               value="{{$user->email}}" disabled readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="input-block">
                                                        <label class="form-label">Date of Birth</label><span
                                                            class="label-star"> *</span>
                                                        <div class="cal-icon">
                                                            <input type="text" name="date_of_birth"
                                                                   class="form-control datetimepicker"
                                                                   value="{{old('date_of_birth')}}" placeholder="Choose"
                                                                   required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="input-block">
                                                        <label class="form-label">Your Job Title</label><span
                                                            class="label-star"> *</span>
                                                        <input type="text" name="job_title" value="{{old('job_title')}}"
                                                               class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="input-block">
                                                        <label class="form-label">Type of Job</label><span
                                                            class="label-star"> *</span>
                                                        <select class="form-control select" name="job_type" required>
                                                            <option value="" selected disabled hidden>Choose</option>
                                                            @foreach($jobTypes as $jobType)
                                                                <option
                                                                    value="{{$jobType->name}}"
                                                                    @if($jobType->name === old('job_type')) selected @endif>{{$jobType->value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-block min-characters">
                                                        <label class="form-label">Describe Yourself</label><span
                                                            class="label-star"> *</span>
                                                        <textarea name="description" class="form-control" rows="5"
                                                                  required>{{old('description')}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <input class="btn btn-primary" type="submit" value="Next">
                                        </div>
                                    </form>
                                </div>
                            @endif
                            <!-- /Personal Info -->

                            <!-- Skills & Experience -->
                            @if($step===OnboardStep::SKILLS->value)
                                @php
                                    $languages = App\Models\Language::all(['id', 'name']);
                                @endphp
                                <div class="on-board field-card select-account select-btn"
                                     style="display: block">
                                    <div class="text-center onboard-head">
                                        <h2>Skills & Experience</h2>
                                        <p>This is your time to shine. Let potential buyers know what you do best and
                                            how
                                            you gained your skills, certifications and experience</p>
                                    </div>
                                    <form action="{{url('onboard')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="step" value="{{$step}}"/>
                                        <div class="field-item personal-info space-info">
                                            <div class="col-md-12">
                                                <h4>Skill <span class="label-star"> *</span></h4>
                                            </div>
                                            <div>
                                                @for($index=0; $index<$duplicateCount; $index++)
                                                    <div class="row multiple" @if($index>0) hidden @endif>
                                                        <div class="col-md-6">
                                                            <div class="input-block">
                                                                <label class="form-label">Skills</label>
                                                                <input type="text" name="skills[skill][]"
                                                                       class="form-control"
                                                                       @if($index===0) required @endif/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-block">
                                                                <label class="focus-label">Level</label>
                                                                <select name="skills[level][]"
                                                                        class="form-control select-level select"
                                                                        @if($index===0) required @endif>
                                                                    <option value="" selected disabled hidden>Choose
                                                                        Level
                                                                    </option>
                                                                    @foreach($skillLevels as $skillLevel)
                                                                        <option
                                                                            value="{{$skillLevel->name}}">{{$skillLevel->value}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <div class="new-addd">
                                                                    @if($index===0)
                                                                        <a class="add-new" id="skill_add"><i
                                                                                class="fas fa-plus"></i>
                                                                            Add New</a>
                                                                    @else
                                                                        <a class="hide_skill_row remove_row"> Remove</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                            <div>
                                                <div class="col-md-12">
                                                    <h4>Education<span class="label-star"> *</span></h4>
                                                </div>
                                                @for($index=0; $index<$duplicateCount; $index++)
                                                    <div class="row multiple" @if($index>0) hidden @endif>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="input-block">
                                                                <label class="focus-label">Degree Name</label>
                                                                <input name="education[degree][]"
                                                                       class="form-control"
                                                                       @if($index===0) required @endif />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="input-block">
                                                                <label class="focus-label">University Name</label>
                                                                <input type="text" name="education[university_name][]"
                                                                       class="form-control"
                                                                       @if($index===0) required @endif>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="input-block">
                                                                <label class="focus-label">Start Date</label>
                                                                <div class="cal-icon">
                                                                    <input type="text" name="education[start_date][]"
                                                                           class="form-control datetimepicker"
                                                                           placeholder="Choose"
                                                                           @if($index===0) required @endif>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="input-block">
                                                                <label class="focus-label">End Date</label>
                                                                <div class="cal-icon">
                                                                    <input type="text" name="education[end_date][]"
                                                                           class="form-control datetimepicker"
                                                                           placeholder="Choose"
                                                                           @if($index===0) required @endif>
                                                                </div>
                                                                <div class="new-addd">
                                                                    @if($index===0)
                                                                        <a class="add-new" id="edu_add"><i
                                                                                class="fas fa-plus"></i>
                                                                            Add New</a>
                                                                    @else
                                                                        <a class="hide_edu_row remove_row"> Remove</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                            <div>
                                                <div class="col-md-12">
                                                    <h5>Certification</h5>
                                                </div>
                                                @for($index=0; $index<$duplicateCount; $index++)
                                                    <div class="row multiple" @if($index>0) hidden @endif>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="input-block">
                                                                <label class="focus-label">Certification or
                                                                    Award</label>
                                                                <select name="certification[certification_type][]"
                                                                        class="form-control select-level select-edu select"
                                                                        @if($index===0) required @endif>
                                                                    <option value="" selected disabled hidden>Select
                                                                    </option>
                                                                    @foreach($certificationTypes as $certificationType)
                                                                        <option
                                                                            value="{{$certificationType->name}}">{{$certificationType->value}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="input-block">
                                                                <label class="focus-label">Name</label>
                                                                <input type="text" name="certification[name][]"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="input-block">
                                                                <label class="focus-label">Certified from</label>
                                                                <input type="text"
                                                                       name="certification[certified_from][]"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="input-block">
                                                                <label class="focus-label">Certified On</label>
                                                                <div class="cal-icon">
                                                                    <input type="text"
                                                                           name="certification[certified_on][]"
                                                                           class="form-control datetimepicker"
                                                                           placeholder="Choose">
                                                                </div>
                                                                <div class="new-addd">
                                                                    @if($index===0)
                                                                        <a class="add-new" id="certi_add"><i
                                                                                class="fas fa-plus"></i>
                                                                            Add New</a>
                                                                    @else
                                                                        <a class="hide_certi_row remove_row"> Remove</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                            <div>
                                                <div class="col-md-12">
                                                    <h4>Experience</h4>
                                                </div>
                                                @for($index=0; $index<$duplicateCount; $index++)
                                                    <div class="row multiple" @if($index>0) hidden @endif>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="input-block">
                                                                <label class="focus-label">Company Name</label>
                                                                <input type="text" name="experience[organisation][]"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="input-block">
                                                                <label class="focus-label">Position</label>
                                                                <input type="text" name="experience[position][]"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="input-block">
                                                                <label class="focus-label">Start Date</label>
                                                                <div class="cal-icon">
                                                                    <input type="text" name="experience[start_date][]"
                                                                           class="form-control datetimepicker"
                                                                           placeholder="Choose">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="input-block">
                                                                <label class="focus-label">End Date</label>
                                                                <div class="cal-icon">
                                                                    <input type="text" name="experience[end_date][]"
                                                                           class="form-control datetimepicker"
                                                                           placeholder="Choose">
                                                                </div>
                                                                <div class="new-addd">
                                                                    @if($index===0)
                                                                        <a class="add-new" id="exp_add"><i
                                                                                class="fas fa-plus"></i>
                                                                            Add New</a>
                                                                    @else
                                                                        <a class="hide_exp_row remove_row"> Remove</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                            <div>
                                                <div class="col-md-12">
                                                    <h4>Language<span class="label-star"> *</span></h4>
                                                </div>
                                                @for($index=0; $index<$duplicateCount; $index++)
                                                    <div class="row multiple" @if($index>0) hidden @endif>
                                                        <div class="col-md-6">
                                                            <div class="input-block">
                                                                <label class="form-label">Language</label>

                                                                <select class="form-control select-level select"
                                                                        name="language[language_id][]"
                                                                        @if($index===0) required @endif>
                                                                    <option value="" selected disabled hidden>Choose
                                                                        Language
                                                                    </option>
                                                                    @foreach($languages as $language)
                                                                        <option
                                                                            value="{{$language->id}}">{{$language->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-block">
                                                                <label class="focus-label">Level</label>
                                                                <select class="form-control select-level select"
                                                                        name="language[level][]"
                                                                        @if($index===0) required @endif>
                                                                    <option value="" selected disabled hidden>Choose
                                                                        Level
                                                                    </option>
                                                                    @foreach($languageLevels as $language)
                                                                        <option
                                                                            value="{{$language->name}}">{{$language->value}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <div class="new-addd">
                                                                    @if($index===0)
                                                                        <a class="add-new" id="lang_add"><i
                                                                                class="fas fa-plus"></i>
                                                                            Add New</a>
                                                                    @else
                                                                        <a class="hide_lang_row remove_row"> Remove</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="language_add_row"></div>
                                                    </div>
                                                @endfor
                                            </div>
                                            <div class="text-center">
                                                <input class="btn btn-primary" type="submit"
                                                       value="Next"/>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endif
                            <!-- /Skills & Experience -->

                            <!-- Other Info -->
                            @if($step===OnboardStep::OTHER_INFO->value)
                                <div class="on-board field-card select-account select-btn"
                                     style="display: block">
                                    <div class="text-center onboard-head">
                                        <h2>Other info</h2>
                                        <p>Don’t worry, this can be changed later.</p>
                                    </div>
                                    <form action="{{url('onboard')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="step" value="{{$step}}">
                                        <div class="field-item personal-info">
                                            <div class="media-set">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4>Social Media<span class="label-star"> *<span class="fs-6">Atleast one</span></span>
                                                        </h4>
                                                    </div>
                                                    @foreach($socialMedia as $socialMedium)
                                                        <div class="col-md-4">
                                                            <div class="input-block">
                                                                <input type="hidden" name="social_media[platform][]"
                                                                       value="{{$socialMedium->name}}">
                                                                <label class="form-label">{{$socialMedium->value}} <i
                                                                        class="fa-brands fa-{{$socialMedium->value}}"></i></label>
                                                                <input type="text" name="social_media[handle][]"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div>
                                                <div class="media-set">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h4>Location<span class="label-star"> *</span></h4>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="input-block">
                                                                <label class="form-label">Country</label>

                                                                <select class="form-control select-level select"
                                                                        name="country_id" required>
                                                                    <option value="" selected disabled hidden>Choose
                                                                    </option>
                                                                    @foreach($countries as $country)
                                                                        <option
                                                                            value="{{$country->id}}">{{$country->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="input-block">
                                                                <label class="form-label">City</label>
                                                                <input type="text" class="form-control" name="city"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="input-block">
                                                                <label class="form-label">State / Province</label>
                                                                <input type="text" class="form-control" name="state"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="input-block">
                                                                <label class="form-label">ZIP / Post Code</label>
                                                                <input type="text" class="form-control" name="zip_code"
                                                                       required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <input class="btn btn-primary" type="submit"
                                                   value="Next">
                                        </div>
                                    </form>

                                </div>
                            @endif
                            <!-- /Other Info -->

                            <!-- Completeing Register -->
                            @if($step===OnboardStep::SEND_EMAIL->value)
                                <div class="on-board field-card" style="display: block">
                                    <div class="account-onborad complte-board back-home pb-0">
                                        <img src="{{URL::asset('/assets/img/icon/mail.png')}}" class="img-fluid"
                                             alt="icon">
                                        <h2>Email Verification</h2>
                                        <h3>We have sent a verification link to {{$user->email}} </h3>
                                        <p>Click on the link to complete the verification Process</p>
                                        <p>You might need to check your Spam folder</p>
                                        <a href="{{url('onboard-screen')}}" class="link-danger"><i
                                                class="feather-refresh-cw me-2 "></i> Resend Email</a>
                                    </div>
                                    <div class="account-onborad complte-board back-home">
                                        <img src="{{URL::asset('/assets/img/select-03.png')}}" class="img-fluid"
                                             alt="icon">
                                        <h2>Hi, {{$user->name}}</h2>
                                        <p>Your onboarding process has been successfully completed. Please check your
                                            registered email for other information.</p>
                                        <a href="{{url('onboard-screen')}}" class="btn btn-primary"> Back to Home</a>
                                    </div>
                                </div>
                            @endif
                            <!-- Completeing Register -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
