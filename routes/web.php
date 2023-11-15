<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\CarousellController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\LandingPageController;

Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/online-support', 'storeOnlineSupport');
});

Route::middleware(['guest'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login-store', 'loginStore');
    });
});

route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::post('/dashboard/logout', 'logout');
    });
    Route::controller(MessagesController::class)->group(function () {
        Route::get('/dashboard/messages/all-messages', 'allMessages')->name('all-messages');
        Route::get('/dashboard/messages/process-messages', 'processMessages')->name('process-messages');
        Route::get('/dashboard/messages/fixed-messages', 'fixedMessages')->name('fixed-messages');
        Route::get('/dashboard/messages/{message:id}/show', 'show');
        Route::post('/dashboard/messages/{message:id}/process', 'process');
        Route::post('/dashboard/messages/{message:id}/fix', 'fix');
    });
    Route::resource('/dashboard/carousell', CarousellController::class);
    Route::resource('/dashboard/information', InformationController::class);
});