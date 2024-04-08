<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialLoginController;

Route::get('login', [LoginController::class, 'loginCreate']);
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('auth/{provider}/redirect', [SocialLoginController::class , 'redirect'])->name('auth.socialite.redirect');
Route::get('auth/{provider}/callback', [SocialLoginController::class , 'callback'])->name('auth.socialite.callback');

Route::middleware("auth")->group(function () {
    Route::get('/', function () {
        return 'welcome ';
    })->name('home');
});


