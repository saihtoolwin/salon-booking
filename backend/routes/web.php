<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::name('admin.')->middleware('auth')->group(function () {
    Route::get("/dashboard",[HomeController::class,'index'])->name("home");
});

require __DIR__.'/auth.php';
