<?php $page = 'reset-password'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="login-wrapper">
        <div class="content w-100">
            <div class="container">
                <!-- Login Content -->
                <div class="account-content">
                    <div class="align-items-center justify-content-center">
                        <div class="login-right">
                            <div class="login-header text-center">
                                <h2>Set New Password</h2>
                                <span>Your new password must be different passwords.</span>
                            </div>
                            <form action="dashboard">
                                <div class="input-block ">
                                    <label class="focus-label">New Password <span class="label-star"> *</span></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control floating pass-input">
                                        <div class="password-icon ">
                                            <span class="fas toggle-password fa-eye-slash"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-block">
                                    <label class="focus-label">Confirm New Password <span class="label-star">
                                            *</span></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control floating pass-inputs">
                                        <div class="password-icons">
                                            <span class="fas toggle-passwords fa-eye-slash"></span>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="btn btn-primary btn-block btn-lg login-btn d-flex align-items-center justify-content-center"
                                    type="submit">Save Password<i class="feather-arrow-right ms-2"></i></button>
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
