<?php $page="completed-projects-view-details";?>
@extends('layout.mainlayout')
@section('content')
	<!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                @include('layout.partials.nav-employer')

                <div class="col-xl-9 col-lg-8">
                    <div class="page-title">
                        <h3>Manage Projects</h3>
                    </div>
                    <nav class="user-tabs mb-4">
                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('completed-projects-view-details')}}">Overview & Discussions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('completed-projects-milestones')}}">Milestones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('completed-projects-tasks')}}">Tasks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('completed-projects-files')}}">Files</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('completed-projects-project-payment')}}">Payments</a>
                            </li>
                        </ul>
                    </nav>

                    <!-- project list -->
                    <div class="my-projects-view">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title-head d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="mb-0">Milestones</h4>
                                </div>

                                <div class="table-responsive table-box manage-projects-table">
                                    <table class="table table-center table-hover datatable no-sort">
                                        <thead class="thead-pink">
                                            <tr>
                                                <th>Name</th>
                                                <th>Budget</th>
                                                <th>Progress</th>
                                                <th>Start date</th>
                                                <th>Due date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Logo Design</td>
                                                <td>$2222</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-md mb-0">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <p class="mb-0 orange-text text-center ms-3">45%</p>
                                                    </div>
                                                </td>
                                                <td>29 Sep 2023</td>
                                                <td>29 Sep 2023</td>
                                                <td><span class="badge badge-pill bg-danger-light">Unpaid</span></td>
                                                <td>
                                                    <div class="action-table-data">
                                                        <a href="#view-milestone" data-bs-toggle="modal" class="view-icon me-2"><i class="feather-eye me-1"></i>View</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Create desktop applications</td>
                                                <td>$5762</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-md mb-0">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <p class="mb-0 orange-text text-center ms-3">50%</p>
                                                    </div>
                                                </td>
                                                <td>25 Sep 2023</td>
                                                <td>25 Sep 2023</td>
                                                <td><span class="badge badge-pill bg-danger-light">Unpaid</span></td>
                                                <td>
                                                    <div class="action-table-data">
                                                        <a href="#view-milestone" data-bs-toggle="modal" class="view-icon me-2"><i class="feather-eye me-1"></i>View</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PHP, Javascript Projects </td>
                                                <td>$4879</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-md mb-0">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <p class="mb-0 orange-text text-center ms-3">100%</p>
                                                    </div>
                                                </td>
                                                <td>17 Sep 2023</td>
                                                <td>17 Sep 2023</td>
                                                <td><span class="badge badge-pill bg-success-light">Paid</span></td>
                                                <td>
                                                    <div class="action-table-data">
                                                        <a href="#view-milestone" data-bs-toggle="modal" class="view-icon me-2"><i class="feather-eye me-1"></i>View</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Website Designer Required </td>
                                                <td>$3651</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-md mb-0">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <p class="mb-0 orange-text text-center ms-3">50%</p>
                                                    </div>
                                                </td>
                                                <td>11 Sep 2023</td>
                                                <td>11 Sep 2023</td>
                                                <td><span class="badge badge-pill bg-danger-light">Unpaid</span></td>
                                                <td>
                                                    <div class="action-table-data">
                                                        <a href="#view-milestone" data-bs-toggle="modal" class="view-icon me-2"><i class="feather-eye me-1"></i>View</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Swift / SwiftUI Developer</td>
                                                <td>$2789</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-md mb-0">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <p class="mb-0 orange-text text-center ms-3">100%</p>
                                                    </div>
                                                </td>
                                                <td>05 Sep 2023</td>
                                                <td>05 Sep 2023</td>
                                                <td><span class="badge badge-pill bg-success-light">Paid</span></td>
                                                <td>
                                                    <div class="action-table-data">
                                                        <a href="#view-milestone" data-bs-toggle="modal" class="view-icon me-2"><i class="feather-eye me-1"></i>View</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Full-stack Developer </td>
                                                <td>$7853</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-md mb-0">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <p class="mb-0 orange-text text-center ms-3">100%</p>
                                                    </div>
                                                </td>
                                                <td>01 Sep 2023</td>
                                                <td>01 Sep 2023</td>
                                                <td><span class="badge badge-pill bg-success-light">Paid</span></td>
                                                <td>
                                                    <div class="action-table-data">
                                                        <a href="#view-milestone" data-bs-toggle="modal" class="view-icon me-2"><i class="feather-eye me-1"></i>View</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- project list -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
    @component('components.modal-popup')

    @endcomponent

@endsection
