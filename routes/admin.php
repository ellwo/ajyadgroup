<?php

use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\DashBoradController;
use App\Http\Controllers\PassportInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::post('/uploade',[\App\Http\Controllers\Admin\UploadeController::class,'store'])->name('uploade');

    Route::resource('/services',ServiceController::class)->name('index','services');
    Route::resource('/companies',CompanyController::class)->name('index','companies');
    Route::resource('/addresses',AddressController::class)->name('index','addresses');
    Route::resource('/passportinfos',PassportInfoController::class)->name('index','passportinfos');
    Route::post('/pass.createex',[PassportInfoController::class,'createx'])->name('pass.createex');


});

Route::get('/dashboard',[DashBoradController::class,'index'] )->middleware(['auth', 'verified'])->name('dashboard');

