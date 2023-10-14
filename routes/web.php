<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::controller(AdminController::class)
        ->group(function () {
            Route::get('/dashboard', 'dashboard')->name('dashboard');
        });
    Route::controller(OrderController::class)
        ->prefix('orders')
        ->as('orders.')
        ->group(function () {
            Route::get('/{order_type}', 'index')->name('index');
        });
    Route::controller(ProductController::class)
        ->prefix('products')
        ->as('products.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
        });
});
