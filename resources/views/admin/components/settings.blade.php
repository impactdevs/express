@if(Route::is(['tax-types','change-password','delete-account']))
<!-- Settings Menu -->
<div class="widget settings-menu">
    <ul>
        <li class="nav-item">
            <a href="{{url('admin/settings')}}" class="nav-link {{ Request::is('admin/settings') ? 'active' : '' }}">
                <i class="far fa-user"></i> <span>Profile Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('admin/tax-types')}}" class="nav-link {{ Request::is('admin/tax-types') ? 'active' : '' }}">
                <i class="far fa-check-square"></i> <span>Tax Types</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('admin/change-password')}}" class="nav-link {{ Request::is('admin/change-password') ? 'active' : '' }}">
                <i class="fas fa-unlock-alt"></i> <span>Change Password</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('admin/delete-account')}}" class="nav-link {{ Request::is('admin/delete-account') ? 'active' : '' }}">
                <i class="fas fa-ban"></i> <span>Delete Account</span>
            </a>
        </li>
    </ul>
</div>
<!-- /Settings Menu -->
@endif
@if(!Route::is(['tax-types','change-password','delete-account','deposit-completed','deposit-cancelled','deposit-hold','deposit-pending','deposit','transaction-deposit','transaction','transaction-withdraw','transaction-pending','transaction-onhold','transaction-completed','users','user-active','user-inactive','user-suspended','user-administrator','withdrawn-completed','withdrawn-cancelled','withdrawn-pending','withdrawn']))
<!-- Settings Menu -->
<div class="settings-menu-links">
    <ul class="nav nav-tabs menu-tabs">
        <li class="nav-item {{ Request::is('admin/settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('admin/settings')}}">General Settings</a>
        </li>
        <li class="nav-item {{ Request::is('admin/localization-details') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('admin/localization-details')}}">Localization</a>
        </li>
        <li class="nav-item {{ Request::is('admin/payment-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('admin/payment-settings')}}">Payment Settings</a>
        </li>
        <li class="nav-item {{ Request::is('admin/email-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('admin/email-settings')}}">Email Settings</a>
        </li>
        <li class="nav-item {{ Request::is('admin/social-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('admin/social-settings')}}">Social Media Login</a>
        </li>
        <li class="nav-item {{ Request::is('admin/social-links') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('admin/social-links')}}">Social Links</a>
        </li>
        <li class="nav-item {{ Request::is('admin/seo-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('admin/seo-settings')}}">SEO Settings</a>
        </li>
        <li class="nav-item {{ Request::is('admin/others-settings') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('admin/others-settings')}}">Others</a>
        </li>
    </ul>
</div>
<!-- Settings Menu -->
@endif
@if(Route::is(['withdrawn-completed','withdrawn-cancelled','withdrawn-pending','withdrawn']))
<div class="subscribe-employe users-list">
    <ul>
        <li class=" {{ Request::is('admin/withdrawn') ? 'active' : '' }}"><a href="{{url('admin/withdrawn')}}">History </a></li>
        <li class=" {{ Request::is('admin/withdrawn-pending') ? 'active' : '' }}"><a href="{{url('admin/withdrawn-pending')}}">Pending</a></li>
        <li class=" {{ Request::is('admin/withdrawn-cancelled') ? 'active' : '' }}"><a href="{{url('admin/withdrawn-cancelled')}}">Cancelled</a></li>
        <li class=" {{ Request::is('admin/withdrawn-completed') ? 'active' : '' }}"><a href="{{url('admin/withdrawn-completed')}}">Completed</a></li>
    </ul>
</div>
@endif
@if(Route::is(['transaction','transaction-deposit','transaction-withdraw','transaction-pending','transaction-onhold','transaction-completed']))
<div class="subscribe-employe users-list">
    <ul>
        <li class="{{ Request::is('admin/transaction') ? 'active' : '' }}"><a href="{{url('admin/transaction')}}">All Transaction </a></li>
        <li class="{{ Request::is('admin/transaction-deposit') ? 'active' : '' }}"><a href="{{url('admin/transaction-deposit')}}">Deposit</a></li>
        <li class="{{ Request::is('admin/transaction-withdraw') ? 'active' : '' }}"><a href="{{url('admin/transaction-withdraw')}}">Withdraw</a></li>
        <li class="{{ Request::is('admin/transaction-pending') ? 'active' : '' }}"><a href="{{url('admin/transaction-pending')}}">Pending</a></li>
        <li class="{{ Request::is('admin/transaction-onhold') ? 'active' : '' }}"><a href="{{url('admin/transaction-onhold')}}">Onhold</a></li>
        <li class="{{ Request::is('admin/transaction-completed') ? 'active' : '' }}"><a href="{{url('admin/transaction-completed')}}">Completed</a></li>
    </ul>
</div>
@endif
@if(Route::is(['users','user-active','user-inactive','user-suspended','user-administrator']))
<div class="subscribe-employe users-list">
    <ul>
        <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a href="{{url('admin/users')}}">All Freelancer </a></li>
        <li class="{{ Request::is('admin/user-active') ? 'active' : '' }}"><a href="{{url('admin/user-active')}}">Active Freelancer</a></li>
        <li class="{{ Request::is('admin/user-inactive') ? 'active' : '' }}"><a href="{{url('admin/user-inactive')}}">Inactive Freelancer</a></li>
        <li class="{{ Request::is('admin/user-suspended') ? 'active' : '' }}"><a href="{{url('admin/user-suspended')}}">Suspended</a></li>
        <li class="{{ Request::is('admin/user-administrator') ? 'active' : '' }}"><a href="{{url('admin/user-administrator')}}">Administrator</a></li>
    </ul>
</div>
@endif
@if(Route::is(['deposit','deposit-pending','deposit-hold','deposit-cancelled','deposit-completed','deposit-pending']))
<div class="subscribe-employe users-list">
    <ul>
        <li class="{{ Request::is('admin/deposit') ? 'active' : '' }}"><a href="{{url('admin/deposit')}}">History </a></li>
        <li class="{{ Request::is('admin/deposit-pending') ? 'active' : '' }}"><a href="{{url('admin/deposit-pending')}}">Pending</a></li>
        <li class="{{ Request::is('admin/deposit-hold') ? 'active' : '' }}"><a href="{{url('admin/deposit-hold')}}">On Hold</a></li>
        <li class="{{ Request::is('admin/deposit-cancelled') ? 'active' : '' }}"><a href="{{url('admin/deposit-cancelled')}}">Cancelled</a></li>
        <li class="{{ Request::is('admin/deposit-completed') ? 'active' : '' }}"><a href="{{url('admin/deposit-completed')}}">Completed</a></li>
    </ul>
</div>
<!-- Active User Header -->
<div class="page-header user-active">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">{{ $li_1 }}</h3>
            <p>Total <span>57</span> Transaction</p>
        </div>
        <div class="col-auto">
            <a href="javascript:void(0);" class="btn export-btn me-1" >
                <img src="{{ URL::asset('/assets_admin/img/export.svg')}}" alt=""> Export
            </a>
            <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
                <i class="fas fa-filter"></i>
            </a>
        </div>
    </div>
</div>
<!-- /Active User Header -->
@endif