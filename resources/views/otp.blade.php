<?php $page = 'otp'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="login-wrapper">
        <div class="content w-100">
            <div class="container">
                <!-- Login Content -->
                <div class="account-content">
                    <div class="align-items-center justify-content-center">
                        <div class="login-right text-center">
                            <div class="login-header text-center">
                                <h2>One Time Password</h2>
                                <span>Verification code sent to +91 *******455</span>
                                <div class="text-center">
                                    <img src="{{ URL::asset('/assets/img/otp.png') }}" class="mt-3" alt="img">
                                </div>
                            </div>
                            <form action="dashboard">
                                <div class="onboarding-content passcode-wrap">
                                    <div class="d-flex digit-group">
                                        <input type="text" id="digit-1" name="digit-1" data-next="digit-2">
                                        <input type="text" id="digit-2" name="digit-2" data-next="digit-3"
                                            data-previous="digit-1">
                                        <input type="text" id="digit-3" name="digit-3" data-next="digit-4"
                                            data-previous="digit-2">
                                        <input type="text" id="digit-4" name="digit-4" data-next="digit-5"
                                            data-previous="digit-3">
                                        <input type="text" id="digit-5" name="digit-4" data-next="digit-6"
                                            data-previous="digit-4">
                                        <input type="text" id="digit-6" name="digit-4" data-next="digit-7"
                                            data-previous="digit-5">
                                    </div>
                                </div>
                                <div class="resend-code">Didn't receive OTP code? <a href="javascript:void(0);"> Resend Code</a></div>
                                <span class="expire-time-count"><i class="feather-clock me-2"></i>0:56</span>
                                <button
                                    class="btn btn-primary w-100 btn-lg login-btn d-flex align-items-center justify-content-center"
                                    type="submit">Verify Password<i class="feather-arrow-right ms-2"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Login Content -->
            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
