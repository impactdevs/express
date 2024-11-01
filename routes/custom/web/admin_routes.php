<?php

use App\Http\Controllers\Admin\EmployerController;
use App\Http\Controllers\Admin\FreelancerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\SubIndustryController;
use Illuminate\Support\Facades\Route;




Route::prefix('admin')->group(function () {
    //auth
    Route::get('login', [CustomAuthController::class, 'index'])->name('admin/login');
    // Route::get('index_admin', [CustomAuthController::class, 'dashboard']);
    Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
    Route::get('register', [CustomAuthController::class, 'registration'])->name('admin/register');
    //Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

    Route::resource('admin', AdminController::class);
    Route::resource("industries", IndustryController::class);
    Route::resource("sub-industries", SubIndustryController::class);
    Route::resource("employers", EmployerController::class);
    Route::resource("freelancers", FreelancerController::class);
});
