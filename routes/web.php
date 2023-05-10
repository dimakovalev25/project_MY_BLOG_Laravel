<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', IndexController::class)->name('blog.index');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {

    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', IndexController::class)->name('admin.index');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', IndexController::class)->name('admin.category.index');
        Route::get('/create', CreateController::class)->name('admin.category.create');
        Route::post('/', StoreController::class)->name('admin.category.store');
        Route::get('/{category}', ShowController::class)->name('admin.category.show');
        Route::get('/{category}/edit', EditController::class)->name('admin.category.edit');
        Route::patch('/{category}', UpdateController::class)->name('admin.category.update');
        Route::delete('/{category}', DeleteController::class)->name('admin.category.delete');
    });

    Route::group(['namespace' => 'Tag', 'prefix' => 'tag'], function () {
       Route::get('/', IndexController::class)->name('admin.tag.index');
       Route::get('/create', CreateController::class)->name('admin.tag.create');
       Route::post('/', StoreController::class)->name('admin.tag.store');
       Route::get('/{tag}', ShowController::class)->name('admin.tag.show');
       Route::get('/{tag}/edit', EditController::class)-> name('admin.tag.edit');
       Route::patch('/{tag}', UpdateController::class)->name('admin.tag.update');
       Route::delete('/{tag}', DeleteController::class)->name('admin.tag.delete');



    });

});


Auth::routes();
