<?php $page="freelancer-statement";?>
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
                                    <a href="{{url('freelancer-statement')}}" class="nav-link active">
                                        <img src="{{URL::asset('/assets/img/icon/sidebar-icon-09.svg')}}" alt="Img"> Statement
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
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
                                            <a href="{{url('freelancer-verify-identity')}}">Verify Identity</a>
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
                        <h3 class="mb-0">Statement</h3>
                    </div>
                    <div class="widget-section">
                        <div class="row row-gap">
                            <div class="col-md-6 col-lg-3 d-flex">
                                <div class="dash-widget flex-fill">
                                    <div class="dash-info">
                                        <div class="d-flex">
                                            <div class="dashboard-icon">
                                                <img src="{{URL::asset('/assets/img/icon/money-dollar-box-line.svg')}}" alt="icon">
                                            </div>
                                            <div class="dash-widget-info"><span>Net Earnings</span><h5>$10,000</h5></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex">
                                <div class="dash-widget flex-fill">
                                    <div class="dash-info">
                                        <div class="d-flex">
                                            <div class="dashboard-icon">
                                                <img src="{{URL::asset('/assets/img/icon/wallet-icon.svg')}}" alt="icon">
                                            </div>
                                            <div class="dash-widget-info"><span>Fees</span><h5>$100</h5></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex">
                                <div class="dash-widget flex-fill">
                                    <div class="dash-info">
                                        <div class="d-flex">
                                            <div class="dashboard-icon">
                                                <img src="{{URL::asset('/assets/img/icon/install-line.svg')}}" alt="icon">
                                            </div>
                                            <div class="dash-widget-info"><span>Withdraw</span><h5>$750</h5></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex">
                                <div class="dash-widget flex-fill">
                                    <div class="dash-info">
                                        <div class="d-flex">
                                            <div class="dashboard-icon">
                                                <img src="{{URL::asset('/assets/img/icon/uninstall-line.svg')}}" alt="icon">
                                            </div>
                                            <div class="dash-widget-info"><span>Balance</span><h5>$870</h5></div>
                                        </div>
                                        <a class="withdraw-btn" href="javascript:void(0);">Withdraw</a>
                                    </div>
                                </div>
                            </div>
                           
                        
                            
                        </div>
                    </div>
                    
                    <!-- Table -->
                    <div class="table-top-section">
                        <div class="table-header">
                            <h5 class="mb-0">Transactions</h5>
                        </div>
                        <div class="table-options">
                            <div class="data-search-input">
                                <input type="text" class="form-control" placeholder="Search here" name="search" id="search">
                            </div>
                            <a href="javascript:void(0)';" class="table-option-btn">
                                <i class="feather-printer"></i>
                            </a>
                            <a href="javascript:void(0)';" class="table-option-btn">
                                <i class="feather-repeat"></i>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                               <tr>
                                    <th>Date</th>
                                    <th>ID</th>
                                    <th>Type</th>
                                    <th>Payment Type</th>
                                    <th>Amount</th>
                                    <th>Invoice</th>
                               </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>29 Sep 2023, 11:26 PM</td>
                                    <td>1023456</td>
                                    <td>Wallet Top-up</td>
                                    <td>PayPal</td>
                                    <td>$80.00</td>
                                    <td><a href="javascript:void(0);" class="badge badge-download"><i class="feather-download"></i><span>Download</span></a></td>
                                </tr>
                                <tr>
                                    <td>17 Sep 2023, 09:14 AM</td>
                                    <td>1023457</td>
                                    <td>Project</td>
                                    <td>Stripe</td>
                                    <td>$20.50</td>
                                    <td><a href="javascript:void(0);" class="badge badge-download"><i class="feather-download"></i><span>Download</span></a></td>
                                </tr>
                                <tr>
                                    <td>13 Sep 2023, 11:15 AM</td>
                                    <td>1023458</td>
                                    <td>Income</td>
                                    <td>Bank Transfer</td>
                                    <td>$35.70</td>
                                    <td><a href="javascript:void(0);" class="badge badge-download"><i class="feather-download"></i><span>Download</span></a></td>
                                </tr>
                                <tr>
                                    <td>07 Sep 2023, 05:37 PM</td>
                                    <td>1023459</td>
                                    <td>Wallet Top-up</td>
                                    <td>PayPal</td>
                                    <td>$62.80</td>
                                    <td><a href="javascript:void(0);" class="badge badge-download"><i class="feather-download"></i><span>Download</span></a></td>
                                </tr>
                                <tr>
                                    <td>02 Sep 2023, 07:42 PM</td>
                                    <td>1023460</td>
                                    <td>Purchase</td>
                                    <td>Stripe</td>
                                    <td>$73.30</td>
                                    <td><a href="javascript:void(0);" class="badge badge-download"><i class="feather-download"></i><span>Download</span></a></td>
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