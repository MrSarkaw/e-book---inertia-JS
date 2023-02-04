<?php

use App\Http\Controllers\Admin\UserController;
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


Route::prefix('admin')->group(function(){
    Route::resource('user', UserController::class);
});

