<?php $page = 'register'; ?>
@extends('layout.mainlayout')
@section('content')
<div class="login-wrapper">
    <div class="content w-100">
        <!-- Login Content -->
        <div class="account-content">
            <div class="align-items-center justify-content-center">
                <div class="login-right">
                    <div class="login-header text-center">
                        <a href="{{ url('index') }}"><img src="{{ URL::asset('/assets/img/logo.svg') }}" alt="logo"
                                class="img-fluid"></a>
                        <h3>We love to see you joining our community</h3>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                    <nav class="user-tabs mb-4">
                        <ul role="tablist" class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a href="#developer" data-bs-toggle="tab" class="nav-link active">Freelancer</a>
                            </li>
                            <li class="nav-item">
                                <a href="#employer" data-bs-toggle="tab" class="nav-link">Employer</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="tab-content pt-0">
                        <div role="tabpanel" id="developer" class="tab-pane fade active show">
                            <form action="{{route('register')}}" method="post">
                                @csrf

                                <input type="hidden" name="is_employer" value="0">

                                <div class="input-block ">
                                    <label class="focus-label">Full Name<span class="label-star"> *</span></label>
                                    <input required name="full_name" type="text" class="form-control floating">
                                </div>
                                <div class="input-block ">
                                    <label class="focus-label">Email Address<span class="label-star"> *</span></label>
                                    <input type="email" required name="email" class="form-control floating">
                                </div>
                                <div class="input-block ">
                                    <label class="focus-label">Password <span class="label-star"> *</span></label>
                                    <div class="position-relative">
                                        <input type="password" required name="password" class="form-control floating pass-input">
                                        <div class="password-icon ">
                                            <span class="fas toggle-password fa-eye-slash"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-block  mb-0">
                                    <label class="focus-label">Confirm Password <span class="label-star">
                                            *</span></label>
                                    <div class="position-relative">
                                        <input type="password" required name="password_confirmation" class="form-control floating pass-inputs">
                                        <div class="password-icons">
                                            <span class="fas toggle-passwords fa-eye-slash"></span>
                                        </div>
                                    </div>
                                </div><br/>
                                <button
                                    class="btn btn-primary w-100 btn-lg login-btn d-flex align-items-center justify-content-center"
                                    type="submit">Sign In Now<i class="feather-arrow-right ms-2"></i></button>
                                <div class="row">
                                    <div class="col-sm-8 dont-have d-flex  align-items-center">Already have account <a
                                            href="{{url('login')}}" class="ms-2">Sign in?</a></div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" id="employer" class="tab-pane fade">
                            <form action="{{route('register')}}" method="post">
                                @csrf

                                <input type="hidden" name="is_employer" value="1">
                                <div class="input-block ">
                                    <label class="focus-label">Full Name<span class="label-star"> *</span></label>
                                    <input type="text" name="full_name" class="form-control floating" required>
                                    @error('full_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="input-block ">
                                    <label class="focus-label">Email Address<span class="label-star"> *</span></label>
                                    <input type="email" name="email" class="form-control floating" required>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="input-block ">
                                    <label class="focus-label">Password <span class="label-star"> *</span></label>
                                    <div class="position-relative">
                                        <input type="password" name="password" class="form-control floating pass-input" required>
                                        <div class="password-icon ">
                                            <span class="fas toggle-password fa-eye-slash"></span>
                                        </div>
                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="input-block  mb-0">
                                    <label class="focus-label">Confirm Password <span class="label-star">
                                            *</span></label>
                                    <div class="position-relative">
                                        <input type="password" name="password_confirmation" class="form-control floating pass-inputs" required>
                                        <div class="password-icons">
                                            <span class="fas toggle-passwords fa-eye-slash"></span>
                                        </div>
                                    </div>
                                    @error('password_confirm')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div><br/>
                                <button
                                    class="btn btn-primary w-100 btn-lg login-btn d-flex align-items-center justify-content-center"
                                    type="submit">Sign In Now<i class="feather-arrow-right ms-2"></i></button>
                                <div class="row">
                                    <div class="col-sm-8 dont-have d-flex  align-items-center">Already have account <a
                                            href="{{url('login')}}" class="ms-2">Sign in?</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Login Content -->
    </div>
</div>


</div>
<!-- /Main Wrapper -->
@endsection
