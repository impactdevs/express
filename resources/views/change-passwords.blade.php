<?php $page = 'change-passwords'; ?>
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
                                <h2>Password Change</h2>
                                <span>Change New Password</span>
                            </div>
                            <form action="dashboard">
                                <div class="input-block">
                                    <label class="focus-label">Old Password <span class="label-star"> *</span></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control floating pass-input">
                                        <div class="password-icon ">
                                            <span class="fas toggle-password fa-eye-slash"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-block">
                                    <label class="focus-label">New Password <span class="label-star"> *</span></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control floating pass-inputs">
                                        <div class="password-icon ">
                                            <span class="fas toggle-passwords fa-eye-slash"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-block">
                                    <label class="focus-label">Confirm New Password <span class="label-star">
                                            *</span></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control floating pass-input1">
                                        <div class="password-icon ">
                                            <span class="fas toggle-password1 fa-eye-slash"></span>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="btn btn-primary btn-lg login-btn d-flex align-items-center justify-content-center w-100"
                                    type="submit">Password Change<i class="feather-arrow-right ms-2"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Login Content -->
            </div>
        </div>
    </div>
    <!-- /Page Content -->
    @component('components.modal-popup')
    @endcomponent
@endsection
