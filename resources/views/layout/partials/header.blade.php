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
                        <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{ url('index') }}" class="menu-logo">
                            <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="has-submenu <?php if ($page == 'pagee' || $page == 'index-two' || $page == 'index-three' || $page == 'index-four' || $page == 'index-five') {
                            echo 'active';
                        } ?>">

                            <a href="{{ url('index') }}">Home <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'pagee') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index') }}">Home</a></li>
                                <li class="<?php if ($page == 'index-two') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-two') }}">Home 2</a></li>
                                <li class="<?php if ($page == 'index-three') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-three') }}">Home 3</a></li>
                                <li class="<?php if ($page == 'index-four') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-four') }}">Home 4</a></li>
                                <li class="<?php if ($page == 'index-five') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-five') }}">Home 5</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'dashboard' || $page == 'manage-projects' || $page == 'developer' || $page == 'developer-details' || $page == 'favourites' || $page == 'membership-plans' || $page == 'milestones' || $page == 'chats' || $page == 'review' || $page == 'deposit-funds' || $page == 'verify-identity' || $page == 'profile-setting' || $page == 'company-profile'  || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list'  || $page == 'profile-settings' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Employers <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'developer' || $page == 'developer-details' || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list') {
                                    echo 'active';
                                } ?>">

                                    <a href="javascript:void(0);">Freelancer</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'developer') {
                                            echo 'active';
                                        } ?>"><a href="{{ url('developer') }}">Freelancer</a>
                                        </li>
                                        <li class="<?php if ($page == 'developer-details') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('developer-details') }}">Freelancer Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'dashboard') {
                                    echo 'active';
                                } ?>"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                                <li class="<?php if ($page == 'company-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('company-profile') }}">My Profile</a>
                                </li>

                                <li class="<?php if ($page == 'manage-projects') {
                                    echo 'active';
                                } ?>"><a href="{{ url('manage-projects') }}">Projects</a>
                                </li>
                                <li class="<?php if ($page == 'favourites') {
                                    echo 'active';
                                } ?>"><a href="{{ url('favourites') }}">Favourites</a></li>
                                <li class="<?php if ($page == 'membership-plans') {
                                    echo 'active';
                                } ?>"><a href="{{ url('membership-plans') }}">Membership</a>
                                </li>
                                <li class="<?php if ($page == 'milestones') {
                                    echo 'active';
                                } ?>"><a href="{{ url('milestones') }}">Milestones</a></li>
                                <li class="<?php if ($page == 'chats') {
                                    echo 'active';
                                } ?>"><a href="{{ url('chats') }}">Chats</a></li>
                                <li class="<?php if ($page == 'review') {
                                    echo 'active';
                                } ?>"><a href="{{ url('review') }}">Review</a></li>
                                <li class="<?php if ($page == 'deposit-funds') {
                                    echo 'active';
                                } ?>"><a href="{{ url('deposit-funds') }}">Payments</a></li>
                                <li class="<?php if ($page == 'verify-identity') {
                                    echo 'active';
                                } ?>"><a href="{{ url('verify-identity') }}">Verify
                                        Identity</a></li>
                                <li class="<?php if ($page == 'profile-settings') {
                                    echo 'active';
                                } ?>"><a href="{{ url('profile-settings') }}">Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details' || $page == 'freelancer-dashboard' || $page == 'freelancer-project-proposals' || $page == 'freelancer-favourites' || $page == 'freelancer-membership' || $page == 'freelancer-change-password' || $page == 'freelancer-chats' || $page == 'freelancer-review' || $page == 'freelancer-withdraw-money' || $page == 'freelancer-verify-identity' || $page == 'freelancer-profile-settings' || $page == 'freelancer-portfolio' || $page == 'freelancer-profile' || $page == 'developer-profile') {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Freelancer <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details') {
                                    echo 'active';
                                } ?>">
                                    <a href="javascript:void(0);">Projects</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'project') {
                                            echo 'active';
                                        } ?>"><a href="{{ url('project') }}">Projects</a>
                                        </li>
                                        <li class="<?php if ($page == 'project-details') {
                                            echo 'active';
                                        } ?>"><a href="{{ url('project-details') }}">Project
                                                Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'freelancer-dashboard') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-dashboard') }}">Dashboard</a></li>
                                <li class="<?php if ($page == 'developer-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('developer-profile') }}">My
                                        Profile</a></li>
                                <li class="<?php if ($page == 'freelancer-project-proposals') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-project-proposals') }}">Projects</a></li>
                                <li class="<?php if ($page == 'freelancer-favourites') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-favourites') }}">Favourites</a></li>
                                <li class="<?php if ($page == 'freelancer-membership') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-membership') }}">Membership</a></li>
                                <li class="<?php if ($page == 'freelancer-change-password') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-change-password') }}">Change Password</a></li>
                                <li class="<?php if ($page == 'freelancer-chats') {
                                    echo 'active';
                                } ?>"><a href="{{ url('freelancer-chats') }}">Chats</a></li>
                                <li class="<?php if ($page == 'freelancer-review') {
                                    echo 'active';
                                } ?>"><a href="{{ url('freelancer-review') }}">Review</a>
                                </li>
                                <li class="<?php if ($page == 'freelancer-withdraw-money') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-withdraw-money') }}">Payments</a></li>
                                <li class="<?php if ($page == 'freelancer-verify-identity') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-verify-identity') }}">Verify Identity</a></li>
                                <li class="<?php if ($page == 'freelancer-profile-settings') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-profile-settings') }}">Settings</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'about' || $page == 'blank-page' || $page == '404-page' || $page == 'user-account-details' || $page == 'login' || $page == 'register' || $page == 'forgot-password' || $page == 'change-passwords' || $page == 'onboard-screen' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'about') {
                                    echo 'active';
                                } ?>"><a href="{{ url('about') }}">About us</a></li>
                                <li class="<?php if ($page == 'blank-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blank-page') }}">Starter Page</a>
                                </li>
                                <li class="<?php if ($page == '404-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('404-page') }}">404 Page</a></li>
                                <li class="<?php if ($page == 'login') {
                                    echo 'active';
                                } ?>"><a href="{{ url('login') }}">Login</a></li>
                                <li class="<?php if ($page == 'register') {
                                    echo 'active';
                                } ?>"><a href="{{ url('register') }}">Register</a></li>
                                <li class="<?php if ($page == 'onboard-screen') {
                                    echo 'active';
                                } ?>"><a href="{{ url('onboard-screen') }}">Onboard
                                        Screen</a></li>
                                <li class="<?php if ($page == 'forgot-password') {
                                    echo 'active';
                                } ?>"><a href="{{ url('forgot-password') }}">Forgot
                                        Password</a></li>
                                <li class="<?php if ($page == 'change-passwords') {
                                    echo 'active';
                                } ?>"><a href="{{ url('change-passwords') }}">Change
                                        Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu  <?php if ($page == 'blog-list' || $page == 'blog-grid' || $page == 'blog-details') {
                            echo 'active';
                        } ?>">
                            <a href="javascript:void(0);">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'blog-list') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-list') }}">Blog List</a></li>
                                <li class="<?php if ($page == 'blog-grid') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-grid') }}">Blog Grid</a></li>
                                <li class="<?php if ($page == 'blog-details') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-details') }}">Blog Details</a>
                                </li>
                            </ul>
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

@if (Route::is(['index-two']))
    <!-- Header -->
    <header class="header header-two">
        <div class="top-header">
            <div class="container">
                <div class="top-head-items">
                    <ul class="nav user-menu">
                        <!-- Flag -->
                        <li class="nav-item dropdown has-arrow flag-nav">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
                                role="button">
                                <img src="{{ URL::asset('/assets/img/flags/us.png') }}" class="me-1"
                                    alt="Flag" height="20"> <span>English</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('/assets/img/flags/us.png') }}" alt="Flag"
                                        height="16"> English
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('/assets/img/flags/fr.png') }}" alt="Flag"
                                        height="16"> French
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('/assets/img/flags/es.png') }}" alt="Flag"
                                        height="16"> Spanish
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{ URL::asset('/assets/img/flags/de.png') }}" alt="Flag"
                                        height="16"> German
                                </a>
                            </div>
                        </li>
                        <!-- /Flag -->
                        <li class="nav-item dropdown has-arrow flag-nav">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
                                role="button">
                                <span>USD</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    USD
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    French
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul class="top-header-links">
                        <li>
                            <ul>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa-regular fa-bell"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('register') }}"><i class="feather feather-lock"></i>Register</a>
                        </li>
                        <li>
                            <a href="{{ url('login') }}"><i class="feather feather-user"></i>Login</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/index_admin') }}" target="_blank"><i
                                    class="feather feather-user"></i>Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="navbar navbar-expand-lg header-nav p-0">
                <div class="navbar-header header-select">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="{{ url('index') }}" class="navbar-brand logo">
                        <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                    <div class="input-group">
                        <img src="{{ URL::asset('/assets/img/icon/dashboard-line.svg') }}" alt="Img">
                        <select class="select">
                            <option value="">Categories</option>
                            <option value="">Video & Animation</option>
                            <option value="">Music & Audio</option>
                            <option value="">Writing & Translation</option>
                            <option value="">Digital Marketing</option>
                            <option value="">Design & Creative</option>
                            <option value="">Development & IT</option>
                        </select>
                    </div>
                </div>

                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{ url('index') }}" class="menu-logo">
                            <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>

                    </div>

                    <ul class="main-nav">

                        <li class="has-submenu <?php if ($page == 'pagee' || $page == 'index-two' || $page == 'index-three' || $page == 'index-four' || $page == 'index-five') {
                            echo 'active';
                        } ?>">

                            <a href="{{ url('index') }}">Home <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'pagee') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index') }}">Home</a></li>
                                <li class="<?php if ($page == 'index-two') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-two') }}">Home 2</a></li>
                                <li class="<?php if ($page == 'index-three') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-three') }}">Home 3</a></li>
                                <li class="<?php if ($page == 'index-four') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-four') }}">Home 4</a></li>
                                <li class="<?php if ($page == 'index-five') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-five') }}">Home 5</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'dashboard' || $page == 'manage-projects' || $page == 'developer' || $page == 'favourites' || $page == 'membership-plans' || $page == 'milestones' || $page == 'chats' || $page == 'review' || $page == 'deposit-funds' || $page == 'verify-identity' || $page == 'profile-setting' || $page == 'company-profile'  || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list'  || $page == 'profile-settings' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Employers <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'developer' || $page == 'developer-details' || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list') {
                                    echo 'active';
                                } ?>">

                                    <a href="javascript:void(0);">Freelancer</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'developer') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('developer') }}">Freelancer</a></li>
                                        <li class="<?php if ($page == 'developer-details') {
                                            echo 'active';
                                        } ?>"><a href="developer-details')}}">Freelancer
                                                Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'dashboard') {
                                    echo 'active';
                                } ?>"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                                <li class="<?php if ($page == 'company-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('company-profile') }}">My
                                        Profile</a></li>

                                <li class="<?php if ($page == 'manage-projects') {
                                    echo 'active';
                                } ?>"><a href="{{ url('manage-projects') }}">Projects</a>
                                </li>
                                <li class="<?php if ($page == 'favourites') {
                                    echo 'active';
                                } ?>"><a href="{{ url('favourites') }}">Favourites</a>
                                </li>
                                <li class="<?php if ($page == 'membership-plans') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('membership-plans') }}">Membership</a></li>
                                <li class="<?php if ($page == 'milestones') {
                                    echo 'active';
                                } ?>"><a href="{{ url('milestones') }}">Milestones</a>
                                </li>
                                <li class="<?php if ($page == 'chats') {
                                    echo 'active';
                                } ?>"><a href="{{ url('chats') }}">Chats</a></li>
                                <li class="<?php if ($page == 'review') {
                                    echo 'active';
                                } ?>"><a href="{{ url('review') }}">Review</a></li>
                                <li class="<?php if ($page == 'deposit-funds') {
                                    echo 'active';
                                } ?>"><a href="{{ url('deposit-funds') }}">Payments</a>
                                </li>
                                <li class="<?php if ($page == 'verify-identity') {
                                    echo 'active';
                                } ?>"><a href="{{ url('verify-identity') }}">Verify
                                        Identity</a></li>
                                <li class="<?php if ($page == 'profile-settings') {
                                    echo 'active';
                                } ?>"><a href="{{ url('profile-settings') }}">Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details' || $page == 'freelancer-dashboard' || $page == 'freelancer-project-proposals' || $page == 'freelancer-favourites' || $page == 'freelancer-membership' || $page == 'freelancer-change-password' || $page == 'freelancer-chats' || $page == 'freelancer-review' || $page == 'freelancer-withdraw-money' || $page == 'freelancer-verify-identity' || $page == 'freelancer-profile-settings' || $page == 'freelancer-portfolio' || $page == 'freelancer-profile' || $page == 'developer-details' || $page == 'developer-profile') {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Freelancer <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details') {
                                    echo 'active';
                                } ?>">
                                    <a href="javascript:void(0);">Projects</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'project') {
                                            echo 'active';
                                        } ?>"><a href="{{ url('project') }}">Projects</a>
                                        </li>
                                        <li class="<?php if ($page == 'project-details') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('project-details') }}">Project Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'freelancer-dashboard') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-dashboard') }}">Dashboard</a></li>
                                <li class="<?php if ($page == 'developer-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('developer-profile') }}">My
                                        Profile</a></li>
                                <li class="<?php if ($page == 'freelancer-project-proposals') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-project-proposals') }}">Projects</a></li>
                                <li class="<?php if ($page == 'freelancer-favourites') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-favourites') }}">Favourites</a></li>
                                <li class="<?php if ($page == 'freelancer-membership') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-membership') }}">Membership</a></li>
                                <li class="<?php if ($page == 'freelancer-change-password') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-change-password') }}">Change Password</a></li>
                                <li class="<?php if ($page == 'freelancer-chats') {
                                    echo 'active';
                                } ?>"><a href="{{ url('freelancer-chats') }}">Chats</a>
                                </li>
                                <li class="<?php if ($page == 'freelancer-review') {
                                    echo 'active';
                                } ?>"><a href="{{ url('freelancer-review') }}">Review</a>
                                </li>
                                <li class="<?php if ($page == 'freelancer-withdraw-money') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-withdraw-money') }}">Payments</a></li>
                                <li class="<?php if ($page == 'freelancer-verify-identity') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-verify-identity') }}">Verify Identity</a></li>
                                <li class="<?php if ($page == 'freelancer-profile-settings') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-profile-settings') }}">Settings</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'about' || $page == 'blank-page' || $page == '404-page' || $page == 'user-account-details' || $page == 'login' || $page == 'register' || $page == 'forgot-password' || $page == 'change-passwords' || $page == 'onboard-screen' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'about') {
                                    echo 'active';
                                } ?>"><a href="{{ url('about') }}">About us</a></li>
                                <li class="<?php if ($page == 'blank-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blank-page') }}">Starter Page</a>
                                </li>
                                <li class="<?php if ($page == '404-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('404-page') }}">404 Page</a></li>
                                <li class="<?php if ($page == 'login') {
                                    echo 'active';
                                } ?>"><a href="{{ url('login') }}">Login</a></li>
                                <li class="<?php if ($page == 'register') {
                                    echo 'active';
                                } ?>"><a href="{{ url('register') }}">Register</a></li>
                                <li class="<?php if ($page == 'onboard-screen') {
                                    echo 'active';
                                } ?>"><a href="{{ url('onboard-screen') }}">Onboard
                                        Screen</a></li>
                                <li class="<?php if ($page == 'forgot-password') {
                                    echo 'active';
                                } ?>"><a href="{{ url('forgot-password') }}">Forgot
                                        Password</a></li>
                                <li class="<?php if ($page == 'change-passwords') {
                                    echo 'active';
                                } ?>"><a href="{{ url('change-passwords') }}">Change
                                        Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu  <?php if ($page == 'blog-list' || $page == 'blog-grid' || $page == 'blog-details') {
                            echo 'active';
                        } ?>">
                            <a href="javascript:void(0);">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'blog-list') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-list') }}">Blog List</a></li>
                                <li class="<?php if ($page == 'blog-grid') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-grid') }}">Blog Grid</a>
                                </li>
                                <li class="<?php if ($page == 'blog-details') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-details') }}">Blog
                                        Details</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ url('admin/index_admin') }}" target="_blank">Admin</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">
                    <li><a href="{{ url('post-project') }}" class="login-btn"><i
                                class="fa-solid fa-plus me-2"></i>Post a Project </a></li>
                </ul>
            </nav>
        </div>

    </header>
    <!-- /Header -->
@endif
@if (Route::is(['index-three']))
    <!-- Header -->
    <header class="header header-three">
        <div class="top-header">
            <p><img src="{{ URL::asset('/assets/img/icon/gift-box.svg') }}" alt="Img">Intro price. Get Kofejob
                for Big Sale -95% off.
            </p>
            <h5>First Posting Free!!!</h5>
            <a href="javascript:void(0);" class="close-add"><i class="feather-x-circle"></i></a>
        </div>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="{{ url('index') }}" class="navbar-brand logo scroll-logo">
                        <img src="{{ URL::asset('/assets/img/logo-white.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                    <a href="{{ url('index') }}" class="navbar-brand logo original-logo">
                        <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                    <div class="input-group">
                        <img src="{{ URL::asset('/assets/img/icon/dashboard-line.svg') }}" alt="Img">
                        <select class="select">
                            <option value="">Categories</option>
                            <option value="">Video & Animation</option>
                            <option value="">Music & Audio</option>
                            <option value="">Writing & Translation</option>
                            <option value="">Digital Marketing</option>
                            <option value="">Design & Creative</option>
                            <option value="">Development & IT</option>
                        </select>
                    </div>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{ url('index') }}" class="menu-logo">
                            <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="has-submenu <?php if ($page == 'pagee' || $page == 'index-two' || $page == 'index-three' || $page == 'index-four' || $page == 'index-five') {
                            echo 'active';
                        } ?>">

                            <a href="{{ url('index') }}">Home <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'pagee') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index') }}">Home</a></li>
                                <li class="<?php if ($page == 'index-two') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-two') }}">Home 2</a></li>
                                <li class="<?php if ($page == 'index-three') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-three') }}">Home 3</a></li>
                                <li class="<?php if ($page == 'index-four') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-four') }}">Home 4</a></li>
                                <li class="<?php if ($page == 'index-five') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-five') }}">Home 5</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'dashboard' || $page == 'manage-projects' || $page == 'developer' || $page == 'favourites' || $page == 'membership-plans' || $page == 'milestones' || $page == 'chats' || $page == 'review' || $page == 'deposit-funds' || $page == 'verify-identity' || $page == 'profile-setting' || $page == 'company-profile'  || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list'  || $page == 'profile-settings' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Employers <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'developer' || $page == 'developer-details' || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list') {
                                    echo 'active';
                                } ?>">

                                    <a href="javascript:void(0);">Freelancer</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'developer') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('developer') }}">Freelancer</a></li>
                                        <li class="<?php if ($page == 'developer-details') {
                                            echo 'active';
                                        } ?>"><a href="developer-details')}}">Freelancer
                                                Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'dashboard') {
                                    echo 'active';
                                } ?>"><a href="{{ url('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="<?php if ($page == 'company-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('company-profile') }}">My
                                        Profile</a></li>

                                <li class="<?php if ($page == 'manage-projects') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('manage-projects') }}">Projects</a></li>
                                <li class="<?php if ($page == 'favourites') {
                                    echo 'active';
                                } ?>"><a href="{{ url('favourites') }}">Favourites</a>
                                </li>
                                <li class="<?php if ($page == 'membership-plans') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('membership-plans') }}">Membership</a></li>
                                <li class="<?php if ($page == 'milestones') {
                                    echo 'active';
                                } ?>"><a href="{{ url('milestones') }}">Milestones</a>
                                </li>
                                <li class="<?php if ($page == 'chats') {
                                    echo 'active';
                                } ?>"><a href="{{ url('chats') }}">Chats</a></li>
                                <li class="<?php if ($page == 'review') {
                                    echo 'active';
                                } ?>"><a href="{{ url('review') }}">Review</a></li>
                                <li class="<?php if ($page == 'deposit-funds') {
                                    echo 'active';
                                } ?>"><a href="{{ url('deposit-funds') }}">Payments</a>
                                </li>
                                <li class="<?php if ($page == 'verify-identity') {
                                    echo 'active';
                                } ?>"><a href="{{ url('verify-identity') }}">Verify
                                        Identity</a></li>
                                <li class="<?php if ($page == 'profile-settings') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('profile-settings') }}">Settings</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details' || $page == 'freelancer-dashboard' || $page == 'freelancer-project-proposals' || $page == 'freelancer-favourites' || $page == 'freelancer-membership' || $page == 'freelancer-change-password' || $page == 'freelancer-chats' || $page == 'freelancer-review' || $page == 'freelancer-withdraw-money' || $page == 'freelancer-verify-identity' || $page == 'freelancer-profile-settings' || $page == 'freelancer-portfolio' || $page == 'freelancer-profile' || $page == 'developer-details' || $page == 'developer-profile') {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Freelancer <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details') {
                                    echo 'active';
                                } ?>">
                                    <a href="javascript:void(0);">Projects</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'project') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('project') }}">Projects</a></li>
                                        <li class="<?php if ($page == 'project-details') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('project-details') }}">Project Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'freelancer-dashboard') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-dashboard') }}">Dashboard</a></li>
                                <li class="<?php if ($page == 'developer-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('developer-profile') }}">My
                                        Profile</a></li>
                                <li class="<?php if ($page == 'freelancer-project-proposals') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-project-proposals') }}">Projects</a></li>
                                <li class="<?php if ($page == 'freelancer-favourites') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-favourites') }}">Favourites</a></li>
                                <li class="<?php if ($page == 'freelancer-membership') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-membership') }}">Membership</a></li>
                                <li class="<?php if ($page == 'freelancer-change-password') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-change-password') }}">Change Password</a></li>
                                <li class="<?php if ($page == 'freelancer-chats') {
                                    echo 'active';
                                } ?>"><a href="{{ url('freelancer-chats') }}">Chats</a>
                                </li>
                                <li class="<?php if ($page == 'freelancer-review') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-review') }}">Review</a></li>
                                <li class="<?php if ($page == 'freelancer-withdraw-money') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-withdraw-money') }}">Payments</a></li>
                                <li class="<?php if ($page == 'freelancer-verify-identity') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-verify-identity') }}">Verify Identity</a></li>
                                <li class="<?php if ($page == 'freelancer-profile-settings') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-profile-settings') }}">Settings</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'about' || $page == 'blank-page' || $page == '404-page' || $page == 'user-account-details' || $page == 'login' || $page == 'register' || $page == 'forgot-password' || $page == 'change-passwords' || $page == 'onboard-screen' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'about') {
                                    echo 'active';
                                } ?>"><a href="{{ url('about') }}">About us</a></li>
                                <li class="<?php if ($page == 'blank-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blank-page') }}">Starter Page</a>
                                </li>
                                <li class="<?php if ($page == '404-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('404-page') }}">404 Page</a></li>
                                <li class="<?php if ($page == 'login') {
                                    echo 'active';
                                } ?>"><a href="{{ url('login') }}">Login</a></li>
                                <li class="<?php if ($page == 'register') {
                                    echo 'active';
                                } ?>"><a href="{{ url('register') }}">Register</a></li>
                                <li class="<?php if ($page == 'onboard-screen') {
                                    echo 'active';
                                } ?>"><a href="{{ url('onboard-screen') }}">Onboard
                                        Screen</a></li>
                                <li class="<?php if ($page == 'forgot-password') {
                                    echo 'active';
                                } ?>"><a href="{{ url('forgot-password') }}">Forgot
                                        Password</a></li>
                                <li class="<?php if ($page == 'change-passwords') {
                                    echo 'active';
                                } ?>"><a href="{{ url('change-passwords') }}">Change
                                        Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu  <?php if ($page == 'blog-list' || $page == 'blog-grid' || $page == 'blog-details') {
                            echo 'active';
                        } ?>">
                            <a href="javascript:void(0);">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'blog-list') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-list') }}">Blog List</a>
                                </li>
                                <li class="<?php if ($page == 'blog-grid') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-grid') }}">Blog Grid</a>
                                </li>
                                <li class="<?php if ($page == 'blog-details') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-details') }}">Blog
                                        Details</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ url('admin/index_admin') }}" target="_blank">Admin</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">
                    <li><a href="{{ url('register') }}" class="log-btn">Register</a></li>
                    <li><a href="{{ url('login') }}" class="log-btn"> Login</a></li>
                    <li class="searchbar">
                        <a href="javascript:void(0);" class="reg-btn"><i class="feather-search"></i></a>
                        <div class="togglesearch">
                            <form action="javascript:void(0);">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <button type="submit" class="btn">Search</button>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="reg-btn"><i class="feather-shopping-cart"></i></a>
                    </li>
                    <li><a href="{{ url('post-project') }}" class="login-btn"><i class="feather-plus me-1"></i>Post
                            a Project </a></li>
                </ul>
            </nav>
        </div>

    </header>
    <!-- /Header -->
@endif

@if (Route::is(['index-four']))
    <!-- Header -->
<header class="header">
        <div class="container-fluid">
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
                        <img src="{{ URL::asset('assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{ url('index') }}" class="menu-logo">
                            <img src="{{ URL::asset('assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="has-submenu <?php if ($page == 'pagee' || $page == 'index-two' || $page == 'index-three' || $page == 'index-four' || $page == 'index-five') {
                            echo 'active';
                        } ?>">

                            <a href="{{ url('index') }}">Home <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'pagee') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index') }}">Home</a></li>
                                <li class="<?php if ($page == 'index-two') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-two') }}">Home 2</a></li>
                                <li class="<?php if ($page == 'index-three') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-three') }}">Home 3</a></li>
                                <li class="<?php if ($page == 'index-four') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-four') }}">Home 4</a></li>
                                <li class="<?php if ($page == 'index-five') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-five') }}">Home 5</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'dashboard' || $page == 'manage-projects' || $page == 'developer' || $page == 'favourites' || $page == 'membership-plans' || $page == 'milestones' || $page == 'chats' || $page == 'review' || $page == 'deposit-funds' || $page == 'verify-identity' || $page == 'profile-setting' || $page == 'company-profile'  || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list'  || $page == 'profile-settings' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Employers <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'developer' || $page == 'developer-details' || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list') {
                                    echo 'active';
                                } ?>">

                                    <a href="javascript:void(0);">Freelancer</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'developer') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('developer') }}">Freelancer</a></li>
                                        <li class="<?php if ($page == 'developer-details') {
                                            echo 'active';
                                        } ?>"><a href="developer-details')}}">Freelancer
                                                Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'dashboard') {
                                    echo 'active';
                                } ?>"><a href="{{ url('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="<?php if ($page == 'company-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('company-profile') }}">My
                                        Profile</a></li>

                                <li class="<?php if ($page == 'manage-projects') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('manage-projects') }}">Projects</a></li>
                                <li class="<?php if ($page == 'favourites') {
                                    echo 'active';
                                } ?>"><a href="{{ url('favourites') }}">Favourites</a>
                                </li>
                                <li class="<?php if ($page == 'membership-plans') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('membership-plans') }}">Membership</a></li>
                                <li class="<?php if ($page == 'milestones') {
                                    echo 'active';
                                } ?>"><a href="{{ url('milestones') }}">Milestones</a>
                                </li>
                                <li class="<?php if ($page == 'chats') {
                                    echo 'active';
                                } ?>"><a href="{{ url('chats') }}">Chats</a></li>
                                <li class="<?php if ($page == 'review') {
                                    echo 'active';
                                } ?>"><a href="{{ url('review') }}">Review</a></li>
                                <li class="<?php if ($page == 'deposit-funds') {
                                    echo 'active';
                                } ?>"><a href="{{ url('deposit-funds') }}">Payments</a>
                                </li>
                                <li class="<?php if ($page == 'verify-identity') {
                                    echo 'active';
                                } ?>"><a href="{{ url('verify-identity') }}">Verify
                                        Identity</a></li>
                                <li class="<?php if ($page == 'profile-settings') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('profile-settings') }}">Settings</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details' || $page == 'freelancer-dashboard' || $page == 'freelancer-project-proposals' || $page == 'freelancer-favourites' || $page == 'freelancer-membership' || $page == 'freelancer-change-password' || $page == 'freelancer-chats' || $page == 'freelancer-review' || $page == 'freelancer-withdraw-money' || $page == 'freelancer-verify-identity' || $page == 'freelancer-profile-settings' || $page == 'freelancer-portfolio' || $page == 'freelancer-profile' || $page == 'developer-details' || $page == 'developer-profile') {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Freelancer <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details') {
                                    echo 'active';
                                } ?>">
                                    <a href="javascript:void(0);">Projects</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'project') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('project') }}">Projects</a></li>
                                        <li class="<?php if ($page == 'project-details') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('project-details') }}">Project Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'freelancer-dashboard') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-dashboard') }}">Dashboard</a></li>
                                <li class="<?php if ($page == 'developer-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('developer-profile') }}">My
                                        Profile</a></li>
                                <li class="<?php if ($page == 'freelancer-project-proposals') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-project-proposals') }}">Projects</a></li>
                                <li class="<?php if ($page == 'freelancer-favourites') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-favourites') }}">Favourites</a></li>
                                <li class="<?php if ($page == 'freelancer-membership') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-membership') }}">Membership</a></li>
                                <li class="<?php if ($page == 'freelancer-change-password') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-change-password') }}">Change Password</a></li>
                                <li class="<?php if ($page == 'freelancer-chats') {
                                    echo 'active';
                                } ?>"><a href="{{ url('freelancer-chats') }}">Chats</a>
                                </li>
                                <li class="<?php if ($page == 'freelancer-review') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-review') }}">Review</a></li>
                                <li class="<?php if ($page == 'freelancer-withdraw-money') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-withdraw-money') }}">Payments</a></li>
                                <li class="<?php if ($page == 'freelancer-verify-identity') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-verify-identity') }}">Verify Identity</a></li>
                                <li class="<?php if ($page == 'freelancer-profile-settings') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-profile-settings') }}">Settings</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'about' || $page == 'blank-page' || $page == '404-page' || $page == 'user-account-details' || $page == 'login' || $page == 'register' || $page == 'forgot-password' || $page == 'change-passwords' || $page == 'onboard-screen' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'about') {
                                    echo 'active';
                                } ?>"><a href="{{ url('about') }}">About us</a></li>
                                <li class="<?php if ($page == 'blank-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blank-page') }}">Starter Page</a>
                                </li>
                                <li class="<?php if ($page == '404-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('404-page') }}">404 Page</a></li>
                                <li class="<?php if ($page == 'login') {
                                    echo 'active';
                                } ?>"><a href="{{ url('login') }}">Login</a></li>
                                <li class="<?php if ($page == 'register') {
                                    echo 'active';
                                } ?>"><a href="{{ url('register') }}">Register</a></li>
                                <li class="<?php if ($page == 'onboard-screen') {
                                    echo 'active';
                                } ?>"><a href="{{ url('onboard-screen') }}">Onboard
                                        Screen</a></li>
                                <li class="<?php if ($page == 'forgot-password') {
                                    echo 'active';
                                } ?>"><a href="{{ url('forgot-password') }}">Forgot
                                        Password</a></li>
                                <li class="<?php if ($page == 'change-passwords') {
                                    echo 'active';
                                } ?>"><a href="{{ url('change-passwords') }}">Change
                                        Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu  <?php if ($page == 'blog-list' || $page == 'blog-grid' || $page == 'blog-details') {
                            echo 'active';
                        } ?>">
                            <a href="javascript:void(0);">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'blog-list') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-list') }}">Blog List</a>
                                </li>
                                <li class="<?php if ($page == 'blog-grid') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-grid') }}">Blog Grid</a>
                                </li>
                                <li class="<?php if ($page == 'blog-details') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-details') }}">Blog
                                        Details</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ 'admin/index_admin' }}" target="_blank">Admin</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht reg-head">
                    <li class="searchbar">
                        <a href="javascript:void(0);" class="reg-btn"><i class="feather-search"></i></a>
                        <div class="togglesearch">
                            <form action="javascript:void(0);">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <button type="submit" class="btn">Search</button>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li><a href="{{ url('register') }}" class="reg-btn">Become a Seller</a></li>
                    <li><a href="{{ url('register') }}" class="reg-btn"><img
                                src="{{ URL::asset('assets/img/icon/users.svg') }}" class="me-1"
                                alt="img">Register</a></li>
                    <li><a href="{{ url('login') }}" class="log-btn"><img
                                src="{{ URL::asset('assets/img/icon/lock.svg') }}" class="me-1" alt="img">
                            Login</a></li>
                    <li><a href="{{ url('post-project') }}" class="login-btn"><i class="feather-plus me-1"></i>Post
                            a Project </a></li>
                </ul>
            </nav>
        </div>

    </header>
    <!-- /Header -->
@endif
@if (Route::is(['index-five']))
    <!-- Header -->
    <header class="header header-three">

        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="{{ url('index') }}" class="navbar-brand logo scroll-logo">
                        <img src="{{ URL::asset('/assets/img/logo-white.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                    <a href="{{ url('index') }}" class="navbar-brand logo original-logo">
                        <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                    <div class="input-group">
                        <img src="{{ URL::asset('/assets/img/icon/dashboard-line.svg') }}" alt="Img">
                        <select class="select">
                            <option value="">Categories</option>
                            <option value="">Video & Animation</option>
                            <option value="">Music & Audio</option>
                            <option value="">Writing & Translation</option>
                            <option value="">Digital Marketing</option>
                            <option value="">Design & Creative</option>
                            <option value="">Development & IT</option>
                        </select>
                    </div>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{ url('index') }}" class="menu-logo">
                            <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="has-submenu <?php if ($page == 'pagee' || $page == 'index-two' || $page == 'index-three' || $page == 'index-four' || $page == 'index-five') {
                            echo 'active';
                        } ?>">

                            <a href="{{ url('index') }}">Home <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'pagee') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index') }}">Home</a></li>
                                <li class="<?php if ($page == 'index-two') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-two') }}">Home 2</a></li>
                                <li class="<?php if ($page == 'index-three') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-three') }}">Home 3</a></li>
                                <li class="<?php if ($page == 'index-four') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-four') }}">Home 4</a></li>
                                <li class="<?php if ($page == 'index-five') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-five') }}">Home 5</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'dashboard' || $page == 'manage-projects' || $page == 'developer' || $page == 'favourites' || $page == 'membership-plans' || $page == 'milestones' || $page == 'chats' || $page == 'review' || $page == 'deposit-funds' || $page == 'verify-identity' || $page == 'profile-setting' || $page == 'company-profile'  || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list'  || $page == 'profile-settings' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Employers <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'developer' || $page == 'developer-details' || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list') {
                                    echo 'active';
                                } ?>">

                                    <a href="javascript:void(0);">Freelancer</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'developer') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('developer') }}">Freelancer</a></li>
                                        <li class="<?php if ($page == 'developer-details') {
                                            echo 'active';
                                        } ?>"><a href="developer-details')}}">Freelancer
                                                Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'dashboard') {
                                    echo 'active';
                                } ?>"><a href="{{ url('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="<?php if ($page == 'company-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('company-profile') }}">My
                                        Profile</a></li>

                                <li class="<?php if ($page == 'manage-projects') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('manage-projects') }}">Projects</a></li>
                                <li class="<?php if ($page == 'favourites') {
                                    echo 'active';
                                } ?>"><a href="{{ url('favourites') }}">Favourites</a>
                                </li>
                                <li class="<?php if ($page == 'membership-plans') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('membership-plans') }}">Membership</a></li>
                                <li class="<?php if ($page == 'milestones') {
                                    echo 'active';
                                } ?>"><a href="{{ url('milestones') }}">Milestones</a>
                                </li>
                                <li class="<?php if ($page == 'chats') {
                                    echo 'active';
                                } ?>"><a href="{{ url('chats') }}">Chats</a></li>
                                <li class="<?php if ($page == 'review') {
                                    echo 'active';
                                } ?>"><a href="{{ url('review') }}">Review</a></li>
                                <li class="<?php if ($page == 'deposit-funds') {
                                    echo 'active';
                                } ?>"><a href="{{ url('deposit-funds') }}">Payments</a>
                                </li>
                                <li class="<?php if ($page == 'verify-identity') {
                                    echo 'active';
                                } ?>"><a href="{{ url('verify-identity') }}">Verify
                                        Identity</a></li>
                                <li class="<?php if ($page == 'profile-settings') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('profile-settings') }}">Settings</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details' || $page == 'freelancer-dashboard' || $page == 'freelancer-project-proposals' || $page == 'freelancer-favourites' || $page == 'freelancer-membership' || $page == 'freelancer-change-password' || $page == 'freelancer-chats' || $page == 'freelancer-review' || $page == 'freelancer-withdraw-money' || $page == 'freelancer-verify-identity' || $page == 'freelancer-profile-settings' || $page == 'freelancer-portfolio' || $page == 'freelancer-profile' || $page == 'developer-details' || $page == 'developer-profile') {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Freelancer <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details') {
                                    echo 'active';
                                } ?>">
                                    <a href="javascript:void(0);">Projects</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'project') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('project') }}">Projects</a></li>
                                        <li class="<?php if ($page == 'project-details') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('project-details') }}">Project Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'freelancer-dashboard') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-dashboard') }}">Dashboard</a></li>
                                <li class="<?php if ($page == 'developer-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('developer-profile') }}">My
                                        Profile</a></li>
                                <li class="<?php if ($page == 'freelancer-project-proposals') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-project-proposals') }}">Projects</a></li>
                                <li class="<?php if ($page == 'freelancer-favourites') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-favourites') }}">Favourites</a></li>
                                <li class="<?php if ($page == 'freelancer-membership') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-membership') }}">Membership</a></li>
                                <li class="<?php if ($page == 'freelancer-change-password') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-change-password') }}">Change Password</a></li>
                                <li class="<?php if ($page == 'freelancer-chats') {
                                    echo 'active';
                                } ?>"><a href="{{ url('freelancer-chats') }}">Chats</a>
                                </li>
                                <li class="<?php if ($page == 'freelancer-review') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-review') }}">Review</a></li>
                                <li class="<?php if ($page == 'freelancer-withdraw-money') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-withdraw-money') }}">Payments</a></li>
                                <li class="<?php if ($page == 'freelancer-verify-identity') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-verify-identity') }}">Verify Identity</a></li>
                                <li class="<?php if ($page == 'freelancer-profile-settings') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-profile-settings') }}">Settings</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'about' || $page == 'blank-page' || $page == '404-page' || $page == 'user-account-details' || $page == 'login' || $page == 'register' || $page == 'forgot-password' || $page == 'change-passwords' || $page == 'onboard-screen' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'about') {
                                    echo 'active';
                                } ?>"><a href="{{ url('about') }}">About us</a></li>
                                <li class="<?php if ($page == 'blank-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blank-page') }}">Starter Page</a>
                                </li>
                                <li class="<?php if ($page == '404-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('404-page') }}">404 Page</a></li>
                                <li class="<?php if ($page == 'login') {
                                    echo 'active';
                                } ?>"><a href="{{ url('login') }}">Login</a></li>
                                <li class="<?php if ($page == 'register') {
                                    echo 'active';
                                } ?>"><a href="{{ url('register') }}">Register</a></li>
                                <li class="<?php if ($page == 'onboard-screen') {
                                    echo 'active';
                                } ?>"><a href="{{ url('onboard-screen') }}">Onboard
                                        Screen</a></li>
                                <li class="<?php if ($page == 'forgot-password') {
                                    echo 'active';
                                } ?>"><a href="{{ url('forgot-password') }}">Forgot
                                        Password</a></li>
                                <li class="<?php if ($page == 'change-passwords') {
                                    echo 'active';
                                } ?>"><a href="{{ url('change-passwords') }}">Change
                                        Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu  <?php if ($page == 'blog-list' || $page == 'blog-grid' || $page == 'blog-details') {
                            echo 'active';
                        } ?>">
                            <a href="javascript:void(0);">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'blog-list') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-list') }}">Blog List</a>
                                </li>
                                <li class="<?php if ($page == 'blog-grid') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-grid') }}">Blog Grid</a>
                                </li>
                                <li class="<?php if ($page == 'blog-details') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-details') }}">Blog
                                        Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ 'admin/index_admin' }}" target="_blank">Admin</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">
                    <li><a href="{{ url('register') }}" class="log-btn">Register</a></li>
                    <li><a href="{{ url('login') }}" class="log-btn"> Login</a></li>
                    <li class="searchbar">
                        <a href="javascript:void(0);" class="reg-btn"><i class="feather-search"></i></a>
                        <div class="togglesearch">
                            <form action="javascript:void(0);">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <button type="submit" class="btn">Search</button>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="reg-btn"><i class="feather-shopping-cart"></i></a>
                    </li>
                    <li><a href="{{ url('post-project') }}" class="login-btn"><i class="feather-plus me-1"></i>Post
                            a Project </a></li>
                </ul>
            </nav>
        </div>

    </header>
    <!-- /Header -->
@endif

@if (Route::is([
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
        'ongoing-projects',
        'completed-projects',
        'pending-projects',
        'cancelled-projects',
        'expired-projects',
        'invited-favourites',
        'delete-account',
        'change-password',
        'project-employer-view-proposal'
    ]))
    <!-- Header -->
<header class="header header-bg">
        <div class="container">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="{{ url('index') }}" class="navbar-brand logo">
                        <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{ url('index') }}" class="menu-logo">
                            <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="has-submenu <?php if ($page == 'pagee' || $page == 'index-two' || $page == 'index-three' || $page == 'index-four' || $page == 'index-five') {
                            echo 'active';
                        } ?>">

                            <a href="{{ url('index') }}">Home <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'pagee') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index') }}">Home</a></li>
                                <li class="<?php if ($page == 'index-two') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-two') }}">Home 2</a></li>
                                <li class="<?php if ($page == 'index-three') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-three') }}">Home 3</a></li>
                                <li class="<?php if ($page == 'index-four') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-four') }}">Home 4</a></li>
                                <li class="<?php if ($page == 'index-five') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-five') }}">Home 5</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'dashboard' || $page == 'manage-projects' || $page == 'developer' || $page == 'developer-details' || $page == 'favourites' || $page == 'membership-plans' || $page == 'milestones' || $page == 'chats' || $page == 'review' || $page == 'deposit-funds' || $page == 'verify-identity' || $page == 'profile-setting' || $page == 'company-profile'  || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list'  || $page == 'profile-settings' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Employers <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'project-employer-view-proposal' || $page == 'developer' || $page == 'developer-details' || $page == 'company-gallery' || $page == 'change-password' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list') {
                                    echo 'active';
                                } ?>">

                                    <a href="javascript:void(0);">Freelancer</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'developer') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('developer') }}">Freelancer</a>
                                        </li>
                                        <li class="<?php if ($page == 'developer-details') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('developer-details') }}">Freelancer Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'dashboard') {
                                    echo 'active';
                                } ?>"><a href="{{ url('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="<?php if ($page == 'company-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('company-profile') }}">My
                                        Profile</a>
                                </li>

                                <li class="<?php if ($page == 'manage-projects' || $page == 'project-employer-view-proposal') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('manage-projects') }}">Projects</a>
                                </li>
                                <li class="<?php if ($page == 'favourites') {
                                    echo 'active';
                                } ?>"><a href="{{ url('favourites') }}">Favourites</a>
                                </li>
                                <li class="<?php if ($page == 'membership-plans') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('membership-plans') }}">Membership</a>
                                </li>
                                <li class="<?php if ($page == 'milestones') {
                                    echo 'active';
                                } ?>"><a href="{{ url('milestones') }}">Milestones</a>
                                </li>
                                <li class="<?php if ($page == 'chats') {
                                    echo 'active';
                                } ?>"><a href="{{ url('chats') }}">Chats</a></li>
                                <li class="<?php if ($page == 'review') {
                                    echo 'active';
                                } ?>"><a href="{{ url('review') }}">Review</a></li>
                                <li class="<?php if ($page == 'deposit-funds') {
                                    echo 'active';
                                } ?>"><a href="{{ url('deposit-funds') }}">Payments</a>
                                </li>
                                <li class="<?php if ($page == 'verify-identity') {
                                    echo 'active';
                                } ?>"><a href="{{ url('verify-identity') }}">Verify
                                        Identity</a></li>
                                <li class="<?php if ($page == 'profile-settings') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('profile-settings') }}">Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details' || $page == 'freelancer-dashboard' || $page == 'freelancer-project-proposals' || $page == 'freelancer-favourites' || $page == 'freelancer-membership' || $page == 'freelancer-change-password' || $page == 'freelancer-chats' || $page == 'freelancer-review' || $page == 'freelancer-withdraw-money' || $page == 'freelancer-verify-identity' || $page == 'freelancer-profile-settings' || $page == 'freelancer-portfolio' || $page == 'freelancer-profile' || $page == 'developer-profile') {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Freelancer <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details') {
                                    echo 'active';
                                } ?>">
                                    <a href="javascript:void(0);">Projects</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'project') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('project') }}">Projects</a>
                                        </li>
                                        <li class="<?php if ($page == 'project-details') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('project-details') }}">Project
                                                Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'freelancer-dashboard') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-dashboard') }}">Dashboard</a></li>
                                <li class="<?php if ($page == 'developer-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('developer-profile') }}">My
                                        Profile</a></li>
                                <li class="<?php if ($page == 'freelancer-project-proposals') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-project-proposals') }}">Projects</a></li>
                                <li class="<?php if ($page == 'freelancer-favourites') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-favourites') }}">Favourites</a></li>
                                <li class="<?php if ($page == 'freelancer-membership') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-membership') }}">Membership</a></li>
                                <li class="<?php if ($page == 'freelancer-change-password') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-change-password') }}">Change Password</a></li>
                                <li class="<?php if ($page == 'freelancer-chats') {
                                    echo 'active';
                                } ?>"><a href="{{ url('freelancer-chats') }}">Chats</a>
                                </li>
                                <li class="<?php if ($page == 'freelancer-review') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-review') }}">Review</a>
                                </li>
                                <li class="<?php if ($page == 'freelancer-withdraw-money') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-withdraw-money') }}">Payments</a></li>
                                <li class="<?php if ($page == 'freelancer-verify-identity') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-verify-identity') }}">Verify Identity</a></li>
                                <li class="<?php if ($page == 'freelancer-profile-settings') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-profile-settings') }}">Settings</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'about' || $page == 'blank-page' || $page == '404-page' || $page == 'user-account-details' || $page == 'login' || $page == 'register' || $page == 'forgot-password' || $page == 'change-passwords' || $page == 'onboard-screen' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'about') {
                                    echo 'active';
                                } ?>"><a href="{{ url('about') }}">About us</a></li>
                                <li class="<?php if ($page == 'blank-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blank-page') }}">Starter Page</a>
                                </li>
                                <li class="<?php if ($page == '404-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('404-page') }}">404 Page</a></li>
                                <li class="<?php if ($page == 'login') {
                                    echo 'active';
                                } ?>"><a href="{{ url('login') }}">Login</a></li>
                                <li class="<?php if ($page == 'register') {
                                    echo 'active';
                                } ?>"><a href="{{ url('register') }}">Register</a></li>
                                <li class="<?php if ($page == 'onboard-screen') {
                                    echo 'active';
                                } ?>"><a href="{{ url('onboard-screen') }}">Onboard
                                        Screen</a></li>
                                <li class="<?php if ($page == 'forgot-password') {
                                    echo 'active';
                                } ?>"><a href="{{ url('forgot-password') }}">Forgot
                                        Password</a></li>
                                <li class="<?php if ($page == 'change-passwords') {
                                    echo 'active';
                                } ?>"><a href="{{ url('change-passwords') }}">Change
                                        Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu  <?php if ($page == 'blog-list' || $page == 'blog-grid' || $page == 'blog-details') {
                            echo 'active';
                        } ?>">
                            <a href="javascript:void(0);">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'blog-list') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-list') }}">Blog List</a>
                                </li>
                                <li class="<?php if ($page == 'blog-grid') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-grid') }}">Blog Grid</a>
                                </li>
                                <li class="<?php if ($page == 'blog-details') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-details') }}">Blog
                                        Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('admin/index_admin') }}" target="_blank">Admin</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">
                    <li><a href="{{ url('chats') }}"><img
                                src="{{ URL::asset('/assets/img/icon/message-chat-icon.svg') }}"
                                alt="Img"></a></li>
                    <li class="dropdown">
                        <a data-bs-toggle="dropdown" href="javascript:void(0);"><img
                                src="{{ URL::asset('/assets/img/icon/notification-bell-icon.svg') }}"
                                alt="Img"></a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <div class="notification-title">Notifications<span class="msg-count-badge">2</span>
                                </div>
                                <a href="javascript:void(0)" class="clear-noti d-flex align-items-center">Mark all
                                    as
                                    read <i class="fe fe-check-circle"></i></a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="{{ url('notification') }}">
                                            <div class="d-flex">
                                                <span class="avatar avatar-md active">
                                                    <img class="avatar-img rounded-circle" alt="avatar-img"
                                                        src="{{ URL::asset('/assets/img/avatar/avatar-2.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <span class="noti-title">Edward Curr</span>
                                                    <p class="noti-details">Notifications inform you when someone
                                                        likes, reacts</p>
                                                    <p class="noti-time"><span class="notification-time">Yesterday
                                                            at
                                                            11:42 PM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{ url('notification') }}">
                                            <div class="d-flex">
                                                <span class="avatar avatar-md active">
                                                    <img class="avatar-img rounded-circle" alt="avatar-img"
                                                        src="{{ URL::asset('/assets/img/avatar/avatar-1.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <span class="noti-title">Maria Hill</span>
                                                    <p class="noti-details"> Notifications alert you to new messages
                                                        in your Kofejob inbox.</p>
                                                    <div class="notification-btn">
                                                        <span class="btn btn-primary">Accept</span>
                                                        <span class="btn btn-outline-primary">Reject</span>
                                                    </div>
                                                    <p class="noti-time"><span class="notification-time">Today at
                                                            9:42 AM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="notification-message">
                                        <a href="{{ url('notification') }}">
                                            <div class="d-flex">
                                                <span class="avatar avatar-md">
                                                    <img class="avatar-img rounded-circle" alt="avatar-img"
                                                        src="{{ URL::asset('/assets/img/avatar/avatar-3.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <span class="noti-title">Maria Hill</span>
                                                    <p class="noti-details"> Notifications alert you to new messages
                                                        in your Kofejob inbox.</p>
                                                    <p class="noti-time"><span class="notification-time">Yesterday
                                                            at 5:42 PM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{ url('notification') }}">
                                            <div class="d-flex">
                                                <span class="avatar avatar-md">
                                                    <img class="avatar-img rounded-circle" alt="avatar-img"
                                                        src="{{ URL::asset('/assets/img/avatar/avatar-4.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <span class="noti-title">Edward Curr</span>
                                                    <p class="noti-details">Notifications inform you when someone
                                                        likes, reacts</p>
                                                    <p class="noti-time"><span class="notification-time">Last
                                                            Wednesday at 11:15 AM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer text-center">
                                <a href="{{ url('notification') }}">View All Notification</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{ url('post-project') }}" class="login-btn">Post a Project <i
                                class="feather-plus ms-1"></i></a></li>
                    <li class="nav-item dropdown account-item">
                        <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img src="{{ URL::asset('/assets/img/user/table-avatar-03.jpg') }}"
                                    alt="Img">
                            </span>
                            <span>Walter Griffin</span>
                        </a>
                        <div class="dropdown-menu emp">
                            <div class="drop-head">
                                <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                                    <span class="user-img">
                                        <img src="{{ URL::asset('/assets/img/user/table-avatar-03.jpg') }}"
                                            alt="Img">
                                    </span>
                                    <div>
                                        <span>Walter Griffin</span>
                                        <p>info@waltergriffin.com</p>
                                    </div>

                                </a>
                            </div>
                            <a class="dropdown-item" href="{{ url('company-profile') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--01.svg') }}"
                                    alt="Img"> My Profile</a>
                            <a class="dropdown-item" href="{{ url('manage-projects') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--02.svg') }}"
                                    alt="Img"> My Projects</a>
                            <a class="dropdown-item" href="{{ url('favourites') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--03.svg') }}"
                                    alt="Img">My Subscription</a>
                            <a class="dropdown-item" href="{{ url('deposit-funds') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--04.svg') }}"
                                    alt="Img">My Statement</a>
                            <a class="dropdown-item" href="{{ url('chats') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--05.svg') }}"
                                    alt="Img"> Message</a>
                            <a class="dropdown-item" href="{{ url('profile-settings') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--06.svg') }}"
                                    alt="Img"> Profile Settings</a>
                            <a class="dropdown-item" href="{{ url('login') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--07.svg') }}"
                                    alt="Img"> Logout</a>
                        </div>
                    </li>

                </ul>
            </nav>
        </div>

    </header>
    <!-- /Header -->
@endif

@if (Route::is([
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
        

    ]))
    <!-- Header -->
<header class="header header-bg">
        <div class="container">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="{{ url('index') }}" class="navbar-brand logo">
                        <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{ url('index') }}" class="menu-logo">
                            <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid"
                                alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="has-submenu <?php if ($page == 'pagee' || $page == 'index-two' || $page == 'index-three' || $page == 'index-four' || $page == 'index-five') {
                            echo 'active';
                        } ?>">

                            <a href="{{ url('index') }}">Home <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'pagee') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index') }}">Home</a></li>
                                <li class="<?php if ($page == 'index-two') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-two') }}">Home 2</a></li>
                                <li class="<?php if ($page == 'index-three') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-three') }}">Home 3</a>
                                </li>
                                <li class="<?php if ($page == 'index-four') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-four') }}">Home 4</a>
                                </li>
                                <li class="<?php if ($page == 'index-five') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-five') }}">Home 5</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'dashboard' || $page == 'manage-projects' || $page == 'developer' || $page == 'developer-details' || $page == 'favourites' || $page == 'membership-plans' || $page == 'milestones' || $page == 'chats' || $page == 'review' || $page == 'deposit-funds' || $page == 'verify-identity' || $page == 'profile-setting' || $page == 'company-profile'  || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list'  || $page == 'profile-settings' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Employers <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'developer' || $page == 'developer-details' || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list') {
                                    echo 'active';
                                } ?>">

                                    <a href="javascript:void(0);">Freelancer</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'developer') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('developer') }}">Freelancer</a>
                                        </li>
                                        <li class="<?php if ($page == 'developer-details') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('developer-details') }}">Freelancer Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'dashboard') {
                                    echo 'active';
                                } ?>"><a href="{{ url('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="<?php if ($page == 'company-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('company-profile') }}">My
                                        Profile</a>
                                </li>

                                <li class="<?php if ($page == 'manage-projects') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('manage-projects') }}">Projects</a>
                                </li>
                                <li class="<?php if ($page == 'favourites') {
                                    echo 'active';
                                } ?>"><a href="{{ url('favourites') }}">Favourites</a>
                                </li>
                                <li class="<?php if ($page == 'membership-plans') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('membership-plans') }}">Membership</a>
                                </li>
                                <li class="<?php if ($page == 'milestones') {
                                    echo 'active';
                                } ?>"><a href="{{ url('milestones') }}">Milestones</a>
                                </li>
                                <li class="<?php if ($page == 'chats') {
                                    echo 'active';
                                } ?>"><a href="{{ url('chats') }}">Chats</a></li>
                                <li class="<?php if ($page == 'review') {
                                    echo 'active';
                                } ?>"><a href="{{ url('review') }}">Review</a></li>
                                <li class="<?php if ($page == 'deposit-funds') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('deposit-funds') }}">Payments</a></li>
                                <li class="<?php if ($page == 'verify-identity') {
                                    echo 'active';
                                } ?>"><a href="{{ url('verify-identity') }}">Verify
                                        Identity</a></li>
                                <li class="<?php if ($page == 'profile-settings') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('profile-settings') }}">Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details' || $page == 'freelancer-dashboard' || $page == 'freelancer-project-proposals' || $page == 'freelancer-favourites' || $page == 'freelancer-membership' || $page == 'freelancer-change-password' || $page == 'freelancer-chats' || $page == 'freelancer-review' || $page == 'freelancer-withdraw-money' || $page == 'freelancer-verify-identity' || $page == 'freelancer-profile-settings' || $page == 'freelancer-portfolio' || $page == 'freelancer-profile' || $page == 'developer-profile' || $page == 'freelancer-payout') {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Freelancer <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details') {
                                    echo 'active';
                                } ?>">
                                    <a href="javascript:void(0);">Projects</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'project') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('project') }}">Projects</a>
                                        </li>
                                        <li class="<?php if ($page == 'project-details') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('project-details') }}">Project
                                                Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'freelancer-dashboard') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-dashboard') }}">Dashboard</a></li>
                                <li class="<?php if ($page == 'developer-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('developer-profile') }}">My
                                        Profile</a></li>
                                <li class="<?php if ($page == 'freelancer-project-proposals') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-project-proposals') }}">Projects</a></li>
                                <li class="<?php if ($page == 'freelancer-favourites') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-favourites') }}">Favourites</a></li>
                                <li class="<?php if ($page == 'freelancer-membership') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-membership') }}">Membership</a></li>
                                <li class="<?php if ($page == 'freelancer-change-password') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-change-password') }}">Change Password</a></li>
                                <li class="<?php if ($page == 'freelancer-chats') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-chats') }}">Chats</a></li>
                                <li class="<?php if ($page == 'freelancer-review') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-review') }}">Review</a>
                                </li>
                                <li class="<?php if ($page == 'freelancer-withdraw-money') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-withdraw-money') }}">Payments</a></li>
                                <li class="<?php if ($page == 'freelancer-verify-identity') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-verify-identity') }}">Verify Identity</a></li>
                                <li class="<?php if ($page == 'freelancer-profile-settings') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-profile-settings') }}">Settings</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'about' || $page == 'blank-page' || $page == '404-page' || $page == 'user-account-details' || $page == 'login' || $page == 'register' || $page == 'forgot-password' || $page == 'change-passwords' || $page == 'onboard-screen' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'about') {
                                    echo 'active';
                                } ?>"><a href="{{ url('about') }}">About us</a></li>
                                <li class="<?php if ($page == 'blank-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blank-page') }}">Starter
                                        Page</a>
                                </li>
                                <li class="<?php if ($page == '404-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('404-page') }}">404 Page</a>
                                </li>
                                <li class="<?php if ($page == 'login') {
                                    echo 'active';
                                } ?>"><a href="{{ url('login') }}">Login</a></li>
                                <li class="<?php if ($page == 'register') {
                                    echo 'active';
                                } ?>"><a href="{{ url('register') }}">Register</a>
                                </li>
                                <li class="<?php if ($page == 'onboard-screen') {
                                    echo 'active';
                                } ?>"><a href="{{ url('onboard-screen') }}">Onboard
                                        Screen</a></li>
                                <li class="<?php if ($page == 'forgot-password') {
                                    echo 'active';
                                } ?>"><a href="{{ url('forgot-password') }}">Forgot
                                        Password</a></li>
                                <li class="<?php if ($page == 'change-passwords') {
                                    echo 'active';
                                } ?>"><a href="{{ url('change-passwords') }}">Change
                                        Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu  <?php if ($page == 'blog-list' || $page == 'blog-grid' || $page == 'blog-details') {
                            echo 'active';
                        } ?>">
                            <a href="javascript:void(0);">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'blog-list') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-list') }}">Blog List</a>
                                </li>
                                <li class="<?php if ($page == 'blog-grid') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-grid') }}">Blog Grid</a>
                                </li>
                                <li class="<?php if ($page == 'blog-details') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-details') }}">Blog
                                        Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('admin/index_admin') }}" target="_blank">Admin</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">
                    <li><a href="{{ url('freelancer-chats') }}"><img
                                src="{{ URL::asset('/assets/img/icon/message-chat-icon.svg') }}"
                                alt="Img"></a></li>
                    <li class="dropdown">
                        <a data-bs-toggle="dropdown" href="javascript:void(0);"><img
                                src="{{ URL::asset('/assets/img/icon/notification-bell-icon.svg') }}"
                                alt="Img"></a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <div class="notification-title">Notifications<span class="msg-count-badge">2</span>
                                </div>
                                <a href="javascript:void(0)" class="clear-noti d-flex align-items-center">Mark all
                                    as read <i class="fe fe-check-circle"></i></a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="{{ url('notification') }}">
                                            <div class="d-flex">
                                                <span class="avatar avatar-md active">
                                                    <img class="avatar-img rounded-circle" alt="avatar-img"
                                                        src="{{ URL::asset('/assets/img/avatar/avatar-2.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <span class="noti-title">Edward Curr</span>
                                                    <p class="noti-details">Notifications inform you when someone
                                                        likes, reacts</p>
                                                    <p class="noti-time"><span class="notification-time">Yesterday
                                                            at 11:42 PM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{ url('notification') }}">
                                            <div class="d-flex">
                                                <span class="avatar avatar-md active">
                                                    <img class="avatar-img rounded-circle" alt="avatar-img"
                                                        src="{{ URL::asset('/assets/img/avatar/avatar-1.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <span class="noti-title">Maria Hill</span>
                                                    <p class="noti-details"> Notifications alert you to new messages
                                                        in your Kofejob inbox.</p>
                                                    <div class="notification-btn">
                                                        <span class="btn btn-primary">Accept</span>
                                                        <span class="btn btn-outline-primary">Reject</span>
                                                    </div>
                                                    <p class="noti-time"><span class="notification-time">Today at
                                                            9:42 AM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="notification-message">
                                        <a href="{{ url('notification') }}">
                                            <div class="d-flex">
                                                <span class="avatar avatar-md">
                                                    <img class="avatar-img rounded-circle" alt="avatar-img"
                                                        src="{{ URL::asset('/assets/img/avatar/avatar-3.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <span class="noti-title">Maria Hill</span>
                                                    <p class="noti-details"> Notifications alert you to new messages
                                                        in your Kofejob inbox.</p>
                                                    <p class="noti-time"><span class="notification-time">Yesterday
                                                            at 5:42 PM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{ url('notification') }}">
                                            <div class="d-flex">
                                                <span class="avatar avatar-md">
                                                    <img class="avatar-img rounded-circle" alt="avatar-img"
                                                        src="{{ URL::asset('/assets/img/avatar/avatar-4.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <span class="noti-title">Edward Curr</span>
                                                    <p class="noti-details">Notifications inform you when someone
                                                        likes, reacts</p>
                                                    <p class="noti-time"><span class="notification-time">Last
                                                            Wednesday at 11:15 AM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer text-center">
                                <a href="{{ url('notification') }}">View All Notification</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{ url('post-project') }}" class="login-btn">Post a Project <i
                                class="feather-plus ms-1"></i></a></li>
                    <li class="nav-item dropdown account-item">
                        <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img src="{{ URL::asset('/assets/img/user/avatar-1.jpg') }}" alt="Img">
                            </span>
                            <span>Bruce Bush</span>
                        </a>
                        <div class="dropdown-menu emp">
                            <div class="drop-head">
                                <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                                    <span class="user-img">
                                        <img src="{{ URL::asset('/assets/img/user/avatar-1.jpg') }}"
                                            alt="Img">
                                    </span>
                                    <div>
                                        <span>Bruce Bush</span>
                                        <p>info@brucebush.com</p>
                                    </div>
                                </a>
                            </div>
                            <a class="dropdown-item" href="{{ url('developer-profile') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--01.svg') }}"
                                    alt="Img"> My Profile</a>
                            <a class="dropdown-item" href="{{ url('freelancer-project-proposals') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--02.svg') }}"
                                    alt="Img"> My Projects</a>
                            <a class="dropdown-item" href="{{ url('freelancer-favourites') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--03.svg') }}"
                                    alt="Img">My Subscription</a>
                            <a class="dropdown-item" href="{{ url('freelancer-statement') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--04.svg') }}"
                                    alt="Img">My Statement</a>
                            <a class="dropdown-item" href="{{ url('freelancer-chats') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--05.svg') }}"
                                    alt="Img"> Message</a>
                            <a class="dropdown-item" href="{{ url('freelancer-profile-settings') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--06.svg') }}"
                                    alt="Img"> Profile Settings</a>
                            <a class="dropdown-item" href="{{ url('login') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--07.svg') }}"
                                    alt="Img"> Logout</a>
                        </div>
                    </li>

                </ul>
            </nav>
        </div>

    </header>
    <!-- /Header -->
@endif

@if (Route::is(['blank-page']))
    <!-- Header -->
    <header class="header header-bg">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{ url('index') }}" class="navbar-brand logo">
                    <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{ url('index') }}" class="menu-logo">
                        <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    <li class="has-submenu <?php if ($page == 'pagee' || $page == 'index-two' || $page == 'index-three' || $page == 'index-four' || $page == 'index-five') {
                        echo 'active';
                    } ?>">

                        <a href="{{ url('index') }}">Home <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="<?php if ($page == 'pagee') {
                                echo 'active';
                            } ?>"><a href="{{ url('index') }}">Home</a></li>
                            <li class="<?php if ($page == 'index-two') {
                                echo 'active';
                            } ?>"><a href="{{ url('index-two') }}">Home 2</a></li>
                            <li class="<?php if ($page == 'index-three') {
                                echo 'active';
                            } ?>"><a href="{{ url('index-three') }}">Home 3</a></li>
                            <li class="<?php if ($page == 'index-four') {
                                echo 'active';
                            } ?>"><a href="{{ url('index-four') }}">Home 4</a></li>
                            <li class="<?php if ($page == 'index-five') {
                                echo 'active';
                            } ?>"><a href="{{ url('index-five') }}">Home 5</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu <?php if ($page == 'dashboard' || $page == 'manage-projects' || $page == 'developer' || $page == 'developer-details' || $page == 'favourites' || $page == 'membership-plans' || $page == 'milestones' || $page == 'chats' || $page == 'review' || $page == 'deposit-funds' || $page == 'verify-identity' || $page == 'profile-setting' || $page == 'company-profile'  || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list'  || $page == 'profile-settings' ) {
                        echo 'active';
                    } ?>">

                        <a href="javascript:void(0);">For Employers <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu <?php if ($page == 'developer' || $page == 'developer-details' || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list') {
                                echo 'active';
                            } ?>">

                                <a href="javascript:void(0);">Freelancer</a>
                                <ul class="submenu">
                                    <li class="<?php if ($page == 'developer') {
                                        echo 'active';
                                    } ?>"><a
                                            href="{{ url('developer') }}">Freelancer</a>
                                    </li>
                                    <li class="<?php if ($page == 'developer-details') {
                                        echo 'active';
                                    } ?>"><a
                                            href="{{ url('developer-details') }}">Freelancer Details</a></li>
                                </ul>
                            </li>
                            <li class="<?php if ($page == 'dashboard') {
                                echo 'active';
                            } ?>"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                            <li class="<?php if ($page == 'company-profile') {
                                echo 'active';
                            } ?>"><a href="{{ url('company-profile') }}">My
                                    Profile</a>
                            </li>

                            <li class="<?php if ($page == 'manage-projects') {
                                echo 'active';
                            } ?>"><a href="{{ url('manage-projects') }}">Projects</a>
                            </li>
                            <li class="<?php if ($page == 'favourites') {
                                echo 'active';
                            } ?>"><a href="{{ url('favourites') }}">Favourites</a>
                            </li>
                            <li class="<?php if ($page == 'membership-plans') {
                                echo 'active';
                            } ?>"><a
                                    href="{{ url('membership-plans') }}">Membership</a>
                            </li>
                            <li class="<?php if ($page == 'milestones') {
                                echo 'active';
                            } ?>"><a href="{{ url('milestones') }}">Milestones</a>
                            </li>
                            <li class="<?php if ($page == 'chats') {
                                echo 'active';
                            } ?>"><a href="{{ url('chats') }}">Chats</a></li>
                            <li class="<?php if ($page == 'review') {
                                echo 'active';
                            } ?>"><a href="{{ url('review') }}">Review</a></li>
                            <li class="<?php if ($page == 'deposit-funds') {
                                echo 'active';
                            } ?>"><a href="{{ url('deposit-funds') }}">Payments</a>
                            </li>
                            <li class="<?php if ($page == 'verify-identity') {
                                echo 'active';
                            } ?>"><a href="{{ url('verify-identity') }}">Verify
                                    Identity</a></li>
                            <li class="<?php if ($page == 'profile-settings') {
                                echo 'active';
                            } ?>"><a href="{{ url('profile-settings') }}">Settings</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details' || $page == 'freelancer-dashboard' || $page == 'freelancer-project-proposals' || $page == 'freelancer-favourites' || $page == 'freelancer-membership' || $page == 'freelancer-change-password' || $page == 'freelancer-chats' || $page == 'freelancer-review' || $page == 'freelancer-withdraw-money' || $page == 'freelancer-verify-identity' || $page == 'freelancer-profile-settings' || $page == 'freelancer-portfolio' || $page == 'freelancer-profile' || $page == 'developer-profile') {
                        echo 'active';
                    } ?>">

                        <a href="javascript:void(0);">For Freelancer <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details') {
                                echo 'active';
                            } ?>">
                                <a href="javascript:void(0);">Projects</a>
                                <ul class="submenu">
                                    <li class="<?php if ($page == 'project') {
                                        echo 'active';
                                    } ?>"><a href="{{ url('project') }}">Projects</a>
                                    </li>
                                    <li class="<?php if ($page == 'project-details') {
                                        echo 'active';
                                    } ?>"><a
                                            href="{{ url('project-details') }}">Project
                                            Details</a></li>
                                </ul>
                            </li>
                            <li class="<?php if ($page == 'freelancer-dashboard') {
                                echo 'active';
                            } ?>"><a
                                    href="{{ url('freelancer-dashboard') }}">Dashboard</a></li>
                            <li class="<?php if ($page == 'developer-profile') {
                                echo 'active';
                            } ?>"><a href="{{ url('developer-profile') }}">My
                                    Profile</a></li>
                            <li class="<?php if ($page == 'freelancer-project-proposals') {
                                echo 'active';
                            } ?>"><a
                                    href="{{ url('freelancer-project-proposals') }}">Projects</a></li>
                            <li class="<?php if ($page == 'freelancer-favourites') {
                                echo 'active';
                            } ?>"><a
                                    href="{{ url('freelancer-favourites') }}">Favourites</a></li>
                            <li class="<?php if ($page == 'freelancer-membership') {
                                echo 'active';
                            } ?>"><a
                                    href="{{ url('freelancer-membership') }}">Membership</a></li>
                            <li class="<?php if ($page == 'freelancer-change-password') {
                                echo 'active';
                            } ?>"><a
                                    href="{{ url('freelancer-change-password') }}">Change Password</a></li>
                            <li class="<?php if ($page == 'freelancer-chats') {
                                echo 'active';
                            } ?>"><a href="{{ url('freelancer-chats') }}">Chats</a>
                            </li>
                            <li class="<?php if ($page == 'freelancer-review') {
                                echo 'active';
                            } ?>"><a href="{{ url('freelancer-review') }}">Review</a>
                            </li>
                            <li class="<?php if ($page == 'freelancer-withdraw-money') {
                                echo 'active';
                            } ?>"><a
                                    href="{{ url('freelancer-withdraw-money') }}">Payments</a></li>
                            <li class="<?php if ($page == 'freelancer-verify-identity') {
                                echo 'active';
                            } ?>"><a
                                    href="{{ url('freelancer-verify-identity') }}">Verify Identity</a></li>
                            <li class="<?php if ($page == 'freelancer-profile-settings') {
                                echo 'active';
                            } ?>"><a
                                    href="{{ url('freelancer-profile-settings') }}">Settings</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu <?php if ($page == 'about' || $page == 'blank-page' || $page == '404-page' || $page == 'user-account-details' || $page == 'login' || $page == 'register' || $page == 'forgot-password' || $page == 'change-passwords' || $page == 'onboard-screen' ) {
                        echo 'active';
                    } ?>">

                        <a href="javascript:void(0);">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="<?php if ($page == 'about') {
                                echo 'active';
                            } ?>"><a href="{{ url('about') }}">About us</a></li>
                            <li class="<?php if ($page == 'blank-page') {
                                echo 'active';
                            } ?>"><a href="{{ url('blank-page') }}">Starter Page</a>
                            </li>
                            <li class="<?php if ($page == '404-page') {
                                echo 'active';
                            } ?>"><a href="{{ url('404-page') }}">404 Page</a></li>
                            <li class="<?php if ($page == 'login') {
                                echo 'active';
                            } ?>"><a href="{{ url('login') }}">Login</a></li>
                            <li class="<?php if ($page == 'register') {
                                echo 'active';
                            } ?>"><a href="{{ url('register') }}">Register</a></li>
                            <li class="<?php if ($page == 'onboard-screen') {
                                echo 'active';
                            } ?>"><a href="{{ url('onboard-screen') }}">Onboard
                                    Screen</a></li>
                            <li class="<?php if ($page == 'forgot-password') {
                                echo 'active';
                            } ?>"><a href="{{ url('forgot-password') }}">Forgot
                                    Password</a></li>
                            <li class="<?php if ($page == 'change-passwords') {
                                echo 'active';
                            } ?>"><a href="{{ url('change-passwords') }}">Change
                                    Password</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu  <?php if ($page == 'blog-list' || $page == 'blog-grid' || $page == 'blog-details') {
                        echo 'active';
                    } ?>">
                        <a href="javascript:void(0);">Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="<?php if ($page == 'blog-list') {
                                echo 'active';
                            } ?>"><a href="{{ url('blog-list') }}">Blog List</a></li>
                            <li class="<?php if ($page == 'blog-grid') {
                                echo 'active';
                            } ?>"><a href="{{ url('blog-grid') }}">Blog Grid</a></li>
                            <li class="<?php if ($page == 'blog-details') {
                                echo 'active';
                            } ?>"><a href="{{ url('blog-details') }}">Blog Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('admin/index_admin') }}" target="_blank">Admin</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item dropdown account-item">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img src="{{ URL::asset('/assets/img/user/avatar-1.jpg') }}" alt="Img">
                        </span>
                        <span>George</span>
                    </a>
                    <div class="dropdown-menu emp">
                        <div class="drop-head">Account Details</div>
                        <a class="dropdown-item" href="{{ url('freelancer-profile') }}"><i
                                class="material-icons">verified_user</i> View profile</a>
                        <div class="drop-head">Projects Settings</div>
                        <a class="dropdown-item" href="{{ url('freelancer-project-proposals') }}"><i
                                class="material-icons">business_center</i> Projects</a>
                        <a class="dropdown-item" href="{{ url('freelancer-bookmarks') }}"><i
                                class="material-icons">local_play</i> Bookmarks</a>
                        <a class="dropdown-item" href="{{ url('freelancer-review') }}"><i
                                class="material-icons">pie_chart</i> Reviews</a>
                        <div class="drop-head">Financial Settings</div>
                        <a class="dropdown-item bal" href="javascript:void(0);">Balance <span class="amt">₹0.00
                                INR</span></a>
                        <a class="dropdown-item" href="{{ url('freelancer-withdraw-money') }}"><i
                                class="material-icons">wifi_tethering</i> Withdraw funds</a>
                        <div class="drop-head">Account Details</div>
                        <a class="dropdown-item" href="{{ url('freelancer-profile-settings') }}"> <i
                                class="material-icons">settings</i> Profile Settings</a>
                        <a class="dropdown-item" href="{{ url('index') }}"><i
                                class="material-icons">power_settings_new</i> Logout</a>
                    </div>
                </li>
                <li><a href="{{ url('post-project') }}" class="login-btn">Post a Project </a></li>
            </ul>
        </nav>
    </header>
    <!-- /Header -->
@endif

@if (Route::is(['change-passwords']))
    <header class="header header-bg">
        <div class="container">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="{{ url('index') }}" class="navbar-brand logo">
                        <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{ url('index') }}" class="menu-logo">
                            <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid"
                                alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="has-submenu <?php if ($page == 'pagee' || $page == 'index-two' || $page == 'index-three' || $page == 'index-four' || $page == 'index-five') {
                            echo 'active';
                        } ?>">

                            <a href="{{ url('index') }}">Home <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'pagee') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index') }}">Home</a></li>
                                <li class="<?php if ($page == 'index-two') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-two') }}">Home 2</a></li>
                                <li class="<?php if ($page == 'index-three') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-three') }}">Home 3</a>
                                </li>
                                <li class="<?php if ($page == 'index-four') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-four') }}">Home 4</a>
                                </li>
                                <li class="<?php if ($page == 'index-five') {
                                    echo 'active';
                                } ?>"><a href="{{ url('index-five') }}">Home 5</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'dashboard' || $page == 'manage-projects' || $page == 'developer' || $page == 'developer-details' || $page == 'favourites' || $page == 'membership-plans' || $page == 'milestones' || $page == 'chats' || $page == 'review' || $page == 'deposit-funds' || $page == 'verify-identity' || $page == 'profile-setting' || $page == 'company-profile'  || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list'  || $page == 'profile-settings' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Employers <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'developer' || $page == 'developer-details' || $page == 'company-gallery' || $page == 'company-project' || $page == 'company-review' || $page == 'developer-list') {
                                    echo 'active';
                                } ?>">

                                    <a href="javascript:void(0);">Freelancer</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'developer') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('developer') }}">Freelancer</a>
                                        </li>
                                        <li class="<?php if ($page == 'developer-details') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('developer-details') }}">Freelancer Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'dashboard') {
                                    echo 'active';
                                } ?>"><a href="{{ url('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="<?php if ($page == 'company-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('company-profile') }}">My
                                        Profile</a>
                                </li>

                                <li class="<?php if ($page == 'manage-projects') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('manage-projects') }}">Projects</a>
                                </li>
                                <li class="<?php if ($page == 'favourites') {
                                    echo 'active';
                                } ?>"><a href="{{ url('favourites') }}">Favourites</a>
                                </li>
                                <li class="<?php if ($page == 'membership-plans') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('membership-plans') }}">Membership</a>
                                </li>
                                <li class="<?php if ($page == 'milestones') {
                                    echo 'active';
                                } ?>"><a href="{{ url('milestones') }}">Milestones</a>
                                </li>
                                <li class="<?php if ($page == 'chats') {
                                    echo 'active';
                                } ?>"><a href="{{ url('chats') }}">Chats</a></li>
                                <li class="<?php if ($page == 'review') {
                                    echo 'active';
                                } ?>"><a href="{{ url('review') }}">Review</a></li>
                                <li class="<?php if ($page == 'deposit-funds') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('deposit-funds') }}">Payments</a></li>
                                <li class="<?php if ($page == 'verify-identity') {
                                    echo 'active';
                                } ?>"><a href="{{ url('verify-identity') }}">Verify
                                        Identity</a></li>
                                <li class="<?php if ($page == 'profile-settings') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('profile-settings') }}">Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details' || $page == 'freelancer-dashboard' || $page == 'freelancer-project-proposals' || $page == 'freelancer-favourites' || $page == 'freelancer-membership' || $page == 'freelancer-change-password' || $page == 'freelancer-chats' || $page == 'freelancer-review' || $page == 'freelancer-withdraw-money' || $page == 'freelancer-verify-identity' || $page == 'freelancer-profile-settings' || $page == 'freelancer-portfolio' || $page == 'freelancer-profile' || $page == 'developer-profile') {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">For Freelancer <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu <?php if ($page == 'project' || $page == 'project-details') {
                                    echo 'active';
                                } ?>">
                                    <a href="javascript:void(0);">Projects</a>
                                    <ul class="submenu">
                                        <li class="<?php if ($page == 'project') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('project') }}">Projects</a>
                                        </li>
                                        <li class="<?php if ($page == 'project-details') {
                                            echo 'active';
                                        } ?>"><a
                                                href="{{ url('project-details') }}">Project
                                                Details</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == 'freelancer-dashboard') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-dashboard') }}">Dashboard</a></li>
                                <li class="<?php if ($page == 'developer-profile') {
                                    echo 'active';
                                } ?>"><a href="{{ url('developer-profile') }}">My
                                        Profile</a></li>
                                <li class="<?php if ($page == 'freelancer-project-proposals') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-project-proposals') }}">Projects</a></li>
                                <li class="<?php if ($page == 'freelancer-favourites') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-favourites') }}">Favourites</a></li>
                                <li class="<?php if ($page == 'freelancer-membership') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-membership') }}">Membership</a></li>
                                <li class="<?php if ($page == 'freelancer-change-password') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-change-password') }}">Change Password</a></li>
                                <li class="<?php if ($page == 'freelancer-chats') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-chats') }}">Chats</a></li>
                                <li class="<?php if ($page == 'freelancer-review') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-review') }}">Review</a>
                                </li>
                                <li class="<?php if ($page == 'freelancer-withdraw-money') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-withdraw-money') }}">Payments</a></li>
                                <li class="<?php if ($page == 'freelancer-verify-identity') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-verify-identity') }}">Verify Identity</a></li>
                                <li class="<?php if ($page == 'freelancer-profile-settings') {
                                    echo 'active';
                                } ?>"><a
                                        href="{{ url('freelancer-profile-settings') }}">Settings</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu <?php if ($page == 'about' || $page == 'blank-page' || $page == '404-page' || $page == 'user-account-details' || $page == 'login' || $page == 'register' || $page == 'forgot-password' || $page == 'change-passwords' || $page == 'onboard-screen' ) {
                            echo 'active';
                        } ?>">

                            <a href="javascript:void(0);">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'about') {
                                    echo 'active';
                                } ?>"><a href="{{ url('about') }}">About us</a></li>
                                <li class="<?php if ($page == 'blank-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blank-page') }}">Starter
                                        Page</a>
                                </li>
                                <li class="<?php if ($page == '404-page') {
                                    echo 'active';
                                } ?>"><a href="{{ url('404-page') }}">404 Page</a>
                                </li>
                                <li class="<?php if ($page == 'login') {
                                    echo 'active';
                                } ?>"><a href="{{ url('login') }}">Login</a></li>
                                <li class="<?php if ($page == 'register') {
                                    echo 'active';
                                } ?>"><a href="{{ url('register') }}">Register</a>
                                </li>
                                <li class="<?php if ($page == 'onboard-screen') {
                                    echo 'active';
                                } ?>"><a href="{{ url('onboard-screen') }}">Onboard
                                        Screen</a></li>
                                <li class="<?php if ($page == 'forgot-password') {
                                    echo 'active';
                                } ?>"><a href="{{ url('forgot-password') }}">Forgot
                                        Password</a></li>
                                <li class="<?php if ($page == 'change-passwords') {
                                    echo 'active';
                                } ?>"><a href="{{ url('change-passwords') }}">Change
                                        Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu  <?php if ($page == 'blog-list' || $page == 'blog-grid' || $page == 'blog-details') {
                            echo 'active';
                        } ?>">
                            <a href="javascript:void(0);">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="<?php if ($page == 'blog-list') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-list') }}">Blog List</a>
                                </li>
                                <li class="<?php if ($page == 'blog-grid') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-grid') }}">Blog Grid</a>
                                </li>
                                <li class="<?php if ($page == 'blog-details') {
                                    echo 'active';
                                } ?>"><a href="{{ url('blog-details') }}">Blog
                                        Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('admin/index_admin') }}" target="_blank">Admin</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">
                    <li><a href="{{ url('chats') }}"><img
                                src="{{ URL::asset('/assets/img/icon/message-chat-icon.svg') }}"
                                alt="Img"></a></li>
                    <li class="dropdown">
                        <a data-bs-toggle="dropdown" href="javascript:void(0);"><img
                                src="{{ URL::asset('/assets/img/icon/notification-bell-icon.svg') }}"
                                alt="Img"></a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <div class="notification-title">Notifications<span class="msg-count-badge">2</span>
                                </div>
                                <a href="javascript:void(0)" class="clear-noti d-flex align-items-center">Mark all
                                    as read <i class="fe fe-check-circle"></i></a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="{{ url('notification') }}">
                                            <div class="d-flex">
                                                <span class="avatar avatar-md active">
                                                    <img class="avatar-img rounded-circle" alt="avatar-img"
                                                        src="{{ URL::asset('/assets/img/avatar/avatar-2.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <span class="noti-title">Edward Curr</span>
                                                    <p class="noti-details">Notifications inform you when someone
                                                        likes, reacts</p>
                                                    <p class="noti-time"><span class="notification-time">Yesterday
                                                            at 11:42 PM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{ url('notification') }}">
                                            <div class="d-flex">
                                                <span class="avatar avatar-md active">
                                                    <img class="avatar-img rounded-circle" alt="avatar-img"
                                                        src="{{ URL::asset('/assets/img/avatar/avatar-1.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <span class="noti-title">Maria Hill</span>
                                                    <p class="noti-details"> Notifications alert you to new messages
                                                        in your Kofejob inbox.</p>
                                                    <div class="notification-btn">
                                                        <span class="btn btn-primary">Accept</span>
                                                        <span class="btn btn-outline-primary">Reject</span>
                                                    </div>
                                                    <p class="noti-time"><span class="notification-time">Today at
                                                            9:42 AM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="notification-message">
                                        <a href="{{ url('notification') }}">
                                            <div class="d-flex">
                                                <span class="avatar avatar-md">
                                                    <img class="avatar-img rounded-circle" alt="avatar-img"
                                                        src="{{ URL::asset('/assets/img/avatar/avatar-3.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <span class="noti-title">Maria Hill</span>
                                                    <p class="noti-details"> Notifications alert you to new messages
                                                        in your Kofejob inbox.</p>
                                                    <p class="noti-time"><span class="notification-time">Yesterday
                                                            at 5:42 PM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="{{ url('notification') }}">
                                            <div class="d-flex">
                                                <span class="avatar avatar-md">
                                                    <img class="avatar-img rounded-circle" alt="avatar-img"
                                                        src="{{ URL::asset('/assets/img/avatar/avatar-4.jpg') }}">
                                                </span>
                                                <div class="media-body">
                                                    <span class="noti-title">Edward Curr</span>
                                                    <p class="noti-details">Notifications inform you when someone
                                                        likes, reacts</p>
                                                    <p class="noti-time"><span class="notification-time">Last
                                                            Wednesday at 11:15 AM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer text-center">
                                <a href="{{ url('notification') }}">View All Notification</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{ url('post-project') }}" class="login-btn">Post a Project <i
                                class="feather-plus ms-1"></i></a></li>
                    <li class="nav-item dropdown account-item">
                        <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img src="{{ URL::asset('/assets/img/user/table-avatar-03.jpg') }}"
                                    alt="Img">
                            </span>
                            <span>Walter Griffin</span>
                        </a>
                        <div class="dropdown-menu emp">
                            <div class="drop-head">
                                <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                                    <span class="user-img">
                                        <img src="{{ URL::asset('/assets/img/user/table-avatar-03.jpg') }}"
                                            alt="Img">
                                    </span>
                                    <div>
                                        <span>Walter Griffin</span>
                                        <p>info@waltergriffin.com</p>
                                    </div>

                                </a>
                            </div>
                            <a class="dropdown-item" href="{{ url('company-profile') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--01.svg') }}"
                                    alt="Img"> My Profile</a>
                            <a class="dropdown-item" href="{{ url('manage-projects') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--02.svg') }}"
                                    alt="Img"> My Projects</a>
                            <a class="dropdown-item" href="{{ url('favourites') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--03.svg') }}"
                                    alt="Img">My Subscription</a>
                            <a class="dropdown-item" href="{{ url('deposit-funds') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--04.svg') }}"
                                    alt="Img">My Statement</a>
                            <a class="dropdown-item" href="{{ url('chats') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--05.svg') }}"
                                    alt="Img"> Message</a>
                            <a class="dropdown-item" href="{{ url('profile-settings') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--06.svg') }}"
                                    alt="Img"> Profile Settings</a>
                            <a class="dropdown-item" href="{{ url('login') }}"><img
                                    src="{{ URL::asset('/assets/img/icon/user-dropdown-icon--07.svg') }}"
                                    alt="Img"> Logout</a>
                        </div>
                    </li>

                </ul>
            </nav>
        </div>

    </header>
    <!-- /Header -->
@endif
