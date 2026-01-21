<?php

use App\Http\Controllers\Admin\BarberController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.home');
});


Route::name('admin.')->middleware('auth')->group(function () {
    Route::get("/dashboard", [HomeController::class, 'index'])->name("home");

    Route::resource('/booking', BookingController::class);

    Route::resource('/services', ServiceController::class);

    Route::resource('/users', UserController::class);

    Route::resource('/barbers', BarberController::class);
});

require __DIR__ . '/auth.php';
