<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
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
            });
    });
