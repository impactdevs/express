<!-- sidebar -->
<div class="col-xl-3 col-md-4 theiaStickySidebar">
    <div class="settings-widget">
        
        <div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
            @if(!Route::is(['freelancer-cancelled-projects','freelancer-change-password','freelancer-completed-projects','freelancer-dashboard','freelancer-delete-account','freelancer-favourites','freelancer-invitations','freelancer-membership','freelancer-ongoing-projects','freelancer-portfolio','freelancer-profile-settings','freelancer-project-proposals','freelancer-review','freelancer-verify-identity','freelancer-withdraw-money']))
            <a href="{{url('user-account-details')}}"><img alt="profile image" src="{{ URL::asset('/assets/img/img-04.jpg')}}" class="avatar-lg rounded-circle"></a>
             @endif
              @if(Route::is(['freelancer-cancelled-projects','freelancer-change-password','freelancer-completed-projects','freelancer-dashboard','freelancer-delete-account','freelancer-favourites','freelancer-invitations','freelancer-membership','freelancer-ongoing-projects','freelancer-portfolio','freelancer-profile-settings','freelancer-project-proposals','freelancer-review','freelancer-verify-identity','freelancer-withdraw-money']))
             <a href="{{url('freelancer-profile')}}"><img alt="profile image" src="{{ URL::asset('/assets/img/user/avatar-1.jpg')}}" class="avatar-lg rounded-circle"></a>
             @endif
            <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                <p class="mb-2">Welcome,</p>
                 @if(!Route::is(['freelancer-cancelled-projects','freelancer-change-password','freelancer-completed-projects','freelancer-dashboard','freelancer-delete-account','freelancer-favourites','freelancer-invitations','freelancer-membership','freelancer-ongoing-projects','freelancer-portfolio','freelancer-profile-settings','freelancer-project-proposals','freelancer-review','freelancer-verify-identity','freelancer-withdraw-money']))
                <a href="{{url('user-account-details')}}"><h3 class="mb-0">John Danie S.</h3></a>
                <p class="mb-0">@johndaniee</p>
                @endif
                @if(Route::is(['freelancer-cancelled-projects','freelancer-change-password','freelancer-completed-projects','freelancer-dashboard','freelancer-delete-account','freelancer-favourites','freelancer-invitations','freelancer-membership','freelancer-ongoing-projects','freelancer-portfolio','freelancer-profile-settings','freelancer-project-proposals','freelancer-review','freelancer-verify-identity','freelancer-withdraw-money']))
                <h3 class="mb-0"><a href="{{url('freelancer-profile')}}">George Wells</a></h3>
                <p class="mb-0">@georgewell</p>
                @endif
            </div>
        </div>
        <div class="settings-menu">
            <ul>
                <li class="nav-item">
                    <a href="{{url('dashboard')}}" class="nav-link {{ Request::is('dashboard','freelancer-dashboard') ? 'active' : '' }}">
                        <i class="material-icons">verified_user</i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('manage-projects')}}" class="nav-link {{ Request::is('manage-projects','freelancer-completed-projects','freelancer-files','freelancer-milestones','freelancer-ongoing-projects','freelancer-payment','freelancer-project-proposals','freelancer-task','freelancer-view-project-detail','ongoing-projects','pending-projects','project-payment','project-proposals','tasks','view-project-detail','files','cancelled-projects','completed-projects','freelancer-cancelled-projects') ? 'active' : '' }}">
                        <i class="material-icons">business_center</i> Projects
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('favourites')}}" class="nav-link {{ Request::is('favourites','freelancer-favourites','freelancer-invitations','invited-favourites') ? 'active' : '' }}">
                        <i class="material-icons">local_play</i> Favourites
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('review')}}" class="nav-link {{ Request::is('review','freelancer-review') ? 'active' : '' }}">
                        <i class="material-icons">record_voice_over</i> Reviews
                    </a>
                </li>
                @if(Route::is(['freelancer-cancelled-projects','freelancer-change-password','freelancer-completed-projects','freelancer-dashboard','freelancer-delete-account','freelancer-favourites','freelancer-files','freelancer-invitations','freelancer-membership','freelancer-milestones','freelancer-ongoing-projects','freelancer-payment','freelancer-portfolio','freelancer-profile-settings','freelancer-project-proposals','freelancer-review','freelancer-task','freelancer-verify-identity','freelancer-view-project-detail','freelancer-withdraw-money']))
                <li class="nav-item">
                    <a href="{{url('freelancer-portfolio')}}" class="nav-link {{ Request::is('freelancer-portfolio') ? 'active' : '' }}">
                        <i class="material-icons">pie_chart</i> Portfolio
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{url('chats')}}" class="nav-link {{ Request::is('chats') ? 'active' : '' }}">
                        <i class="material-icons">chat</i> Messages
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('membership-plans')}}" class="nav-link {{ Request::is('membership-plans','freelancer-membership') ? 'active' : '' }}">
                        <i class="material-icons">person_add</i> Membership
                    </a>
                </li>
                 @if(!Route::is(['freelancer-change-password','freelancer-task','freelancer-view-project-detail']))
                <li class="nav-item">
                    <a href="{{url('milestones')}}" class="nav-link {{ Request::is('milestones') ? 'active' : '' }}">
                        <i class="material-icons">pie_chart</i> Milestones
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{url('verify-identity')}}" class="nav-link {{ Request::is('verify-identity','freelancer-verify-identity') ? 'active' : '' }}">
                        <i class="material-icons">person_pin</i> Verify Identity
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('deposit-funds')}}" class="nav-link {{ Request::is('deposit-funds','freelancer-withdraw-money') ? 'active' : '' }}">
                        <i class="material-icons">wifi_tethering</i> Payments
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('profile-settings')}}" class="nav-link {{ Request::is('profile-settings','change-password','freelancer-change-password','freelancer-delete-account','freelancer-profile-settings','delete-account') ? 'active' : '' }}">
                        <i class="material-icons">settings</i> Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('index')}}" class="nav-link {{ Request::is('index') ? 'active' : '' }}">
                        <i class="material-icons">power_settings_new</i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>                  
</div>
<!-- /sidebar -->