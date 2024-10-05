<?php

use App\Http\Controllers\Auth\AuthLoginController;
use App\Http\Controllers\Auth\AuthRegisterController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

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

include_once __DIR__ . '/custom/web/admin_routes.php';
include_once __DIR__ . '/custom/web/freelancer_routes.php';
include_once __DIR__ . '/custom/web/employer_routes.php';

// Auth-related routes
Route::get('/login', static fn() => view('login'))->name('login');

Route::post('/login', AuthLoginController::class)->name('login');
Route::get('/register', static fn() => view('register'))->name('register');
Route::post('/register', AuthRegisterController::class)->name('register');

Route::middleware('auth')->group(function () {
    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['auth','signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/logout', static function (){
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});


// Route::get('index_admin', [CustomAuthController::class, 'dashboard']);
// Route::get('admin/login', [CustomAuthController::class, 'index'])->name('admin/login');
// Route::post('admin/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
// Route::get('admin/register', [CustomAuthController::class, 'registration'])->name('admin/register');
// Route::post('admin/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');




Route::get('/', static fn() => view('index'))->name('pagee');
Route::get('/home', static fn() => view('index'))->name('pagee');
Route::get('/index', static fn() => view('index'))->name('pagee');
Route::get('/404-page', static fn() => view('404-page'))->name('404-page');
Route::get('/about', static fn() => view('about'))->name('about');
Route::get('/blank-page', static fn() => view('blank-page'))->name('blank-page');
Route::get('/blog-details', static fn() => view('blog-details'))->name('blog-details');
Route::get('/blog-grid', static fn() => view('blog-grid'))->name('blog-grid');
Route::get('/blog-list', static fn() => view('blog-list'))->name('blog-list');
Route::get('/cancelled-projects', static fn() => view('cancelled-projects'))->name('cancelled-projects');
Route::get('/change-password', static fn() => view('change-password'))->name('change-password');
Route::get('/change-passwords', static fn() => view('change-passwords'))->name('change-passwords');
Route::get('/chats', static fn() => view('chats'))->name('chats');
Route::get('/otp', static fn() => view('otp'))->name('otp');
Route::get('/project-list', static fn() => view('project-list'))->name('project-list');
Route::get('/reset-password', static fn() => view('reset-password'))->name('reset-password');
Route::get('/company-gallery', static fn() => view('company-gallery'))->name('company-gallery');
Route::get('/company-profile', static fn() => view('company-profile'))->name('company-profile');
Route::get('/company-project', static fn() => view('company-project'))->name('company-project');
Route::get('/company-review', static fn() => view('company-review'))->name('company-review');
Route::get('/developer-list', static fn() => view('developer-list'))->name('developer-list');
Route::get('/developer-profile', static fn() => view('developer-profile'))->name('developer-profile');
Route::get('/index-five', static fn() => view('index-five'))->name('index-five');
Route::get('/index-four', static fn() => view('index-four'))->name('index-four');
Route::get('/index-three', static fn() => view('index-three'))->name('index-three');
Route::get('/index-two', static fn() => view('index-two'))->name('index-two');
Route::get('/invited-favourites', static fn() => view('invited-favourites'))->name('invited-favourites');

Route::get('/completed-projects', static fn() => view('completed-projects'))->name('completed-projects');

Route::get('/delete-account', static fn() => view('delete-account'))->name('delete-account');
Route::get('/deposit-funds', static fn() => view('deposit-funds'))->name('deposit-funds');
Route::get('/developer-details', static fn() => view('developer-details'))->name('developer-details');
Route::get('/developer', static fn() => view('developer'))->name('developer');
Route::get('/edit-project', static fn() => view('edit-project'))->name('edit-project');
Route::get('/faq', static fn() => view('faq'))->name('faq');
Route::get('/favourites', static fn() => view('favourites'))->name('favourites');
Route::get('/files', static fn() => view('files'))->name('files');
Route::get('/forgot-password', static fn() => view('forgot-password'))->name('forgot-password');
Route::get('/invited-freelancer', static fn() => view('invited-freelancer'))->name('invited-freelancer');

Route::get('/manage-projects', static fn() => view('manage-projects'))->name('manage-projects');
Route::get('/membership-plans', static fn() => view('membership-plans'))->name('membership-plans');
Route::get('/milestones', static fn() => view('milestones'))->name('milestones');
Route::get('/ongoing-projects', static fn() => view('ongoing-projects'))->name('ongoing-projects');
Route::get('/pending-projects', static fn() => view('pending-projects'))->name('pending-projects');
Route::get('/post-job', static fn() => view('post-job'))->name('post-job');
Route::get('/post-project', static fn() => view('post-project'))->name('post-project');
Route::get('/privacy-policy', static fn() => view('privacy-policy'))->name('privacy-policy');
Route::get('/profile-settings', static fn() => view('profile-settings'))->name('profile-settings');
Route::get('/project-details', static fn() => view('project-details'))->name('project-details');
Route::get('/project-payment', static fn() => view('project-payment'))->name('project-payment');
Route::get('/project-proposals', static fn() => view('project-proposals'))->name('project-proposals');
Route::get('/project', static fn() => view('project'))->name('project');

Route::get('/review', static fn() => view('review'))->name('review');
Route::get('/tasks', static fn() => view('tasks'))->name('tasks');
Route::get('/term-condition', static fn() => view('term-condition'))->name('term-condition');

Route::get('/user-account-details', static fn() => view('user-account-details'))->name('user-account-details');
Route::get('/verify-identity', static fn() => view('verify-identity'))->name('verify-identity');
Route::get('/view-profile', static fn() => view('view-profile'))->name('view-profile');
Route::get('/view-project-detail', static fn() => view('view-project-detail'))->name('view-project-detail');
Route::get('/view-proposals', static fn() => view('view-proposals'))->name('view-proposals');
Route::get('/completed-projects-view-details', static fn() => view('completed-projects-view-details'))->name('completed-projects-view-details');
Route::get('/project-employer-view-proposal', static fn() => view('project-employer-view-proposal'))->name('project-employer-view-proposal');

Route::get('/expired-projects', static fn() => view('expired-projects'))->name('expired-projects');
Route::get('/completed-projects-milestones', static fn() => view('completed-projects-milestones'))->name('completed-projects-milestones');
Route::get('/completed-projects-tasks', static fn() => view('completed-projects-tasks'))->name('completed-projects-tasks');
Route::get('/completed-projects-files', static fn() => view('completed-projects-files'))->name('completed-projects-files');
Route::get('/completed-projects-project-payment', static fn() => view('completed-projects-project-payment'))->name('completed-projects-project-payment');

Route::get('/project-conformation', static fn() => view('project-conformation'))->name('project-conformation');
Route::get('/notification', static fn() => view('notification'))->name('notification');



/*****************ADMIN ROUTES*******************/
Route::Group(['prefix' => 'admin'], static function () {
    Route::get('/activities', static fn() => view('admin.activities'))->name('activities');
    Route::get('/deposit', static fn() => view('admin.deposit'))->name('deposit');
    Route::get('/deposit-cancelled', static fn() => view('admin.deposit-cancelled'))->name('deposit-cancelled');
    Route::get('/deposit-completed', static fn() => view('admin.deposit-completed'))->name('deposit-completed');
    Route::get('/deposit-hold', static fn() => view('admin.deposit-hold'))->name('deposit-hold');
    Route::get('/deposit-pending', static fn() => view('admin.deposit-pending'))->name('deposit-pending');
    Route::get('/earning-employer', static fn() => view('admin.earning-employer'))->name('earning-employer');
    Route::get('/earning-freelancer', static fn() => view('admin.earning-freelancer'))->name('earning-freelancer');
    Route::get('/employe-list', static fn() => view('admin.employe-list'))->name('employe-list');
    Route::get('/freelance-list', static fn() => view('admin.freelance-list'))->name('freelance-list');
    Route::get('/profile-transactions', static fn() => view('admin.profile-transactions'))->name('profile-transactions');
    Route::get('/project-bidding', static fn() => view('admin.project-bidding'))->name('project-bidding');
    Route::get('/project-earnings', static fn() => view('admin.project-earnings'))->name('project-earnings');
    Route::get('/project-invoice', static fn() => view('admin.project-invoice'))->name('project-invoice');
    Route::get('/subscripe-freelancer', static fn() => view('admin.subscripe-freelancer'))->name('subscripe-freelancer');
    Route::get('/subscription', static fn() => view('admin.subscription'))->name('subscription');
    Route::get('/transaction-completed', static fn() => view('admin.transaction-completed'))->name('transaction-completed');
    Route::get('/transaction-deposit', static fn() => view('admin.transaction-deposit'))->name('transaction-deposit');
    Route::get('/transaction-onhold', static fn() => view('admin.transaction-onhold'))->name('transaction-onhold');
    Route::get('/transaction-pending', static fn() => view('admin.transaction-pending'))->name('transaction-pending');
    Route::get('/transaction-withdraw', static fn() => view('admin.transaction-withdraw'))->name('transaction-withdraw');
    Route::get('/transaction', static fn() => view('admin.transaction'))->name('transaction');
    Route::get('/user-active', static fn() => view('admin.user-active'))->name('user-active');
    Route::get('/user-administrator', static fn() => view('admin.user-administrator'))->name('user-administrator');
    Route::get('/user-inactive', static fn() => view('admin.user-inactive'))->name('user-inactive');
    Route::get('/user-profile', static fn() => view('admin.user-profile'))->name('user-profile');
    Route::get('/user-suspended', static fn() => view('admin.user-suspended'))->name('user-suspended');
    Route::get('/view-price-employe', static fn() => view('admin.view-price-employe'))->name('view-price-employe');
    Route::get('/view-price-freelance', static fn() => view('admin.view-price-freelance'))->name('view-price-freelance');
    Route::get('/withdrawn-cancelled', static fn() => view('admin.withdrawn-cancelled'))->name('withdrawn-cancelled');
    Route::get('/withdrawn-completed', static fn() => view('admin.withdrawn-completed'))->name('withdrawn-completed');
    Route::get('/withdrawn-pending', static fn() => view('admin.withdrawn-pending'))->name('withdrawn-pending');
    Route::get('/withdrawn', static fn() => view('admin.withdrawn'))->name('withdrawn');
    Route::get('/bid-fees', static fn() => view('admin.bid-fees'))->name('bid-fees');
    Route::get('/categories', static fn() => view('admin.categories'))->name('categories');
    Route::get('/change-password', static fn() => view('admin.change-password'))->name('change-password');
    Route::get('/components', static fn() => view('admin.components'))->name('components');
    Route::get('/contest-entry-fees', static fn() => view('admin.contest-entry-fees'))->name('contest-entry-fees');
    Route::get('/contests-fees', static fn() => view('admin.contests-fees'))->name('contests-fees');
    Route::get('/data-tables', static fn() => view('admin.data-tables'))->name('data-tables');
    Route::get('/delete-account', static fn() => view('admin.delete-account'))->name('delete-account');
    Route::get('/email-settings', static fn() => view('admin.email-settings'))->name('email-settings');
    Route::get('/fees', static fn() => view('admin.fees'))->name('fees');
    Route::get('/forgot-password', static fn() => view('admin.forgot-password'))->name('forgot-password');
    Route::get('/form-basic-inputs', static fn() => view('admin.form-basic-inputs'))->name('form-basic-inputs');
    Route::get('/form-horizontal', static fn() => view('admin.form-horizontal'))->name('form-horizontal');
    Route::get('/form-input-groups', static fn() => view('admin.form-input-groups'))->name('form-input-groups');
    Route::get('/form-mask', static fn() => view('admin.form-mask'))->name('form-mask');
    Route::get('/form-validation', static fn() => view('admin.form-validation'))->name('form-validation');
    Route::get('/form-vertical', static fn() => view('admin.form-vertical'))->name('form-vertical');
    Route::get('/index_admin', static fn() => view('admin.index_admin'))->name('index_admin');
    Route::get('/localization-details', static fn() => view('admin.localization-details'))->name('localization-details');
    Route::get('/others-settings', static fn() => view('admin.others-settings'))->name('others-settings');
    Route::get('/payment-settings', static fn() => view('admin.payment-settings'))->name('payment-settings');
    Route::get('/payment-settings', static fn() => view('admin.payment-settings'))->name('payment-settings');
    Route::get('/profile', static fn() => view('admin.profile'))->name('profile');
    Route::get('/projects', static fn() => view('admin.projects'))->name('projects');
    Route::get('/projects-fees', static fn() => view('admin.projects-fees'))->name('projects-fees');
    Route::get('/providers', static fn() => view('admin.providers'))->name('providers');
    Route::get('/reports', static fn() => view('admin.reports'))->name('reports');
    Route::get('/roles', static fn() => view('admin.roles'))->name('roles');
    Route::get('/roles-permission', static fn() => view('admin.roles-permission'))->name('roles-permission');
    Route::get('/seo-settings', static fn() => view('admin.seo-settings'))->name('seo-settings');
    Route::get('/settings', static fn() => view('admin.settings'))->name('settings');
    Route::get('/skills', static fn() => view('admin.skills'))->name('skills');
    Route::get('/social-links', static fn() => view('admin.social-links'))->name('social-links');
    Route::get('/social-settings', static fn() => view('admin.social-settings'))->name('social-settings');
    Route::get('/sub-category', static fn() => view('admin.sub-category'))->name('sub-category');
    Route::get('/tables-basic', static fn() => view('admin.tables-basic'))->name('tables-basic');
    Route::get('/taxs', static fn() => view('admin.taxs'))->name('taxs');
    Route::get('/tax-types', static fn() => view('admin.tax-types'))->name('tax-types');
    Route::get('/users', static fn() => view('admin.users'))->name('users');
    Route::get('/verify-identity', static fn() => view('admin.verify-identity'))->name('verify-identity');
    Route::get('/view-estimate', static fn() => view('admin.view-estimate'))->name('view-estimate');
    Route::get('/view-invoice', static fn() => view('admin.view-invoice'))->name('view-invoice');
});
