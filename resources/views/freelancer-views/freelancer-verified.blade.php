<?php $page="freelancer-verified";?>
@extends('layout.mainlayout')
@section('content')

<!-- Page Content -->
<div class="content content-page">
    <div class="container">
        <div class="row">
            @include('layout.partials.nav-freelancer')
            <div class="col-xl-9 col-lg-8">
                <div class="dashboard-sec payout-section freelancer-statements">
                    <div class="page-title portfolio-title">
                        <h3 class="mb-0">Verification Details</h3>
                    </div>
                    <div class="row row-gap">
                        <div class="col-lg-12">
                            <div class="verified-details">
                                <div class="verified-details-content">
                                    <h5>Passport</h5>
                                    <p class="mb-0">421921******2121</p>
                                </div>
                                <div class="verifi-badge success">
                                    <span><i class="feather-check me-1"></i>Verified</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="verified-rejected">
                                <div class="verified-details ">
                                    <div class="verified-details-content">
                                        <h5>Passport</h5>
                                        <p class="mb-0">421921******2121</p>
                                    </div>
                                    <div class="verifi-badge rejected">
                                        <span><i class="fa-solid fa-circle-xmark me-1"></i>Rejected</span>
                                    </div>
                                </div>
                                <div class="reject-reason">
                                    <h5>Reason</h5>
                                    <p>Sometimes we're unable to verify your ID if the picture you submit isn't clear or is missing information.</p>
                                    <div class="d-flex doc-btn rejected-btn">
                                        <a href="#" class="btn btn-black">Resend Verification</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Content -->


@component('components.modal-popup')

@endcomponent
@endsection
