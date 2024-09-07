<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('{slug?}', [App\Http\Controllers\TempPageController::class, 'index']);
Route::get('test/{lang?}', [App\Http\Controllers\TestController::class, 'index']);
Route::get('pages/vacancies', [App\Http\Controllers\Pages\VacancyController::class, 'index']);
Route::get('/personal-account/{user_id}', [App\Http\Controllers\Cabinet\UserController::class, 'index'])
    ->name('personal.account');
Route::post('send-sms', [App\Http\Controllers\SmsController::class, 'sendSms']);
Route::post('send-code-email', [App\Http\Controllers\Cabinet\UserController::class, 'sendCodeEmail']);
Route::post('cofirm-sms', [App\Http\Controllers\SmsController::class, 'confirmSms']);
Route::post('cofirm-email-code', [App\Http\Controllers\Cabinet\UserController::class, 'confirmCode']);