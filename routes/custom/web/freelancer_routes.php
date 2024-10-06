<?php

use App\Http\Controllers\Freelancers\FreelancerController;
use App\Http\Middleware\UserIsFreelancer;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:web', UserIsFreelancer::class])->group(function () {
    Route::post('/onboard', [FreelancerController::class, 'store'])->name('onboard');
    Route::get('/onboard-screen', [FreelancerController::class, 'index'])->name('onboard-screen');
    Route::get('/freelancer-cancelled-projects', static fn() => view('freelancer-views.freelancer-cancelled-projects'))->name('freelancer-cancelled-projects');
    Route::get('/freelancer-change-password', static fn() => view('freelancer-views.freelancer-change-password'))->name('freelancer-change-password');
    Route::get('/freelancer-chats', static fn() => view('freelancer-views.freelancer-chats'))->name('freelancer-chats');
    Route::get('/freelancer-completed-projects', static fn() => view('freelancer-views.freelancer-completed-projects'))->name('freelancer-completed-projects');
    Route::get('/freelancer-dashboard', static fn() => view('freelancer-views.freelancer-dashboard'))->name('freelancer-dashboard');
    Route::get('/freelancer-delete-account', static fn() => view('freelancer-views.freelancer-delete-account'))->name('freelancer-delete-account');
    Route::get('/freelancer-favourites', static fn() => view('freelancer-views.freelancer-favourites'))->name('freelancer-favourites');
    Route::get('/freelancer-files', static fn() => view('freelancer-views.freelancer-files'))->name('freelancer-files');
    Route::get('/freelancer-invitations', static fn() => view('freelancer-views.freelancer-invitations'))->name('freelancer-invitations');
    Route::get('/freelancer-membership', static fn() => view('freelancer-views.freelancer-membership'))->name('freelancer-membership');
    Route::get('/freelancer-milestones', static fn() => view('freelancer-views.freelancer-milestones'))->name('freelancer-milestones');
    Route::get('/freelancer-ongoing-projects', static fn() => view('freelancer-views.freelancer-ongoing-projects'))->name('freelancer-ongoing-projects');
    Route::get('/freelancer-payment', static fn() => view('freelancer-views.freelancer-payment'))->name('freelancer-payment');
    Route::get('/freelancer-portfolio', static fn() => view('freelancer-views.freelancer-portfolio'))->name('freelancer-portfolio');
    Route::get('/freelancer-profile-settings', static fn() => view('freelancer-views.freelancer-profile-settings'))->name('freelancer-profile-settings');
    Route::get('/freelancer-profile', static fn() => view('freelancer-views.freelancer-profile'))->name('freelancer-profile');
    Route::get('/freelancer-project-proposals', static fn() => view('freelancer-views.freelancer-project-proposals'))->name('freelancer-project-proposals');
    Route::get('/freelancer-review', static fn() => view('freelancer-views.freelancer-review'))->name('freelancer-review');
    Route::get('/freelancer-task', static fn() => view('freelancer-views.freelancer-task'))->name('freelancer-task');
    Route::get('/freelancer-verify-identity', static fn() => view('freelancer-views.freelancer-verify-identity'))->name('freelancer-verify-identity');
    Route::get('/freelancer-view-project-detail', static fn() => view('freelancer-views.freelancer-view-project-detail'))->name('freelancer-view-project-detail');
    Route::get('/freelancer-withdraw-money', static fn() => view('freelancer-views.freelancer-withdraw-money'))->name('freelancer-withdraw-money');
    Route::get('/freelancer-payout', static fn() => view('freelancer-views.freelancer-payout'))->name('freelancer-payout');
    Route::get('/freelancer-statement', static fn() => view('freelancer-views.freelancer-statement'))->name('freelancer-statement');
    Route::get('/freelancer-verified', static fn() => view('freelancer-views.freelancer-verified'))->name('freelancer-verified');
});
