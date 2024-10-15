<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('{slug?}', [App\Http\Controllers\TempPageController::class, 'index']);
Route::get('test/{lang?}', [App\Http\Controllers\TestController::class, 'index']);
Route::get('pages/vacancies', [App\Http\Controllers\Pages\VacancyController::class, 'index']);
Route::prefix('catalog')
    ->name('catalog.')
    ->group(function () {
        Route::prefix('categories')
            ->name('categories.')
            ->group(function () {
                Route::get('/', [App\Http\Controllers\Catalog\ProductCategoryController::class, 'index'])->name('index');
                Route::get('{slug}', [App\Http\Controllers\Catalog\ProductCategoryController::class, 'show'])->name('show');
            });

        Route::prefix('products')
            ->name('products.')
            ->group(function () {
                Route::get('/', [App\Http\Controllers\Catalog\ProductController::class, 'index'])->name('index');
                Route::get('{slug}', [App\Http\Controllers\Catalog\ProductController::class, 'show'])->name('show');
                Route::get('{productId}/{fileId}', [App\Http\Controllers\Catalog\ProductController::class, 'file'])->name('file');
            });

        Route::prefix('cart')
            ->name('cart.')
            ->group(function () {
                Route::get('/', [App\Http\Controllers\Catalog\CartController::class, 'index'])->name('index');
                Route::get('/checkout', [App\Http\Controllers\Catalog\CartController::class, 'checkout'])->name('checkout');
        });
});

Route::prefix('account')
    ->name('account.')
    ->middleware([App\Http\Middleware\Client::class])
    ->group(function () {
        Route::get('/{user_id}', [App\Http\Controllers\Cabinet\UserController::class, 'index'])
            ->name('index');
        Route::put('/{user_id}', [App\Http\Controllers\Cabinet\UserController::class, 'update'])
            ->name('update');
        Route::get('/{user_id}/orders', [App\Http\Controllers\Catalog\OrderController::class, 'userOrders'])
            ->name('orders');
        Route::get('/{user_id}/addresses', [App\Http\Controllers\Catalog\DeliveryAddressController::class, 'index'])
            ->name('addresses.index');
        Route::post('/{user_id}/addresses/{id}', [App\Http\Controllers\Catalog\DeliveryAddressController::class, 'create'])
            ->name('addresses.create');
        Route::put('/{user_id}/addresses/{id}', [App\Http\Controllers\Catalog\DeliveryAddressController::class, 'update'])
            ->name('addresses.update');
        Route::delete('/{user_id}/addresses/{id}', [App\Http\Controllers\Catalog\DeliveryAddressController::class, 'destroy'])
            ->name('addresses.delete');
        Route::get('logout', [App\Http\Controllers\Cabinet\UserController::class, 'personalAccountLogout'])
            ->name('logout');
    });

Route::post('send-sms', [App\Http\Controllers\SmsController::class, 'sendSms']);
Route::post('send-code-email', [App\Http\Controllers\Cabinet\UserController::class, 'sendCodeEmail']);
Route::post('cofirm-sms', [App\Http\Controllers\SmsController::class, 'confirmSms']);
Route::post('cofirm-email-code', [App\Http\Controllers\Cabinet\UserController::class, 'confirmCode']);
Route::post('user-register', [App\Http\Controllers\Cabinet\UserController::class, 'register'])->name('user.register');
Route::get('test-sms', [App\Http\Controllers\TestController::class, 'testSms']);
Route::get('auth-check', [App\Http\Controllers\Cabinet\UserController::class, 'authCheck'])->name('user.auth.check');
Route::get('comparison', [App\Http\Controllers\Pages\ComparisonController::class, 'index']);
Route::get('favourites', [App\Http\Controllers\Pages\FavouriteProductController::class, 'index']);
Route::post('send-feedback', [App\Http\Controllers\FeedbackController::class, 'sendFeedback']);
Route::get('shops', [App\Http\Controllers\Pages\ShopController::class, 'index']);
