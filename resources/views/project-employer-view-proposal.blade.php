<?php $page="project-employer-view-proposal";?>
@extends('layout.mainlayout')
@section('content')
	<!-- Page Content -->
    <div class="content content-page">
        <div class="container">
            <div class="row">
                @include('layout.partials.nav-employer')
                <div class="col-xl-9 col-lg-8">
                    <div class="page-title">
                        <h3>Proposals</h3>
                    </div>
                    <!-- project list -->
                    <div class="my-projects-list ongoing-projects">
                        <div class="row">
                            <div class="col-xl-9 flex-wrap">
                                <div class="freelancer-proposals proposal-ongoing mb-0">
                                    <div class="project-proposals align-items-center freelancer">
                                        <div class="proposal-info">
                                            <div class="proposals-details">
                                                <span class="tech-name-badge">Dreamguystech</span>
                                                <div class="d-flex justify-content-between align-items-start">
                                                    <div class="employee-project-card w-100">

                                                        <h3 class="proposals-title">WooCommerce Product Page Back Up Restoration</h3>
                                                        <ul>

                                                            <li>
                                                                <div class="proposal-job-type">
                                                                    <h4 class="title-info">Project type</h4>
                                                                    <h3>Fixed</h3>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="proposal-job-type">
                                                                    <h4 class="title-info">Location</h4>
                                                                    <h3 class="flag-icon"><img src="{{URL::asset('/assets/img/icon/flag-icon.svg')}}" height="13" alt="Lang"> UK</h3>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="proposal-job-type">
                                                                    <h4 class="title-info">Expiry</h4>
                                                                    <h3>4 Days Left</h3>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="proposal-job-type">
                                                                    <h4 class="title-info">No of days to complete</h4>
                                                                    <h3>14 days</h3>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="proposal-job-type">
                                                                    <h4 class="title-info">Price</h4>
                                                                    <h3>$500</h3>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 d-flex flex-wrap">
                                <div class="projects-card flex-fill">
                                    <div class="card-body p-2">
                                        <div class="prj-proposal-count text-center hired">
                                            <h2>27</h2>
                                            <h3 class="mb-0">Proposal</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /project list -->

                    <div class="my-projects-list ongoing-projects">
                        <div class="pending-proposal-profile">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="user-img-box">
                                    <img src="{{URL::asset('/assets/img/user/user-04.jpg')}}" alt="Img">
                                    <div class="user-name">
                                        <h6>Hannah Finn</h6>
                                        <span>Applied on : February 26, 2024 <i class="fa-solid fa-star"></i>5.0</span>
                                    </div>
                                </div>
                                <div class="payment-count">
                                    <div class="cost">
                                        <h4>$400</h4>
                                        <span>in 09 Days</span>
                                    </div>
                                    <div class="hire-now">
                                        <a href="#hire-now" class="btn btn-primary" data-bs-toggle="modal">Hire Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="describe-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent porttitor cursus sed cum Turpis quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent porttitor cursus</p>
                                <a href="javascript:void(0);" class="more-text">Readmore</a>
                            </div>
                        </div>
                    </div>

                    <div class="my-projects-list ongoing-projects">
                        <div class="pending-proposal-profile">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="user-img-box">
                                    <img src="{{URL::asset('/assets/img/user/user-04.jpg')}}" alt="Img">
                                    <div class="user-name">
                                        <h6>Hannah Finn</h6>
                                        <span>Applied on : February 26, 2024 <i class="fa-solid fa-star"></i>5.0</span>
                                    </div>
                                </div>
                                <div class="payment-count">
                                    <div class="cost">
                                        <h4>$400</h4>
                                        <span>in 09 Days</span>
                                    </div>
                                    <div class="hire-now">
                                        <a href="#hire-now" class="btn btn-primary" data-bs-toggle="modal">Hire Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="describe-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent porttitor cursus sed cum Turpis quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent porttitor cursus</p>
                                <a href="javascript:void(0);" class="more-text">Readmore</a>
                            </div>
                        </div>
                    </div>

                    <div class="my-projects-list ongoing-projects">
                        <div class="pending-proposal-profile">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="user-img-box">
                                    <img src="{{URL::asset('/assets/img/user/user-04.jpg')}}" alt="Img">
                                    <div class="user-name">
                                        <h6>Hannah Finn</h6>
                                        <span>Applied on : February 26, 2024 <i class="fa-solid fa-star"></i>5.0</span>
                                    </div>
                                </div>
                                <div class="payment-count">
                                    <div class="cost">
                                        <h4>$400</h4>
                                        <span>in 09 Days</span>
                                    </div>
                                    <div class="hire-now">
                                        <a href="#hire-now" class="btn btn-primary" data-bs-toggle="modal">Hire Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="describe-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent porttitor cursus sed cum Turpis quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent porttitor cursus</p>
                                <a href="javascript:void(0);" class="more-text">Readmore</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <ul class="paginations list-pagination justify-content-end">
                                <li class="page-item"><a href="javascript:void(0);"><i class="feather-chevron-left"></i></a>
                                </li>
                                <li class="page-item"><a href="javascript:void(0);" class="active">1</a></li>
                                <li class="page-item"><a href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a href="javascript:void(0);">...</a></li>
                                <li class="page-item"><a href="javascript:void(0);">10</a></li>
                                <li class="page-item"><a href="javascript:void(0);"><i class="feather-chevron-right"></i></a></li>
                            </ul>
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
