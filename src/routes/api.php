<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ServiceAuth;

Route::prefix('services')
    ->middleware([ServiceAuth::class])
    ->group(function () {
        Route::put('/orders/{id}', [\App\Http\Controllers\API\OrderController::class, 'update']);
    });