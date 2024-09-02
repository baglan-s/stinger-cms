<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('{slug?}', [App\Http\Controllers\TempPageController::class, 'index']);
Route::get('test/{lang?}', [App\Http\Controllers\TestController::class, 'index']);
Route::get('pages/vacancies', [App\Http\Controllers\Pages\VacancyController::class, 'index']);
Route::get('/personal-account', function () {
    return view('pages.personal.account');
})->name('personal.account');