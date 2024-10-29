@if(!Route::is(['cancelled-projects','change-password','company-gallery','faq','company-review','company-project','completed-projects','dashboard','delete-account','deposit-funds','edit-project','faq','files','freelancer-cancelled-projects','freelancer-dashboard','freelancer-delete-account','freelancer-ongoing-projects','invited-favourites','membership-plans','ongoing-projects','pending-projects','project-payment','review','user-account-details',
'verify-identity','view-project-detail']))
<!-- Breadcrumb -->
<div class="bread-crumb-bar">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <div class="breadcrumb-list">
                    @if(!Route::is(['post-project','project-conformation']))
                    <h2>{{ $li_1 }}</h2>
                    @endif
                    @if(Route::is(['post-project','project-conformation']))
                    <h3>{{ $li_1 }}</h3>
                    @endif
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">{{ $li_2 }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $li_3 }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
@endif
@if (Route::is(['company-review','company-project']))
<!-- Breadcrumb -->
<div class="bread-crumb-bar">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <div class="breadcrumb-list">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><img src="assets/img/home-icon.svg" alt="Img"> {{ $li_1 }}</a></li>
                            <li class="breadcrumb-item" aria-current="page">{{ $li_2 }}</li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $li_3 }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
@endif
@if(Route::is(['cancelled-projects','change-password','company-gallery','completed-projects','dashboard','delete-account','deposit-funds','files','freelancer-cancelled-projects','freelancer-dashboard','freelancer-delete-account','freelancer-ongoing-projects','invited-favourites','membership-plans','ongoing-projects','pending-projects','project-payment','review',
'verify-identity','view-project-detail']))
<!-- Breadcrumb -->
<div class="bread-crumb-bar">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <div class="breadcrumb-list">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Project Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
@endif
@if (Route::is(['edit-project',]))
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <h2 class="breadcrumb-title">{{ $li_1 }}</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">{{ $li_2 }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $li_3 }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
@endif

@if (Route::is(['user-account-details']))
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-end">
                    <div class="inner-content">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
@endif
@if (Route::is(['faq']))
<!-- Breadcrumb -->
<div class="bread-crumb-bar">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <div class="breadcrumb-list">
                    <h3> {{ $li_1 }}</h3>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">  {{ $li_2 }}</a></li>
                            <li class="breadcrumb-item" aria-current="page"> {{ $li_3 }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
@endif
