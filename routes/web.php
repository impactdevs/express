<?php

use App\Enums\OnboardStep;
use App\Http\Controllers\Auth\AuthLoginController;
use App\Http\Controllers\Auth\AuthRegisterController;
use App\Http\Controllers\Freelancers\FreelancerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Auth-related routes
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', AuthLoginController::class)->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::post('/register', AuthRegisterController::class)->name('register');


Route::get('index_admin', [CustomAuthController::class, 'dashboard']);
Route::get('admin/login', [CustomAuthController::class, 'index'])->name('admin/login');
Route::post('admin/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('admin/register', [CustomAuthController::class, 'registration'])->name('admin/register');
Route::post('admin/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::post('onboard', [FreelancerController::class, 'store'])->name('onboard');



Route::get('/', function () {
    return view('index');
})->name('pagee');
Route::get('/home', function () {
    return view('index');
})->name('pagee');
Route::get('/index', function () {
    return view('index');
})->name('pagee');
Route::get('/404-page', function () {
    return view('404-page');
})->name('404-page');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/blank-page', function () {
    return view('blank-page');
})->name('blank-page');
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');
Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');
Route::get('/blog-list', function () {
    return view('blog-list');
})->name('blog-list');
Route::get('/cancelled-projects', function () {
    return view('cancelled-projects');
})->name('cancelled-projects');
Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');
Route::get('/change-passwords', function () {
    return view('change-passwords');
})->name('change-passwords');
Route::get('/chats', function () {
    return view('chats');
})->name('chats');
Route::get('/otp', function () {
    return view('otp');
})->name('otp');
Route::get('/project-list', function () {
    return view('project-list');
})->name('project-list');
Route::get('/reset-password', function () {
    return view('reset-password');
})->name('reset-password');
Route::get('/company-gallery', function () {
    return view('company-gallery');
})->name('company-gallery');
Route::get('/company-profile', function () {
    return view('company-profile');
})->name('company-profile');
Route::get('/company-project', function () {
    return view('company-project');
})->name('company-project');
Route::get('/company-review', function () {
    return view('company-review');
})->name('company-review');
Route::get('/developer-list', function () {
    return view('developer-list');
})->name('developer-list');
Route::get('/developer-profile', function () {
    return view('developer-profile');
})->name('developer-profile');
Route::get('/index-five', function () {
    return view('index-five');
})->name('index-five');
Route::get('/index-four', function () {
    return view('index-four');
})->name('index-four');
Route::get('/index-three', function () {
    return view('index-three');
})->name('index-three');
Route::get('/index-two', function () {
    return view('index-two');
})->name('index-two');
Route::get('/invited-favourites', function () {
    return view('invited-favourites');
})->name('invited-favourites');
Route::get('/onboard-screen-employer', function () {
    return view('onboard-screen-employer');
})->name('onboard-screen-employer');
Route::get('/onboard-screen', function (?OnboardStep $step = null) {
    if ($step !== null){
        return view('onboard-screen', ['step'=>$step]);
    }
    return view('onboard-screen', ['step'=>OnboardStep::PERSONAL_INFO]);
})->name('onboard-screen')->middleware(['auth']);
Route::get('/completed-projects', function () {
    return view('completed-projects');
})->name('completed-projects');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/delete-account', function () {
    return view('delete-account');
})->name('delete-account');
Route::get('/deposit-funds', function () {
    return view('deposit-funds');
})->name('deposit-funds');
Route::get('/developer-details', function () {
    return view('developer-details');
})->name('developer-details');
Route::get('/developer', function () {
    return view('developer');
})->name('developer');
Route::get('/edit-project', function () {
    return view('edit-project');
})->name('edit-project');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/favourites', function () {
    return view('favourites');
})->name('favourites');
Route::get('/files', function () {
    return view('files');
})->name('files');
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');
Route::get('/freelancer-cancelled-projects', function () {
    return view('freelancer-cancelled-projects');
})->name('freelancer-cancelled-projects');
Route::get('/freelancer-change-password', function () {
    return view('freelancer-change-password');
})->name('freelancer-change-password');
Route::get('/freelancer-chats', function () {
    return view('freelancer-chats');
})->name('freelancer-chats');
Route::get('/freelancer-completed-projects', function () {
    return view('freelancer-completed-projects');
})->name('freelancer-completed-projects');
Route::get('/freelancer-dashboard', function () {
    return view('freelancer-dashboard');
})->name('freelancer-dashboard');
Route::get('/freelancer-delete-account', function () {
    return view('freelancer-delete-account');
})->name('freelancer-delete-account');
Route::get('/freelancer-favourites', function () {
    return view('freelancer-favourites');
})->name('freelancer-favourites');
Route::get('/freelancer-files', function () {
    return view('freelancer-files');
})->name('freelancer-files');
Route::get('/freelancer-invitations', function () {
    return view('freelancer-invitations');
})->name('freelancer-invitations');
Route::get('/freelancer-membership', function () {
    return view('freelancer-membership');
})->name('freelancer-membership');
Route::get('/freelancer-milestones', function () {
    return view('freelancer-milestones');
})->name('freelancer-milestones');
Route::get('/freelancer-ongoing-projects', function () {
    return view('freelancer-ongoing-projects');
})->name('freelancer-ongoing-projects');
Route::get('/freelancer-payment', function () {
    return view('freelancer-payment');
})->name('freelancer-payment');
Route::get('/freelancer-portfolio', function () {
    return view('freelancer-portfolio');
})->name('freelancer-portfolio');
Route::get('/freelancer-profile-settings', function () {
    return view('freelancer-profile-settings');
})->name('freelancer-profile-settings');
Route::get('/freelancer-profile', function () {
    return view('freelancer-profile');
})->name('freelancer-profile');
Route::get('/freelancer-project-proposals', function () {
    return view('freelancer-project-proposals');
})->name('freelancer-project-proposals');
Route::get('/freelancer-review', function () {
    return view('freelancer-review');
})->name('freelancer-review');
Route::get('/freelancer-task', function () {
    return view('freelancer-task');
})->name('freelancer-task');
Route::get('/freelancer-verify-identity', function () {
    return view('freelancer-verify-identity');
})->name('freelancer-verify-identity');
Route::get('/freelancer-view-project-detail', function () {
    return view('freelancer-view-project-detail');
})->name('freelancer-view-project-detail');
Route::get('/freelancer-withdraw-money', function () {
    return view('freelancer-withdraw-money');
})->name('freelancer-withdraw-money');
Route::get('/invited-freelancer', function () {
    return view('invited-freelancer');
})->name('invited-freelancer');

Route::get('/manage-projects', function () {
    return view('manage-projects');
})->name('manage-projects');
Route::get('/membership-plans', function () {
    return view('membership-plans');
})->name('membership-plans');
Route::get('/milestones', function () {
    return view('milestones');
})->name('milestones');
Route::get('/ongoing-projects', function () {
    return view('ongoing-projects');
})->name('ongoing-projects');
Route::get('/pending-projects', function () {
    return view('pending-projects');
})->name('pending-projects');
Route::get('/post-job', function () {
    return view('post-job');
})->name('post-job');
Route::get('/post-project', function () {
    return view('post-project');
})->name('post-project');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
Route::get('/profile-settings', function () {
    return view('profile-settings');
})->name('profile-settings');
Route::get('/project-details', function () {
    return view('project-details');
})->name('project-details');
Route::get('/project-payment', function () {
    return view('project-payment');
})->name('project-payment');
Route::get('/project-proposals', function () {
    return view('project-proposals');
})->name('project-proposals');
Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/review', function () {
    return view('review');
})->name('review');
Route::get('/tasks', function () {
    return view('tasks');
})->name('tasks');
Route::get('/term-condition', function () {
    return view('term-condition');
})->name('term-condition');

Route::get('/user-account-details', function () {
    return view('user-account-details');
})->name('user-account-details');
Route::get('/verify-identity', function () {
    return view('verify-identity');
})->name('verify-identity');
Route::get('/view-profile', function () {
    return view('view-profile');
})->name('view-profile');
Route::get('/view-project-detail', function () {
    return view('view-project-detail');
})->name('view-project-detail');
Route::get('/view-proposals', function () {
    return view('view-proposals');
})->name('view-proposals');
Route::get('/completed-projects-view-details', function () {
    return view('completed-projects-view-details');
})->name('completed-projects-view-details');
Route::get('/project-employer-view-proposal', function () {
    return view('project-employer-view-proposal');
})->name('project-employer-view-proposal');

Route::get('/expired-projects', function () {
    return view('expired-projects');
})->name('expired-projects');
Route::get('/freelancer-payout', function () {
    return view('freelancer-payout');
})->name('freelancer-payout');
Route::get('/freelancer-statement', function () {
    return view('freelancer-statement');
})->name('freelancer-statement');
Route::get('/completed-projects-milestones', function () {
    return view('completed-projects-milestones');
})->name('completed-projects-milestones');
Route::get('/completed-projects-tasks', function () {
    return view('completed-projects-tasks');
})->name('completed-projects-tasks');
Route::get('/completed-projects-files', function () {
    return view('completed-projects-files');
})->name('completed-projects-files');
Route::get('/completed-projects-project-payment', function () {
    return view('completed-projects-project-payment');
})->name('completed-projects-project-payment');
Route::get('/freelancer-verified', function () {
    return view('freelancer-verified');
})->name('freelancer-verified');

Route::get('/project-conformation', function () {
    return view('project-conformation');
})->name('project-conformation');
Route::get('/notification', function () {
    return view('notification');
})->name('notification');



/*****************ADMIN ROUTES*******************/
Route::Group(['prefix' => 'admin'], function () {
    Route::get('/activities', function () {
        return view('admin.activities');
    })->name('activities');
    Route::get('/deposit', function () {
        return view('admin.deposit');
    })->name('deposit');
    Route::get('/deposit-cancelled', function () {
        return view('admin.deposit-cancelled');
    })->name('deposit-cancelled');
    Route::get('/deposit-completed', function () {
        return view('admin.deposit-completed');
    })->name('deposit-completed');
    Route::get('/deposit-hold', function () {
        return view('admin.deposit-hold');
    })->name('deposit-hold');
    Route::get('/deposit-pending', function () {
        return view('admin.deposit-pending');
    })->name('deposit-pending');
    Route::get('/earning-employer', function () {
        return view('admin.earning-employer');
    })->name('earning-employer');
    Route::get('/earning-freelancer', function () {
        return view('admin.earning-freelancer');
    })->name('earning-freelancer');
    Route::get('/employe-list', function () {
        return view('admin.employe-list');
    })->name('employe-list');
    Route::get('/freelance-list', function () {
        return view('admin.freelance-list');
    })->name('freelance-list');
    Route::get('/profile-transactions', function () {
        return view('admin.profile-transactions');
    })->name('profile-transactions');
    Route::get('/project-bidding', function () {
        return view('admin.project-bidding');
    })->name('project-bidding');
    Route::get('/project-earnings', function () {
        return view('admin.project-earnings');
    })->name('project-earnings');
    Route::get('/project-invoice', function () {
        return view('admin.project-invoice');
    })->name('project-invoice');
    Route::get('/subscripe-freelancer', function () {
        return view('admin.subscripe-freelancer');
    })->name('subscripe-freelancer');
    Route::get('/subscription', function () {
        return view('admin.subscription');
    })->name('subscription');
    Route::get('/transaction-completed', function () {
        return view('admin.transaction-completed');
    })->name('transaction-completed');
    Route::get('/transaction-deposit', function () {
        return view('admin.transaction-deposit');
    })->name('transaction-deposit');
    Route::get('/transaction-onhold', function () {
        return view('admin.transaction-onhold');
    })->name('transaction-onhold');
    Route::get('/transaction-pending', function () {
        return view('admin.transaction-pending');
    })->name('transaction-pending');
    Route::get('/transaction-withdraw', function () {
        return view('admin.transaction-withdraw');
    })->name('transaction-withdraw');
    Route::get('/transaction', function () {
        return view('admin.transaction');
    })->name('transaction');
    Route::get('/user-active', function () {
        return view('admin.user-active');
    })->name('user-active');
    Route::get('/user-administrator', function () {
        return view('admin.user-administrator');
    })->name('user-administrator');
    Route::get('/user-inactive', function () {
        return view('admin.user-inactive');
    })->name('user-inactive');
    Route::get('/user-profile', function () {
        return view('admin.user-profile');
    })->name('user-profile');
    Route::get('/user-suspended', function () {
        return view('admin.user-suspended');
    })->name('user-suspended');
    Route::get('/view-price-employe', function () {
        return view('admin.view-price-employe');
    })->name('view-price-employe');
    Route::get('/view-price-freelance', function () {
        return view('admin.view-price-freelance');
    })->name('view-price-freelance');
    Route::get('/withdrawn-cancelled', function () {
        return view('admin.withdrawn-cancelled');
    })->name('withdrawn-cancelled');
    Route::get('/withdrawn-completed', function () {
        return view('admin.withdrawn-completed');
    })->name('withdrawn-completed');
    Route::get('/withdrawn-pending', function () {
        return view('admin.withdrawn-pending');
    })->name('withdrawn-pending');
    Route::get('/withdrawn', function () {
        return view('admin.withdrawn');
    })->name('withdrawn');
    Route::get('/bid-fees', function () {
        return view('admin.bid-fees');
    })->name('bid-fees');
    Route::get('/categories', function () {
        return view('admin.categories');
    })->name('categories');
    Route::get('/change-password', function () {
        return view('admin.change-password');
    })->name('change-password');
    Route::get('/components', function () {
        return view('admin.components');
    })->name('components');
    Route::get('/contest-entry-fees', function () {
        return view('admin.contest-entry-fees');
    })->name('contest-entry-fees');
    Route::get('/contests-fees', function () {
        return view('admin.contests-fees');
    })->name('contests-fees');
    Route::get('/data-tables', function () {
        return view('admin.data-tables');
    })->name('data-tables');
    Route::get('/delete-account', function () {
        return view('admin.delete-account');
    })->name('delete-account');
    Route::get('/email-settings', function () {
        return view('admin.email-settings');
    })->name('email-settings');
    Route::get('/fees', function () {
        return view('admin.fees');
    })->name('fees');
    Route::get('/forgot-password', function () {
        return view('admin.forgot-password');
    })->name('forgot-password');
    Route::get('/form-basic-inputs', function () {
        return view('admin.form-basic-inputs');
    })->name('form-basic-inputs');
    Route::get('/form-horizontal', function () {
        return view('admin.form-horizontal');
    })->name('form-horizontal');
    Route::get('/form-input-groups', function () {
        return view('admin.form-input-groups');
    })->name('form-input-groups');
    Route::get('/form-mask', function () {
        return view('admin.form-mask');
    })->name('form-mask');
    Route::get('/form-validation', function () {
        return view('admin.form-validation');
    })->name('form-validation');
    Route::get('/form-vertical', function () {
        return view('admin.form-vertical');
    })->name('form-vertical');
    Route::get('/index_admin', function () {
        return view('admin.index_admin');
    })->name('index_admin');
    Route::get('/localization-details', function () {
        return view('admin.localization-details');
    })->name('localization-details');
    Route::get('/others-settings', function () {
        return view('admin.others-settings');
    })->name('others-settings');
    Route::get('/payment-settings', function () {
        return view('admin.payment-settings');
    })->name('payment-settings');
    Route::get('/payment-settings', function () {
        return view('admin.payment-settings');
    })->name('payment-settings');
    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('profile');
    Route::get('/projects', function () {
        return view('admin.projects');
    })->name('projects');
    Route::get('/projects-fees', function () {
        return view('admin.projects-fees');
    })->name('projects-fees');
    Route::get('/providers', function () {
        return view('admin.providers');
    })->name('providers');
    Route::get('/register', function () {
        return view('admin.register');
    })->name('admin.register');
    Route::get('/reports', function () {
        return view('admin.reports');
    })->name('reports');
    Route::get('/roles', function () {
        return view('admin.roles');
    })->name('roles');
    Route::get('/roles-permission', function () {
        return view('admin.roles-permission');
    })->name('roles-permission');
    Route::get('/seo-settings', function () {
        return view('admin.seo-settings');
    })->name('seo-settings');
    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('settings');
    Route::get('/skills', function () {
        return view('admin.skills');
    })->name('skills');
    Route::get('/social-links', function () {
        return view('admin.social-links');
    })->name('social-links');
    Route::get('/social-settings', function () {
        return view('admin.social-settings');
    })->name('social-settings');
    Route::get('/sub-category', function () {
        return view('admin.sub-category');
    })->name('sub-category');
    Route::get('/tables-basic', function () {
        return view('admin.tables-basic');
    })->name('tables-basic');
    Route::get('/taxs', function () {
        return view('admin.taxs');
    })->name('taxs');
    Route::get('/tax-types', function () {
        return view('admin.tax-types');
    })->name('tax-types');
    Route::get('/users', function () {
        return view('admin.users');
    })->name('users');
    Route::get('/verify-identity', function () {
        return view('admin.verify-identity');
    })->name('verify-identity');
    Route::get('/view-estimate', function () {
        return view('admin.view-estimate');
    })->name('view-estimate');
    Route::get('/view-invoice', function () {
        return view('admin.view-invoice');
    })->name('view-invoice');
});
