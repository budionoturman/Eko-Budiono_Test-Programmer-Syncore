<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//auth
Route::get('login', [UserController::class, 'login'])->middleware('guest')->name('login');
Route::post('login', [UserController::class, 'authenticate']);
Route::post('logout',[UserController::class, 'logout']);
Route::get('/register', [UserController::class, 'register'])->middleware('guest');
Route::post('/register', [UserController::class, 'store']);

//dashboard
Route::middleware('auth')->group(function() {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('home', [HomeController::class, 'index']);

    Route::resource('dashboard/member', MemberController::class);

    Route::resource('dashboard/biodata', BiodataController::class);
});