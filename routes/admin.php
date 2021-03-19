<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SizeController;
use App\Http\Controllers\Backend\ColorController;


#Size Route
Route::name('size.')->prefix('size')->group(function(){
    Route::get('get-all-sizes',[SizeController::class,'getAllSize'])->name('get');
    Route::get('index',[SizeController::class,'index'])->name('index');
    Route::post('store',[SizeController::class,'store'])->name('store');
    Route::delete('destroy',[SizeController::class,'destroy'])->name('destroy');
    Route::get('edit',[SizeController::class,'edit'])->name('edit');
    Route::put('update',[SizeController::class,'update'])->name('update');
});


#Color Route
Route::name('color.')->prefix('color')->group(function () {
    Route::get('get-all-colors', [ColorController::class, 'getAllColors'])->name('get');
    Route::get('index', [ColorController::class, 'index'])->name('index');
    Route::post('store', [ColorController::class, 'store'])->name('store');
    Route::delete('destroy', [ColorController::class, 'destroy'])->name('destroy');
    Route::get('edit', [ColorController::class, 'edit'])->name('edit');
    Route::put('update', [ColorController::class, 'update'])->name('update');
});





