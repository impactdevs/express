@php
    $user = Auth::user();
  function linkParams(string $routeName) {
      $href = url($routeName);
      $linkClasses = Route::currentRouteName() === $routeName ? "nav-link active": "nav-link";
      return 'href="'.$href.'" class="'.$linkClasses.'"';
  }

  function subLink(string $routeName) {
      $href = url($routeName);
      $linkClasses = Route::currentRouteName() === $routeName ? "active": "";
      return 'href="'.$href.'" class="'.$linkClasses.'"';
  }
@endphp

<!-- Freelancer Navbar -->
<div class="col-xl-3 col-lg-4 theiaStickySidebar">
    <div class="settings-widget">
        <div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
            <a href="{{url('freelancer-profile')}}"><img alt="profile image" src="{{URL::asset('/assets/img/user/avatar-1.jpg')}}" class="avatar-lg rounded-circle"></a>
            <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                <h3 class="mb-0"><a href="{{url('freelancer-profile')}}">{{$user->name}}</a><img src="{{URL::asset('/assets/img/icon/verified-badge.svg')}}" class="ms-1" alt="Img"></h3>
                <p class="mb-0">{{$user->email}}</p>
            </div>
        </div>
        <div class="settings-menu">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="nav-item">
                        <a {!! linkParams('freelancer-dashboard') !!}>
                            <img src="{{URL::asset('/assets/img/icon/sidebar-icon-01.svg')}}" alt="Img"> Dashboard

                        </a>
                    </li>
                    <li class="nav-item submenu">
                        <a {!! linkParams('freelancer-project-proposals') !!}>
                            <img src="{{URL::asset('/assets/img/icon/sidebar-icon-02.svg')}}" alt="Img"> Projects
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="sub-menu-ul">
                            <li>
                                <a {!! subLink('freelancer-project-proposals') !!}>My Proposal</a>
                            </li>
                            <li>
                                <a {!! subLink('freelancer-ongoing-projects') !!}>Ongoing Projects</a>
                            </li>
                            <li>
                                <a {!! subLink('freelancer-completed-projects') !!}>Completed Projects</a>
                            </li>
                            <li>
                                <a {!! subLink('freelancer-cancelled-projects') !!}>Cancelled Projects</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item submenu">
                        <a {!! linkParams('freelancer-favourites') !!}>
                            <img src="{{URL::asset('/assets/img/icon/sidebar-icon-03.svg')}}" alt="Img"> Favourites
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="sub-menu-ul">
                            <li>
                                <a {!! subLink('freelancer-favourites') !!}>Bookmarked Projects</a>
                            </li>
                            <li>
                                <a {!! subLink('freelancer-invitations') !!}>Invitations</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a {!! linkParams('freelancer-review') !!}>
                            <img src="{{URL::asset('/assets/img/icon/sidebar-icon-04.svg')}}" alt="Img"> Reviews
                        </a>
                    </li>
                    <li class="nav-item">
                        <a {!! linkParams('freelancer-portfolio') !!}>
                            <img src="{{URL::asset('/assets/img/icon/sidebar-icon-05.svg')}}" alt="Img"> Portfolio
                        </a>
                    </li>
                    <li class="nav-item" hidden>
                        <a {!! linkParams('freelancer-chats') !!}>
                            <img src="{{URL::asset('/assets/img/icon/sidebar-icon-06.svg')}}" alt="Img"> Chat
                        </a>
                    </li>
                    <li class="nav-item">
                        <a {!! linkParams('freelancer-withdraw-money') !!}>
                            <img src="{{URL::asset('/assets/img/icon/sidebar-icon-07.svg')}}" alt="Img"> Payments
                        </a>
                    </li>
                    <li class="nav-item">
                        <a {!! linkParams('freelancer-payout') !!}>
                            <img src="{{URL::asset('/assets/img/icon/sidebar-icon-08.svg')}}" alt="Img"> Payout
                        </a>
                    </li>
                    <li class="nav-item">
                        <a {!! linkParams('freelancer-withdraw-money') !!}>
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
                                <a {!! subLink('freelancer-profile-settings') !!}>Profile Setting</a>
                            </li>
                            <li>
                                <a {!! subLink('freelancer-membership') !!}>Plan & Billing</a>
                            </li>
                            <li>
                                <a {!! subLink('freelancer-verify-identity') !!}>Verify Identity</a>
                            </li>
                            <li>
                                <a {!! subLink('freelancer-change-password') !!}>Changes Password</a>
                            </li>
                            <li>
                                <a {!! subLink('freelancer-delete-account') !!}>Delete Account</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="#" class="nav-link" onclick="this.parentElement.submit()">
                                <img src="{{URL::asset('/assets/img/icon/sidebar-icon-11.svg')}}" alt="Img" /> Logout
                            </a>
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!-- Freelancer Navbar -->
