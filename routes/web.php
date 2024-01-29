<?php

use App\Http\Controllers\Dashboard\ActionController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\FocusController;
use App\Http\Controllers\Dashboard\NewsCategoryController;
use App\Http\Controllers\Dashboard\NewsController as DashboardNewsController;
use App\Http\Controllers\Dashboard\OrganizationController;
use App\Http\Controllers\Dashboard\PasswordController;
use App\Http\Controllers\Dashboard\ProjectController as DashboardProjectController;
use App\Http\Controllers\Dashboard\PublicationCategoryController;
use App\Http\Controllers\Dashboard\PublicationController as DashboardPublicationController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\TestimonialContoller;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\VolunteerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PublicationController;
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

// Route::get('/', function () {
//     return view('layouts.main-layout');
// });

Route::get('/masuk', [LoginController::class, 'login'])->middleware('guest')->name('login.index');
Route::post('/masuk', [LoginController::class, 'process'])->middleware('guest')->name('login.process');
Route::post('/keluar', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/', HomeController::class)->name('home');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/detail/{slug}', [NewsController::class, 'detail'])->name('news-detail');
Route::get('/news/category/{slug}', [NewsController::class, 'newsByCategory'])->name('news-by-category');

Route::get('/publication', [PublicationController::class, 'index'])->name('publication');
Route::get('/publication/detail/{slug}', [PublicationController::class, 'detail'])->name('publication-detail');

Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/project/detail/{slug}', [ProjectController::class, 'detail'])->name('project-detail');
Route::get('/project/register/{slug}', [ProjectController::class, 'registerProject'])->name('register-project');
Route::post('/project/register/store', [ProjectController::class, 'registerProjectProcess'])->name('register-project-store');
Route::get('/success', [ProjectController::class, 'successRegister'])->name('register-project-success');

// ==========================================================================================

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::get('/dashboard/organization', [OrganizationController::class, 'index'])
        ->name('organization.index')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::get('/dashboard/organization/add', [OrganizationController::class, 'create'])
        ->name('organization.create')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::post('/dashboard/organization/store', [OrganizationController::class, 'store'])
        ->name('organization.store')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::get('/dashboard/organization/edit/{id}', [OrganizationController::class, 'edit'])
        ->name('organization.edit')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::put('/dashboard/organization/update/{id}', [OrganizationController::class, 'update'])
        ->name('organization.update')
        ->middleware('checkRole:SUPER_ADMIN');

    Route::get('/dashboard/action', [ActionController::class, 'index'])
        ->name('action.index')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::get('/dashboard/action/add', [ActionController::class, 'create'])
        ->name('action.create')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::post('/dashboard/action/store', [ActionController::class, 'store'])
        ->name('action.store')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::get('/dashboard/action/edit/{id}', [ActionController::class, 'edit'])
        ->name('action.edit')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::put('/dashboard/action/update/{id}', [ActionController::class, 'update'])
        ->name('action.update')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::delete('/dashboard/acrion/delete/{id}', [ActionController::class, 'destroy'])
        ->name('action.destroy')
        ->middleware('checkRole:SUPER_ADMIN');

    Route::get('/dashboard/focus', [FocusController::class, 'index'])
        ->name('focus.index')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::get('/dashboard/focus/add', [FocusController::class, 'create'])
        ->name('focus.create')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::post('/dashboard/focus/store', [FocusController::class, 'store'])
        ->name('focus.store')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::get('/dashboard/focus/edit/{id}', [FocusController::class, 'edit'])
        ->name('focus.edit')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::put('/dashboard/focus/update/{id}', [FocusController::class, 'update'])
        ->name('focus.update')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::delete('/dashboard/focus/delete/{id}', [FocusController::class, 'destory'])
        ->name('focus.destory')
        ->middleware('checkRole:SUPER_ADMIN');

    Route::get('/dashboard/news', [DashboardNewsController::class, 'index'])->name('news.index');
    Route::get('/dashboard/news/add', [DashboardNewsController::class, 'create'])->name('news.create');
    Route::post('/dashboard/news/store', [DashboardNewsController::class, 'store'])->name('news.store');
    Route::get('/dashboard/news/edit/{id}', [DashboardNewsController::class, 'edit'])->name('news.edit');
    Route::put('/dashboard/news/update/{id}', [DashboardNewsController::class, 'update'])->name('news.update');
    Route::delete('/dashboard/news/delete/{id}', [DashboardNewsController::class, 'destroy'])->name('news.destory');

    Route::get('/dashboard/news/category', [NewsCategoryController::class, 'index'])->name('news.category.index');
    Route::get('/dashboard/news/category/add', [NewsCategoryController::class, 'create'])->name('news.category.create');
    Route::post('/dashboard/news/category/store', [NewsCategoryController::class, 'store'])->name('news.category.store');
    Route::get('/dashboard/news/category/edit/{id}', [NewsCategoryController::class, 'edit'])->name('news.category.edit');
    Route::put('/dashboard/news/category/update/{id}', [NewsCategoryController::class, 'update'])->name('news.category.update');
    Route::delete('/dashboard/news/category/delete/{id}', [NewsCategoryController::class, 'destroy'])->name('news.category.destroy');

    Route::get('/dashboard/publication', [DashboardPublicationController::class, 'index'])->name('publication.index');
    Route::get('/dashboard/publication/add', [DashboardPublicationController::class, 'create'])->name('publication.create');
    Route::post('/dashboard/publication/store', [DashboardPublicationController::class, 'store'])->name('publication.store');
    Route::get('/dashboard/publication/edit/{id}', [DashboardPublicationController::class, 'edit'])->name('publication.edit');
    Route::put('/dashboard/publication/update/{id}', [DashboardPublicationController::class, 'update'])->name('publication.update');
    Route::delete('/dashboard/publication/delete/{id}', [DashboardPublicationController::class, 'destroy'])->name('publication.destroy');

    Route::get('/dashboard/publication/category', [PublicationCategoryController::class, 'index'])->name('publication.category.index');
    Route::get('/dashboard/publication/category/add', [PublicationCategoryController::class, 'create'])->name('publication.category.create');
    Route::post('/dashboard/publication/category/store', [PublicationCategoryController::class, 'store'])->name('publication.category.store');
    Route::get('/dashboard/publication/category/edit/{id}', [PublicationCategoryController::class, 'edit'])->name('publication.category.edit');
    Route::put('/dashboard/publication/category/update/{id}', [PublicationCategoryController::class, 'update'])->name('publication.category.update');
    Route::delete('/dashboard/publication/category/delete/{id}', [PublicationCategoryController::class, 'destroy'])->name('publication.category.destroy');

    Route::get('/dashboard/project', [DashboardProjectController::class, 'index'])->name('project.index');
    Route::get('/dashboard/project/add', [DashboardProjectController::class, 'create'])->name('project.create');
    Route::post('/dashboard/project/store', [DashboardProjectController::class, 'store'])->name('project.store');
    Route::get('/dashboard/project/edit/{id}', [DashboardProjectController::class, 'edit'])->name('project.edit');
    Route::put('/dashboard/project/update/{id}', [DashboardProjectController::class, 'update'])->name('project.update');
    Route::delete('/dashboard/project/delete/{id}', [DashboardProjectController::class, 'destroy'])->name('project.destroy');

    Route::get('/dashboard/volunteer', [VolunteerController::class, 'index'])->name('volunteer.index');
    Route::get('/dashboard/volunteer/detail/{id}', [VolunteerController::class, 'show'])->name('volunteer.show');

    Route::get('/dashboard/user', [UserController::class, 'index'])
        ->name('user.index')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::get('/dashboard/user/create', [UserController::class, 'create'])
        ->name('user.create')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::post('/dashboard/user/store', [UserController::class, 'store'])
        ->name('user.store')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::get('/dashboard/user/edit/{id}', [UserController::class, 'edit'])
        ->name('user.edit')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::put('/dashboard/user/update/{id}', [UserController::class, 'update'])
        ->name('user.update')
        ->middleware('checkRole:SUPER_ADMIN');
    Route::delete('/dashboard/user/delete/{id}', [UserController::class, 'destroy'])
        ->name('user.destroy')
        ->middleware('checkRole:SUPER_ADMIN');

    Route::get('/dashboard/testi', [TestimonialContoller::class, 'index'])->name('testi.index');
    Route::get('/dashboard/testi/create', [TestimonialContoller::class, 'create'])->name('testi.create');
    Route::post('/dashboard/testi/store', [TestimonialContoller::class, 'store'])->name('testi.store');
    Route::get('/dashboard/testi/edit/{id}', [TestimonialContoller::class, 'edit'])->name('testi.edit');
    Route::put('/dashboard/testi/update/{id}', [TestimonialContoller::class, 'update'])->name('testi.update');
    Route::delete('/dashboard/testi/delete/{id}', [TestimonialContoller::class, 'destroy'])->name('testi.destroy');

    Route::get('/dashboard/settings/setting-account', [SettingController::class, 'index'])->name('setting.index');
    Route::put('/dashboard/settings/setting-account/update', [SettingController::class, 'update'])->name('setting.update');

    Route::get('/dashboard/settings/change-password', [PasswordController::class, 'index'])->name('password.index');
    Route::put('/dashboard/settings/change-password/update', [PasswordController::class, 'update'])->name('password.update');
});
