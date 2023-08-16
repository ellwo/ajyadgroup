<?php

use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::resource('/services',ServiceController::class)->name('index','services');


});
