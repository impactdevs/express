<?php $page="freelancer-payout";?>
@extends('layout.mainlayout')
@section('content')
	<!-- Page Content -->
    <div class="content content-page">
        <div class="container">
            <div class="row">
                @include('layout.partials.nav-freelancer')
                <div class="col-xl-9 col-lg-8">
                    <div class="dashboard-sec payout-section">
                        <div class="page-title portfolio-title">
                            <h3 class="mb-0">Payout</h3>
                            <a class="btn btn-primary title-btn" data-bs-toggle="modal" href="#payout_modal"><i class="feather-settings"></i> Payout Setting</a>
                        </div>
                        <div class="widget-section">
                            <div class="row row-gap">
                                <div class="col-md-6 col-xl-4 d-flex">
                                    <div class="dash-widget flex-fill">
                                        <div class="dash-info">
                                            <div class="d-flex">
                                                <div class="dashboard-icon">
                                                    <img src="{{URL::asset('assets/img/icon/wallet-icon.svg')}}" alt="Img">
                                                </div>
                                                <div class="dash-widget-info"><span>Previous Payout</span><h5>$5,231.00</h5></div>
                                            </div>
                                            <div class="badge badge-paid"><span>Paid</span></div>
                                        </div>
                                        <div class="dash-widget-more d-flex align-items-center justify-content-between">
                                            <div class="dash-widget-date"><span>17 Aug 2023</span></div>
                                            <a href="{{url('freelancer-completed-projects')}}" class="d-flex">View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 d-flex">
                                    <div class="dash-widget flex-fill">
                                        <div class="dash-info">
                                            <div class="d-flex">
                                                <div class="dashboard-icon">
                                                    <img src="{{URL::asset('assets/img/icon/wallet-icon.svg')}}" alt="Img">
                                                </div>
                                                <div class="dash-widget-info"><span>Balance</span><h5>$3,270.00</h5></div>
                                            </div>
                                            <div class="badge badge-pending"><span>Pending</span></div>
                                        </div>
                                        <div class="dash-widget-more d-flex align-items-center justify-content-between">
                                            <div class="dash-widget-date"><a href="javascript:void(0);"> Payout Request</a></div>
                                            <a href="{{url('freelancer-completed-projects')}}" class="d-flex">View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 d-flex">
                                    <div class="dash-widget flex-fill d-flex align-items-center">
                                        <div class="dash-info mb-0">
                                            <div class="d-flex">
                                                <div class="dashboard-icon">
                                                    <img src="{{URL::asset('assets/img/icon/wallet-icon.svg')}}" alt="Img">
                                                </div>
                                                <div class="dash-widget-info"><span>Total Projects</span><h5>107</h5></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                        <!-- Table -->
                        <div class="table-top-section">
                            <div class="table-header">
                                <h5 class="mb-0">Payout History</h5>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                   <tr>
                                        <th>Payout Date</th>
                                        <th>Payment Type</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Payout Processed</th>
                                   </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>29 Sep 2023, 11:26 PM</td>
                                        <td>PayPal</td>
                                        <td>$80.00</td>
                                        <td><div class="badge badge-pending"><span>Pending</span></div></td>
                                        <td>29 Sep 2023, 12:26 PM</td>
                                    </tr>
                                    <tr>
                                        <td>17 Sep 2023, 09:14 AM</td>
                                        <td>Stripe</td>
                                        <td>$20.50</td>
                                        <td><div class="badge badge-paid"><span>Paid</span></div></td>
                                        <td>17 Sep 2023, 010:14 AM</td>
                                    </tr>
                                    <tr>
                                        <td>13 Sep 2023, 11:15 AM</td>
                                        <td>Bank Transfer</td>
                                        <td>$35.70</td>
                                        <td><div class="badge badge-paid"><span>Paid</span></div></td>
                                        <td>13 Sep 2023, 12:15 AM</td>
                                    </tr>
                                    <tr>
                                        <td>07 Sep 2023, 05:37 PM</td>
                                        <td>PayPal</td>
                                        <td>$62.80</td>
                                        <td><div class="badge badge-paid"><span>Paid</span></div></td>
                                        <td>07 Sep 2023, 07:37 PM</td>
                                    </tr>
                                    <tr>
                                        <td>02 Sep 2023, 07:42 PM</td>
                                        <td>Stripe</td>
                                        <td>$73.30</td>
                                        <td><div class="badge badge-paid"><span>Paid</span></div></td>
                                        <td>02 Sep 2023, 08:42 PM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /Table -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
    @component('components.modal-popup')

    @endcomponent


@endsection
