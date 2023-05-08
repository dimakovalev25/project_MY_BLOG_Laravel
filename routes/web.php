<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'App\Http\Main'], function () {
    Route::get('/', IndexController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['namespace' => 'App\Http\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', IndexController::class);
    });
});
