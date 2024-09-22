<?php $page="freelancer-verified";?>
@extends('layout.mainlayout')
@section('content')	
	
<!-- Page Content -->
<div class="content content-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                <div class="settings-widget">
                    <div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
                        <a href="{{url('freelancer-profile')}}"><img alt="profile image" src="{{URL::asset('/assets/img/user/avatar-1.jpg')}}" class="avatar-lg rounded-circle"></a>
                        <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                            <h3 class="mb-0"><a href="{{url('freelancer-profile')}}">Bruce Bush</a><img src="{{URL::asset('/assets/img/icon/verified-badge.svg')}}" class="ms-1" alt="Img"></h3>
                            <p class="mb-0">@brucebush</p>
                        </div>
                    </div>
                    <div class="settings-menu">
                        <div id="sidebar-menu" class="sidebar-menu">
                            <ul>
                                <li class="nav-item">
                                    <a href="{{url('freelancer-dashboard')}}" class="nav-link ">
                                        <img src="{{URL::asset('/assets/img/icon/sidebar-icon-01.svg')}}" alt="Img"> Dashboard
                                        
                                    </a>
                                </li>
                                <li class="nav-item submenu">
                                    <a href="{{url('freelancer-project-proposals')}}" class="nav-link">
                                        <img src="{{URL::asset('/assets/img/icon/sidebar-icon-02.svg')}}" alt="Img"> Projects
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li>
                                            <a href="{{url('freelancer-project-proposals')}}">My Proposal</a>
                                        </li>
                                        <li>
                                            <a href="{{url('freelancer-ongoing-projects')}}">Ongoing Projects</a>
                                        </li>
                                        <li>
                                            <a href="{{url('freelancer-completed-projects')}}">Completed Projects</a>
                                        </li>
                                        <li>
                                            <a href="{{url('freelancer-cancelled-projects')}}">Cancelled Projects</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item submenu">
                                    <a href="{{url('freelancer-favourites')}}" class="nav-link">
                                        <img src="{{URL::asset('/assets/img/icon/sidebar-icon-03.svg')}}" alt="Img"> Favourites
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li>
                                            <a href="{{url('freelancer-favourites')}}">Bookmarked Projects</a>
                                        </li>
                                        <li>
                                            <a href="{{url('freelancer-invitations')}}">Invitations</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('freelancer-review')}}" class="nav-link">
                                        <img src="{{URL::asset('/assets/img/icon/sidebar-icon-04.svg')}}" alt="Img"> Reviews
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('freelancer-portfolio')}}" class="nav-link">
                                        <img src="{{URL::asset('/assets/img/icon/sidebar-icon-05.svg')}}" alt="Img"> Portfolio
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('freelancer-chats')}}" class="nav-link">
                                        <img src="{{URL::asset('/assets/img/icon/sidebar-icon-06.svg')}}" alt="Img"> Chat
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('freelancer-withdraw-money')}}" class="nav-link">
                                        <img src="{{URL::asset('/assets/img/icon/sidebar-icon-07.svg')}}" alt="Img"> Payments
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('freelancer-payout')}}" class="nav-link ">
                                        <img src="{{URL::asset('/assets/img/icon/sidebar-icon-08.svg')}}" alt="Img"> Payout
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('freelancer-statement')}}" class="nav-link">
                                        <img src="{{URL::asset('/assets/img/icon/sidebar-icon-09.svg')}}" alt="Img"> Statement
                                    </a>
                                </li>
                                <li class="nav-item submenu">
                                    <a href="{{url('freelancer-profile-settings')}}" class="nav-link active">
                                        <img src="{{URL::asset('/assets/img/icon/sidebar-icon-10.svg')}}" alt="Img">  Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li>
                                            <a href="{{url('freelancer-profile-settings')}}">Profile Setting</a>
                                        </li>
                                        <li>
                                            <a href="{{url('freelancer-membership')}}">Plan & Billing</a>
                                        </li>
                                        <li>
                                            <a class="active" href="{{url('freelancer-verify-identity')}}">Verify Identity</a>
                                        </li>
                                        <li>
                                            <a href="{{url('freelancer-change-password')}}">Changes Password</a>
                                        </li>
                                        <li>
                                            <a href="{{url('freelancer-delete-account')}}">Delete Account</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('index')}}" class="nav-link">
                                        <img src="{{URL::asset('/assets/img/icon/sidebar-icon-11.svg')}}" alt="Img"> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>					
            </div>	

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