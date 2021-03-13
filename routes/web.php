<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;


Route::get('test', function () {
    return view('backend.test');
});


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/dash', [DashboardController::class,'index'])->name('dashboard');

