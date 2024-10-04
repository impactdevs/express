<?php error_reporting(0); ?>
@if (
    !Route::is([
        'index-two',
        'index-three',
        'index-four',
        'index-five',
        'dashboard',
        'manage-projects',
        'favourites',
        'membership-plans',
        'milestones',
        'view-project-detail',
        'tasks',
        'files',
        'project-payment',
        'chats',
        'review',
        'deposit-funds',
        'verify-identity',
        'profile-settings',
        'freelancer-dashboard',
        'freelancer-project-proposals',
        'freelancer-favourites',
        'freelancer-membership',
        'freelancer-change-password',
        'freelancer-chats',
        'freelancer-review',
        'freelancer-portfolio',
        'freelancer-withdraw-money',
        'freelancer-verify-identity',
        'freelancer-profile-settings',
        'blank-page',
        'change-passwords',
        'ongoing-projects',
        'completed-projects',
        'pending-projects',
        'cancelled-projects',
        'expired-projects',
        'invited-favourites',
        'delete-account',
        'change-password',
        'freelancer-completed-projects',
        'freelancer-cancelled-projects',
        'freelancer-delete-account',
        'freelancer-files',
        'freelancer-invitations',
        'freelancer-milestones',
        'freelancer-ongoing-projects',
        'freelancer-payment',
        'freelancer-payout',
        'freelancer-view-project-detail',
        'freelancer-verified',
        'freelancer-task',
        'freelancer-statement',
'project-employer-view-proposal'
    ]))
    <!-- Header -->
<header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg header-nav p-0">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="{{ url('index') }}" class="navbar-brand logo">
                        <img src="{{ URL::asset('/assets/img/logo.png') }}" 
                        class="img-fluid" 
                        alt="Logo"
                        height="80px"
                        width="80px"
                        >
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{ url('index') }}" class="menu-logo">
                            <img 
                            src="{{ URL::asset('/assets/img/logo.png') }}"
                             class="img-fluid" alt="Logo"
                             height="80px"
                             width="80px"
                             >
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="has-submenu">

                            <a href="{{ url('index') }}">Home </a>
                            
                        </li>
                        <li class="has-submenu">

                            <a href="javascript:void(0);">For Employers </a>


                        </li>
                        <li class="has-submenu">

                            <a href="javascript:void(0);">For Freelancer</a>


                        </li>

                        <li>
                            <a href="{{ url('admin/index_admin') }}" target="_blank">Admin</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht reg-head">
                    <li class="<?php if ($page == 'register') {
                        echo 'active';
                    } ?>"><a href="{{ url('register') }}" class="reg-btn"><img
                                src="{{ URL::asset('/assets/img/icon/users.svg') }}" class="me-1"
                                alt="img">Register</a></li>
                    <li class="<?php if ($page == 'login') {
                        echo 'active';
                    } ?>"><a href="{{ url('login') }}" class="log-btn"><img
                                src="{{ URL::asset('/assets/img/icon/lock.svg') }}" class="me-1" alt="img">
                            Login</a></li>
                    <li class="<?php if ($page == 'post-project') {
                        echo 'active';
                    } ?>"><a href="{{ url('post-project') }}" class="login-btn"><i
                                class="feather-plus me-1"></i>Post a Project </a></li>
                </ul>
            </nav>
        </div>

</header>
    <!-- /Header -->

    @endif




