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

<!-- Employer Navbar -->
<div class="col-xl-3 col-lg-4 theiaStickySidebar">
    <div class="settings-widget">
        <div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
            <a href="{{url('freelancer-profile')}}"><img alt="profile image" src="{{URL::asset('/assets/img/user/table-avatar-03.jpg')}}" class="avatar-lg rounded-circle"></a>
            <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                <h3 class="mb-0"><a href="{{url('profile-settings')}}">{{$user->name}}</a><img src="{{URL::asset('/assets/img/icon/verified-badge.svg')}}" class="ms-1" alt="Img"></h3>
                <p class="mb-0">{{$user->email}}</p>
            </div>
        </div>
        <div class="settings-menu">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="nav-item">
                        <a {!! linkParams('dashboard') !!}>
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
                                <a {!! subLink('manage-projects') !!}>All Projects</a>
                            </li>
                            <li>
                                <a {!! subLink('ongoing-projects') !!}>Ongoing Projects</a>
                            </li>
                            <li>
                                <a {!! subLink('completed-projects') !!}>Completed Projects</a>
                            </li>
                            <li>
                                <a {!! subLink('pending-projects') !!}>Pending Projects</a>
                            </li>
                            <li>
                                <a {!! subLink('cancelled-projects') !!}>Cancelled Projects</a>
                            </li>
                            <li>
                                <a {!! subLink('expired-projects') !!}>Expired Projects</a>
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
                                <a {!! subLink('favourites') !!}>Bookmarked Projects</a>
                            </li>
                            <li>
                                <a {!! subLink('invited-favourites') !!}>Invitations</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a {!! linkParams('review') !!}>
                            <img src="{{URL::asset('/assets/img/icon/sidebar-icon-04.svg')}}" alt="Img"> Reviews
                        </a>
                    </li>
                    <li class="nav-item" hidden>
                        <a {!! linkParams('chats') !!}>
                            <img src="{{URL::asset('/assets/img/icon/sidebar-icon-06.svg')}}" alt="Img"> Chat
                        </a>
                    </li>
                    <li class="nav-item">
                        <a {!! linkParams('deposit-funds') !!}>
                            <img src="{{URL::asset('/assets/img/icon/sidebar-icon-07.svg')}}" alt="Img"> Payments
                        </a>
                    </li>
                    <li class="nav-item submenu">
                        <a href="javascript:void(0);" class="nav-link">
                            <img src="{{URL::asset('/assets/img/icon/sidebar-icon-10.svg')}}" alt="Img">  Settings
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="sub-menu-ul">
                            <li>
                                <a {!! subLink('profile-settings') !!}>Profile</a>
                            </li>
                            <li>
                                <a {!! subLink('membership-plans') !!}>Plan & Billing</a>
                            </li>
                            <li>
                                <a {!! subLink('verify-identity') !!}>Verify Identity</a>
                            </li>
                            <li>
                                <a {!! subLink('change-password') !!}>Change Password</a>
                            </li>
                            <li>
                                <a {!! subLink('delete-account') !!}>Delete Account</a>
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
<!-- Employer Navbar -->
