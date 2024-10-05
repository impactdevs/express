<?php

use App\Http\Controllers\Employers\EmployerController;
use App\Http\Middleware\UserIsEmployer;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:web', UserIsEmployer::class])->group(function () {
    Route::post('/onboard-employer', [EmployerController::class, 'store'])->name('onboard-employer');
    Route::get('/onboard-screen-employer', [EmployerController::class, 'index'])->name('onboard-screen-employer');
    Route::get('/dashboard', static fn() => view('dashboard'))->name('dashboard');
});
