<?php

use App\Http\Controllers\Employers\EmployerController;
use Illuminate\Support\Facades\Route;

Route::post('/onboard-employer', [EmployerController::class, 'store'])->name('onboard-employer');
Route::get('/onboard-screen-employer', [EmployerController::class, 'index'])->name('onboard-screen-employer');
