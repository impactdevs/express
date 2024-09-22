<!-- Page Header -->
@if(!Route::is(['activities','change-password','data-tables','delete-account','email-settings','deposit','deposit-cancelled','deposit-completed','deposit-hold','deposit-pending','earning-employer','earning-freelancer','employe-list','form-basic-inputs','form-horizontal','form-input-groups','form-validation','form-mask','form-vertical','freelance-list','index_admin','localization-details','others-settings','profile-transactions','profile','payment-settings','project-bidding','project-earnings','project-invoice','reports','roles-permission','seo-settings','settings','social-links','social-settings','subscripe-freelancer','subscription','tables-basic','tax-types','transaction','transaction-deposit','transaction-withdraw','transaction-pending','transaction-onhold','transaction-completed','users','user-active','user-inactive','user-suspended','user-administrator','user-profile','verify-identity','view-price-employe','view-price-freelance','withdrawn-cancelled','withdrawn-completed','withdrawn-pending','withdrawn']))
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">{{ $li_1 }}</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/index_admin')}}">{{ $li_2 }}</a></li>
                @if(Route::is(['bid-fees','contest-entry-fees','contests-fees','projects-fees','sub-category']))
                <li class="breadcrumb-item"><a href="fees">{{ $li_3 }}</a></li>
                @endif
                <li class="breadcrumb-item active">{{ $li_4 }}</li>
            </ul>
        </div>
        <div class="col-auto">
            @if(!Route::is(['projects','providers']))
            <a href="javascript:void(0);" class="btn me-2 add-button" data-bs-toggle="modal" data-bs-target="#add-category">
                <i class="fas fa-plus"></i>
            </a>
            @endif
            <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
                <i class="fas fa-filter"></i>
            </a>
        </div>
    </div>
</div>
@endif
@if(Route::is(['transaction','transaction-deposit','transaction-withdraw','transaction-pending','transaction-onhold','transaction-completed','withdrawn-completed','withdrawn-cancelled','withdrawn-pending','withdrawn']))
<div class="page-header subscribe-head border-bottom-0">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">{{ $li_1 }}</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/index_admin')}}">{{ $li_2 }}</a></li>
                
                <li class="breadcrumb-item active">{{ $li_3 }}</li>
            </ul>
        </div>
    </div>
</div>
@endif
@if(Route::is(['employe-list','freelance-list','subscripe-freelancer','subscription','view-price-employe','view-price-freelance']))
<div class="page-header subscribe-head">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Subscriber List</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/index_admin')}}">Home</a></li>
                
                <li class="breadcrumb-item active">Subscriber List</li>
            </ul>
        </div>
        <div class="col-auto">
            @if(!Route::is(['view-price-employe','view-price-freelance']))
            <a href="{{url('admin/view-price-employe')}}" class="btn add-button me-2">
                View Pricing
            </a>
            @endif
            @if(Route::is(['view-price-employe','view-price-freelance']))
            <a href="{{url('admin/employe-list')}}" class="btn add-button me-2">
                Subscription List
            </a>
            @endif
            @if(Route::is(['view-price-freelance']))
            <a class="btn filter-btn" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-plan-freelance">
                New Subscription
            </a>
            @endif
            @if(!Route::is(['view-price-freelance']))
            <a class="btn filter-btn" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-plan-employe">
                New Subscription
            </a>
            @endif
        </div>
    </div>
</div>
@endif
@if(Route::is(['activities','profile-transactions','users','user-active','user-inactive','user-suspended','user-administrator','user-profile']))
<div class="page-header subscribe-head">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">{{ $li_1 }}</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/index_admin')}}">{{ $li_2 }}</a></li>
                <li class="breadcrumb-item active">{{ $li_3 }}</li>
            </ul>
        </div>
        @if(!Route::is(['users','user-active','user-inactive','user-suspended','user-administrator']))
        <div class="col-auto">
            <a class="btn  back-user" href="{{url('admin/users')}}" >
                <img src="{{ URL::asset('/assets_admin/img/icon/icon-08.svg')}}" alt=""> Back to list
            </a>
        </div>
        @endif
        @if(Route::is(['users','user-active','user-inactive','user-suspended','user-administrator']))
        <div class="col-auto">
            <a class="btn  add-user" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-category">
                <i class="fas fa-plus "></i> {{ $li_4 }}
            </a>
        </div>
        @endif
    </div>
</div>
@endif
@if(Route::is(['form-basic-inputs','form-horizontal','form-input-groups','form-validation','form-mask','form-vertical']))
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">{{ $li_1 }}</h3>
        </div>
    </div>
</div>
@endif  
@if(Route::is(['data-tables','tables-basic']))
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">{{ $li_1 }}</h3>
        </div>
    </div>
</div>
@endif                    
@if(Route::is(['change-password','delete-account','email-settings','localization-details','others-settings','profile','payment-settings','roles-permission','seo-settings','settings','social-links','social-settings','tax-types']))
<div class="page-header">
    <div class="row">
        <div class="col-sm-6">
            <h3 class="page-title">{{ $li_1 }}</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/index_admin')}}">{{ $li_2 }}</a></li>
                @if(Route::is(['email-settings','localization-details','others-settings','payment-settings','roles-permission','seo-settings','settings','social-links','social-settings']))
                <li class="breadcrumb-item"><a href="{{url('admin/settings')}}">{{ $li_4 }}</a></li>
                @endif
                <li class="breadcrumb-item active">{{ $li_3 }}</li>
            </ul>
        </div>
    </div>
</div>
@endif
@if(Route::is(['deposit','deposit-cancelled','deposit-completed','deposit-hold','deposit-pending']))
<div class="page-header subscribe-head border-bottom-0">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Deposits</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/index_admin')}}">Home</a></li>
                
                <li class="breadcrumb-item active">Deposits</li>
            </ul>
        </div>
    </div>
</div>
@endif
@if(Route::is(['earning-employer','earning-freelancer','project-bidding','project-earnings','reports','project-invoice']))
<div class="page-header page-border">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <h3 class="page-title">{{ $li_1 }}</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/index_admin')}}">{{ $li_2 }}</a></li>
                <li class="breadcrumb-item active">{{ $li_3 }}</li>
            </ul>
        </div>
        <div class="col-lg-6 report-btns">
            <ul class="project-report">
                @if(!Route::is(['reports']))
                <li ><a href="{{url('admin/reports')}}" >Projects</a></li>
                @endif
                @if(Route::is(['reports']))
                <li class="active-project"><a href="project-reports">Projects</a></li>
                @endif
                @if(!Route::is(['project-bidding']))
                <li><a href="{{url('admin/project-bidding')}}">Bidding</a></li>
                @endif
                @if(Route::is(['project-bidding']))
                <li class="active-project"><a href="{{url('admin/project-bidding')}}">Bidding</a></li>
                @endif
                @if(!Route::is(['project-invoice']))
                <li><a href="{{url('admin/project-invoice')}}">Invoices</a></li>
                @endif
                @if(Route::is(['project-invoice']))
                <li class="active-project"><a href="{{url('admin/project-invoice')}}">Invoices</a></li>
                @endif
                @if(!Route::is(['project-earnings','earning-freelancer']))
                <li><a href="{{url('admin/project-earnings')}}">Earnings</a></li>
                @endif
                @if(Route::is(['project-earnings','earning-freelancer']))
                <li class="active-project"><a href="{{url('admin/project-earnings')}}">Earnings</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>
@endif
@if(Route::is(['index_admin','verify-identity']))
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">{{ $li_1 }}</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/index_admin')}}">{{ $li_2 }}</a></li>
                <li class="breadcrumb-item active">{{ $li_3 }}</li>
            </ul>
        </div>
    </div>
</div>
 @endif                
<!-- /Page Header -->