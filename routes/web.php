<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});


Route::get('/about', function () {
    return Inertia::render('About');
});


Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login');

Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::resource('user', UserController::class)->names('admin.users');
});

