<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.partials.head')
</head>
@if (
    !Route::is([
        'cancelled-projects',
        'completed-projects',
        'dashboard',
        'delete-account',
        'deposit-funds',
        'favourites',
        'files',
        'freelancer-cancelled-projects',
        'freelancer-change-password',
        'freelancer-completed-projects',
        'freelancer-dashboard',
        'freelancer-delete-account',
        'freelancer-favourites',
        'freelancer-files',
        'freelancer-invitations',
        'freelancer-membership',
        'freelancer-milestones',
        'freelancer-ongoing-projects',
        'freelancer-payment',
        'freelancer-portfolio',
        'freelancer-profile-settings',
        'freelancer-project-proposals',
        'freelancer-review',
        'freelancer-task',
        'freelancer-verify-identity',
        'freelancer-view-project-detail',
        'freelancer-withdraw-money',
        'invited-freelancer',
        'manage-projects',
        'membership-plans',
        'milestones',
        'ongoing-projects',
        'pending-projects',
        'post-job',
        'profile-settings',
        'project-payment',
        'review',
        'tasks',
        'verify-identity',
        'view-project-detail',
        'invited-favourites',
        'change-password',
        'freelancer-payout',
        'project-employer-view-proposal',
        'view-proposals',
        'forgot-password',
        'login',
        'register',
        'change-passwords',
        'otp',
        'reset-password',
        'freelancer-verified',
        'expired-projects',
        'chats',
        'freelancer-chats',
        'pagee',
        '/',
        'index-two',
        'index-three',
        'index-four',
        'index-five',
    ]))

    <body>
@endif
@if (Route::is([
        'cancelled-projects',
        'completed-projects',
        'dashboard',
        'delete-account',
        'deposit-funds',
        'favourites',
        'files',
        'freelancer-cancelled-projects',
        'freelancer-change-password',
        'freelancer-completed-projects',
        'freelancer-dashboard',
        'freelancer-delete-account',
        'freelancer-favourites',
        'freelancer-files',
        'freelancer-invitations',
        'freelancer-membership',
        'freelancer-milestones',
        'freelancer-ongoing-projects',
        'freelancer-payment',
        'freelancer-portfolio',
        'freelancer-profile-settings',
        'freelancer-project-proposals',
        'freelancer-review',
        'freelancer-task',
        'freelancer-verify-identity',
        'freelancer-view-project-detail',
        'freelancer-withdraw-money',
        'invited-freelancer',
        'manage-projects',
        'membership-plans',
        'milestones',
        'ongoing-projects',
        'pending-projects',
        'post-job',
        'profile-settings',
        'project-payment',
        'review',
        'tasks',
        'verify-identity',
        'view-project-detail',
        'invited-favourites',
        'change-password',
        'freelancer-payout',
        'project-employer-view-proposal',
        'view-proposals',
    ]))

    <body class="dashboard-page">
@endif
@if (Route::is([
        'forgot-password',
        'login',
        'register',
        'change-passwords',
        'otp',
        'reset-password',
        'freelancer-verified',
        'expired-projects',
    ]))

    <body class="account-page">
@endif
@if (Route::is(['chats', 'freelancer-chats']))

    <body class="chat-page main-chat-blk dashboard-page">
@endif
@if (Route::is(['pagee', '/']))

    <body class="home-page bg-one">
@endif
@if (Route::is(['index-two']))

    <body class="home-page bg-two">
@endif
@if (Route::is(['index-three']))

    <body class="home-page bg-three">
@endif
@if (Route::is(['index-four']))

    <body class="home-page bg-four">
@endif
@if (Route::is(['index-five']))

    <body class="home-page bg-five">
@endif
@if (Route::is(['pagee', 'index-two', 'index-three', 'index-five', 'index-four']))
    @component('components.loader')
    @endcomponent
@endif
<!-- Main Wrapper -->
@if (!Route::is(['index-four', 'index-five']))
    <div class="main-wrapper">
@endif
@if (Route::is(['index-four']))
    <div class="main-wrapper home-four-wrapper">
@endif
@if (Route::is(['index-five']))
    <div class="main-wrapper home-five-wrapper">
@endif
@if (!Route::is(['onboard-screen-employer', 'onboard-screen']))
    @include('layout.partials.header')
@endif
@yield('content')
@if (!Route::is(['chats', 'freelancer-chats', 'onboard-screen-employer', 'onboard-screen']))
    @include('layout.partials.footer')
@endif
</div>
<!-- /Main Wrapper -->
@if (Route::is(['pagee', 'index-two', 'index-three', 'index-five', 'index-four']))
    @component('components.scrollbar')
    @endcomponent
@endif
@include('layout.partials.footer-scripts')
</body>

</html>
