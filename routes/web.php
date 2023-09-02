<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\PassportInfoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('pass.search', [PassportInfoController::class,'search'])->name('pass.search');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/service/{id}',[ServiceController::class,'show'])->name('service.show');
Route::get('/address',[AddressController::class,'index'])->name('address');
Route::get('/address/{id}',[AddressController::class,'show'])->name('address.show');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
