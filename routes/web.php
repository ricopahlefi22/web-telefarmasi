<?php

use App\Http\Controllers\Auth\AuthAdminController;
use App\Http\Controllers\Auth\AuthUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
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

Route::group(['domain' => 'admin.localhost'], function () {
    Route::controller(AuthAdminController::class)->group(function () {
        Route::get('/', 'login')->name('login');
        Route::post('login', 'loginProcess');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'dashboard']);

        Route::prefix('administrators')->controller(AdminController::class)->group(function () {
            Route::get('/', 'index');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('users')->controller(UserController::class)->group(function () {
            Route::get('/', 'index');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('articles')->controller(ArticleController::class)->group(function () {
            Route::get('/', 'index');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('galleries')->controller(GalleryController::class)->group(function () {
            Route::get('/', 'index');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::delete('destroy', 'destroy');
        });
    });
});

Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'index');
});

Route::controller(AuthUserController::class)->group(function () {
    Route::get('login', 'login');
});

Route::prefix('u')->group(function () {
});
