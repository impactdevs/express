<?php $page = 'activities'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content report-box container-fluid">
            @component('admin/components.breadcrumb')
                @slot('li_1')
                    Freelancer Profile
                @endslot
                @slot('li_2')
                    Home
                @endslot
                @slot('li_3')
                    Freelancer Profile
                @endslot
            @endcomponent
            @component('admin/components.user-profile')
            @endcomponent


            <div class="row">
                <div class="col-sm-12">
                    <div class="card profile-home">
                        <div class="subscribe-employe users-list transaction-list">
                            <ul>
                                <li><a href="{{ url('admin/user-profile') }}"><img class="me-2"
                                            src="{{ URL::asset('/assets_admin/img/icon/icon-09.svg') }}"
                                            alt="">Personal </a></li>
                                <li><a href="{{ url('admin/profile-transactions') }}"><img class="me-2"
                                            src="{{ URL::asset('/assets_admin/img/icon/icon-10.svg') }}"
                                            alt="">Transactions </a></li>
                                <li class="active"><a href="{{ url('admin/activities') }}"><img class="me-2"
                                            src="{{ URL::asset('/assets_admin/img/icon/icon-14.svg') }}"
                                            alt="">Activities</a></li>
                            </ul>
                            <div class="profile-icon-group">
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="reset-icon me-1">
                                        <img src="{{ URL::asset('/assets_admin/img/icon/icon-03.svg') }}" alt="">
                                    </a>
                                    <a class="suspend-icon" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets_admin/img/icon/icon-04.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Active Profile Header -->
                        <div class="page-header profile-information">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h3 class="page-title">Login Activities </h3>
                                    <p> The activities of login for the user.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Active Profile Header -->

                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-center table-hover mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Event Info</th>
                                                <th>Detection IP</th>
                                                <th>Detection Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="name-user"><a href="javascript:void(0);">User Login</a></td>
                                                <td>Login to “System/Administrator”</td>
                                                <td>116.165.159.125</td>
                                                <td>Apr 22, 2022 05:24 AM</td>
                                            </tr>
                                            <tr>
                                                <td class="name-user"><a href="javascript:void(0);">Task Updation</a></td>
                                                <td>Change task “Inprrogress” to “Completed”</td>
                                                <td>104.165.159.125</td>
                                                <td>May 26, 2022 05:14 AM</td>
                                            </tr>
                                            <tr>
                                                <td class="name-user"><a href="javascript:void(0);">User Logoff</a></td>
                                                <td>Logoff “System/Administrator”</td>
                                                <td>123.165.159.125</td>
                                                <td>Jun 12, 2022 03:54 AM</td>
                                            </tr>
                                            <tr>
                                                <td class="name-user"><a href="javascript:void(0);">Task Updation</a></td>
                                                <td>Change task “Inprrogress” to “Completed”</td>
                                                <td>104.165.159.125</td>
                                                <td>Dec 16, 2022 02:24 AM</td>
                                            </tr>
                                            <tr>
                                                <td class="name-user"><a href="javascript:void(0);">User Logoff</a></td>
                                                <td>Logoff “System/Administrator”</td>
                                                <td>123.165.159.125</td>
                                                <td>Feb 10, 2022 04:44 AM</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
    </div>
    <!-- /Main Wrapper -->
    @component('admin/components.modal-popup')
    @endcomponent
@endsection
