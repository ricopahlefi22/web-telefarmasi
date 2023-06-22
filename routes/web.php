<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\Auth\AuthAdminController;
use App\Http\Controllers\Auth\AuthUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['domain' => 'admin.'.env('DOMAIN')], function () {
    Route::controller(AuthAdminController::class)->group(function () {
        Route::get('/', 'login')->name('login');
        Route::post('login', 'loginProcess');
        Route::get('logout', 'logout');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'dashboard']);

        Route::get('chats', [ChatController::class, 'index']);

        Route::controller(AboutUsController::class)->group(function(){
            Route::get('about', 'admin');
            Route::post('about/store', 'store');
        });

        Route::controller(ContactController::class)->group(function(){
            Route::get('contact', 'admin');
            Route::post('contact/store', 'store');
        });

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

        Route::prefix('products')->controller(ProductController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('create', 'create');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::post('publish', 'publish');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('product-categories')->controller(ProductCategoryController::class)->group(function () {
            Route::get('/', 'index');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('articles')->controller(ArticleController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('create', 'create');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::post('publish', 'publish');
            Route::post('cancel-publish', 'cancelPublish');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('article-categories')->controller(ArticleCategoryController::class)->group(function () {
            Route::get('/', 'index');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::delete('destroy', 'destroy');
        });
    });
});



/*
|--------------------------------------------------------------------------
| Landing Page and Website Routes
|--------------------------------------------------------------------------
*/
Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('articles/{slug}', 'detail');
});

Route::controller(AboutUsController::class)->group(function () {
    Route::get('about', 'about');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('contact', 'contact');
});

Route::controller(AuthUserController::class)->group(function () {
    Route::get('login', 'login');
});

Route::prefix('auth')->controller(SocialiteController::class)->group(function () {
    Route::get('{provider}', 'redirectToProvider');
    Route::get('{provider}/callback', 'handleProviderCallback');
});
