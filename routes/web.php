<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\Auth\AuthAdminController;
use App\Http\Controllers\Auth\AuthUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['domain' => 'admin.' . env('DOMAIN')], function () {
    Route::controller(AuthAdminController::class)->group(function () {
        Route::get('login', 'login')->name('login')->middleware('guest:admin');
        Route::post('login', 'loginProcess');
        Route::get('forgot-password', 'forgotPassword');
        Route::post('forgot-password', 'forgotPasswordProcess');
        Route::get('reset-password', 'resetPassword');
        Route::post('reset-password', 'resetPasswordProcess');
        Route::post('otp', 'otp');
        Route::get('logout', 'logout');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('/', [DashboardController::class, 'dashboard']);
        Route::get('dashboard', [DashboardController::class, 'dashboard']);


        Route::get('chats', [ChatController::class, 'index']);
        Route::post('chat/store', [ChatController::class, 'sendMessage']);
        Route::get('chat/read/{id}', [ChatController::class, 'readChat']);

        Route::controller(ProfileController::class)->group(function () {
            Route::get('profile', 'admin');
            Route::post('edit-profile', 'editProfileAdmin');
            Route::post('change-password', 'changePasswordAdmin');
        });

        Route::controller(AboutUsController::class)->group(function () {
            Route::get('about', 'admin');
            Route::post('about/store', 'store');
        });

        Route::controller(ContactController::class)->group(function () {
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

        Route::prefix('carts')->controller(CartController::class)->group(function () {
            Route::get('/', 'index');
            Route::post('check', 'check');
            Route::post('store', 'store');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('orders')->controller(OrderController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('detail/{id}', 'detail');
            Route::post('check', 'check');
            Route::post('change-status', 'changeStatus');
            Route::delete('destroy', 'destroy');
        });

        Route::prefix('products')->controller(ProductController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('create', 'create');
            Route::get('detail/{id}', 'detail');
            Route::get('edit/{id}', 'edit');
            Route::post('check', 'check');
            Route::post('store', 'store');
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
Route::controller(AuthUserController::class)->group(function () {
    Route::get('login', 'login')->name('login')->middleware('guest:user');
    Route::post('login', 'loginProcess');
    Route::get('register', 'register');
    Route::post('register', 'registerProcess');
    Route::get('forgot-password', 'forgotPassword');
    Route::post('forgot-password', 'forgotPasswordProcess');
    Route::get('reset-password', 'resetPassword');
    Route::post('reset-password', 'resetPasswordProcess');
    Route::post('otp', 'otp');
    Route::get('logout', 'logout');
});

Route::prefix('auth')->controller(SocialiteController::class)->group(function () {
    Route::get('{provider}', 'redirectToProvider');
    Route::get('{provider}/callback', 'handleProviderCallback');
});


Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'index');

    Route::get('articles', 'articles');
    Route::get('articles/category/{category}', 'categoryArticles');
    Route::get('articles/{slug}', 'detailArticle');

    Route::get('products', 'products');
    Route::get('products/category/{category}', 'categoryProducts');
    Route::get('products/detail/{id}', 'detailProduct');
    Route::post('products/check', 'checkProduct');
    Route::post('products/add-to-cart', 'addToCartProduct');
    Route::post('products/delete-to-cart', 'deleteToCartProduct');

    Route::middleware('auth:user')->group(function () {
        Route::controller(ProfileController::class)->group(function () {
            Route::get('profile', 'user');
            Route::post('edit-profile', 'editProfileUser');
            Route::post('change-password', 'changePasswordUser');
        });

        Route::get('orders', 'orders');
        Route::get('orders/invoice/{id}', 'ordersInvoice');

        Route::get('cart', 'cart');
        Route::get('chat', 'chat');
        Route::get('chat/read', 'readChat');
        Route::post('chat/store', [ChatController::class, 'sendMessage']);

        Route::post('make-order', 'makeOrder');
        Route::post('change-order-status', 'changeStatus');

        Route::post('checkout', 'checkout');
    });
});

Route::controller(AboutUsController::class)->group(function () {
    Route::get('about', 'about');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('contact', 'contact');
});
