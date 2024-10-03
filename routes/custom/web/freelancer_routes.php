<?php

use App\Http\Controllers\Freelancers\FreelancerController;
use Illuminate\Support\Facades\Route;

Route::post('/onboard', [FreelancerController::class, 'store'])->name('onboard');
Route::get('/onboard-screen', [FreelancerController::class, 'index'])->name('onboard-screen');
