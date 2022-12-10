<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('pagebuilder')->group(function() {
    Route::get('/', 'PageBuilderController@index');
});

Route::prefix('page')->group(function() {
    Route::get('/{alias}', 'PageBuilderController@page');
});
