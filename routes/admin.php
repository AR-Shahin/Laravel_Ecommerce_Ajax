<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SizeController;


#Size Route
Route::name('size.')->prefix('size')->group(function(){
    Route::get('get-all-sizes',[SizeController::class,'getAllSize'])->name('get');
    Route::get('index',[SizeController::class,'index'])->name('index');
    Route::post('store',[SizeController::class,'store'])->name('store');
    Route::delete('destroy',[SizeController::class,'destroy'])->name('destroy');
    Route::get('edit',[SizeController::class,'edit'])->name('edit');
    Route::put('update',[SizeController::class,'update'])->name('update');
});

