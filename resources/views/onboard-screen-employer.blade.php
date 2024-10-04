<?php use App\Enums\OnboardStep;

$page = "onboard-screen-employer"; ?>
@extends('layout.mainlayout')
@section('content')
    @php
        $socialMedia = App\Enums\SocialMediaPlatforms::cases();
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
                                                            class="img-fluid"></a>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <ul id="progressbar" class="progressbar">
                                                    <li @if($step===OnboardStep::EMPLOYER_INFO->value) class="progress-active" @endif>
                                                        <div class="multi-step"><img
                                                                src="{{URL::asset('/assets/img/icon/wizard-icon-03.svg')}}"
                                                                alt="Img"></div>
                                                        <div class="steps-count">
                                                            <span>Step 2/4</span>
                                                            <h5>Employer Info</h5>
                                                        </div>
                                                    </li>
                                                    <li @if($step===OnboardStep::OTHER_INFO->value) class="progress-active" @endif>
                                                        <div class="multi-step"><img
                                                                src="{{URL::asset('/assets/img/icon/wizard-icon-04.svg')}}"
                                                                alt="Img"></div>
                                                        <div class="steps-count">
                                                            <span>Step 3/4</span>
                                                            <h5>Other Information</h5>
                                                        </div>
                                                    </li>
                                                    <li @if($step===OnboardStep::SEND_EMAIL->value) class="progress-active" @endif>
                                                        <div class="multi-step"><img
                                                                src="{{URL::asset('/assets/img/icon/wizard-icon-05.svg')}}"
                                                                alt="Img"></div>
                                                        <div class="steps-count">
                                                            <span>Step 4/4</span>
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


                            <!-- Employer Info -->
                            @if($step===OnboardStep::EMPLOYER_INFO->value)
                                @php
                                    $industries = App\Models\Industry::all(['id', 'name']);
                                    $teamSizes = App\Models\TeamSize::all(['id', 'size']);
                                @endphp
                                <div class="on-board field-card select-account select-btn" style="display: block">
                                    <div class="text-center onboard-head">
                                        <h2>Employer Info</h2>
                                        <p>Let everyone know who you are and what you deal in.</p>
                                    </div>
                                    <div class="field-item personal-info space-info">
                                        <form action="{{url('onboard-employer')}}" method="post"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="step" value="{{$step}}"/>

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
                                                                    value="{{old('profile_picture')}}" onchange="document.getElementById('upload-message').innerHTML = 'Photo uploaded successfully.';">
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
                                                               value="{{old('phone')}}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Email Address</label>
                                                        <input type="text" class="form-control"
                                                               value="{{$user->email}}" disabled readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4>Details</h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Company Name</label><span
                                                            class="label-star"> *</span>
                                                        <input type="text" class="form-control" name="company_name"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Tagline</label><span
                                                            class="label-star"> *</span>
                                                        <input type="text" class="form-control" name="tagline" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Established On</label><span
                                                            class="label-star"> *</span>
                                                        <div class="cal-icon">
                                                            <input type="text" name="established_on"
                                                                   class="form-control datetimepicker"
                                                                   value="{{old('established_on')}}"
                                                                   placeholder="Choose"
                                                                   required>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="form-label">Company Owner Name</label><span
                                                            class="label-star"> *</span>
                                                        <input type="text" class="form-control"
                                                               name="company_owner_name"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block">
                                                        <label class="focus-label">Industry</label><span
                                                            class="label-star"> *</span>
                                                        <select class="form-control select" name="industry" required>
                                                            <option value="" selected disabled hidden>Select</option>
                                                            @foreach($industries as $teamSize)
                                                                <option
                                                                    value="{{$teamSize->id}}">{{$teamSize->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-block">
                                                        <label class="form-label">Team Size</label><span
                                                            class="label-star"> *</span>
                                                    </div>
                                                    <div class="check-radio">
                                                        <ul>
                                                            @foreach($teamSizes as $index => $teamSize)
                                                                <li>
                                                                    <label class="custom_radio me-4">
                                                                        <input type="radio" name="team_size" value="{{$teamSize->id}}"
                                                                               @if($index===0) checked @endif>
                                                                        <span class="checkmark"></span> {{$teamSize->size}}
                                                                    </label>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-block min-characters">
                                                        <label class="form-label">Describe Your Company</label><span
                                                            class="label-star"> *</span>
                                                        <textarea class="form-control" rows="5" name="description"
                                                                  required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <input class="btn btn-primary" type="submit" value="Next">
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            @endif
                            <!-- Employer Info -->

                            <!-- Other Info -->
                            @if($step===OnboardStep::OTHER_INFO->value)
                                @php
                                    $socialMedia = App\Enums\SocialMediaPlatforms::cases();
                                    $countries = App\Models\Country::all(['id', 'name', 'code']);
                                @endphp
                                <div class="on-board field-card select-account select-btn" style="display: block">
                                    <div class="text-center onboard-head">
                                        <h2>Other info</h2>
                                        <p>Don’t worry, this can be changed later.</p>
                                    </div>
                                    <form action="{{url('onboard-employer')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="step" value="{{$step}}">
                                        <div class="field-item personal-info">
                                            <div class="media-set">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4>Social Media</h4>
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
                                                                        name="country" required>
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
                                                <div class="media-set">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h4>KYC Upload<span class="label-star"> *</span></h4>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-block">
                                                                <label class="form-label">Document Name</label>
                                                                <input type="text" class="form-control" name="kyc_document_name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="input-block">
                                                                <label class="form-label">Document</label>
                                                                <div class="upload-sets">
                                                                    <label class="upload-filesview">
                                                                        Browse File
                                                                        <input type="file" name="kyc_document" onchange="document.getElementById('upload-message').innerHTML = 'Document uploaded successfully.';" required>
                                                                    </label>
                                                                    <p id="upload-message" class="text-success"></p>
                                                                    <h6>Or Drag & Drop here</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media-set border-0">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h4>Working Hours<span class="label-star"> *</span></h4>
                                                            <p>Describe your working days and time. Specify the timezone in which you work</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-block">
                                                                <label class="form-label">Working Time</label>
                                                                <input type="text" class="form-control" name="working_hours" required>
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
                                        <img src="{{URL::asset('/assets/img/icon/mail.png')}}" class="img-fluid" alt="icon">
                                        <h2>Email Verification</h2>
                                        <h3>We have sent a verification link to {{$user->email}} </h3>
                                        <p>Click on the link to complete the verification Process</p>
                                        <p>You might need to check your Spam folder</p>
                                        <a href="{{url('onboard-screen-employer')}}" class="link-danger"><i
                                                class="feather-refresh-cw me-2 "></i> Resend Email</a>
                                    </div>
                                    <div class="account-onborad complte-board back-home">
                                        <img src="{{URL::asset('/assets/img/select-03.png')}}" class="img-fluid" alt="icon">
                                        <h2>Hi, {{$user->name}}</h2>
                                        <p>Your onboarding process has been successfully completed. Please check your
                                            registered email for other information.</p>
                                        <a href="{{url('onboard-screen-employer')}}" class="btn btn-primary"> Back to Home</a>
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
