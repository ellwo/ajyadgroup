<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PassportInfoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicePriceController;
use App\Models\Service;
use App\Models\ServicePrice;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('pass.search', [PassportInfoController::class,'search'])->name('pass.search');
Route::get('/pass.search.get', [PassportInfoController::class,'search'])->name('pass.search.get');
Route::view('/من-نحن','pages.about-us')->name('about-us');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('service',ServiceController::class)->name('index','service');
Route::get('/address',[AddressController::class,'index'])->name('address');
Route::get('/address/{id}',[AddressController::class,'show'])->name('address.show');
Route::resource('/post',PostController::class)->name('index','post');
Route::resource('/service_price',ServicePriceController::class)->name('index','service_price');

Route::get('/site-map',function ()
{
$sitemap= Sitemap::create()
->add(Url::create('/home?key=مجموعة-اجياد') )
->add(Url::create('/about-us?key=من-نحن') )
->add(Url::create('/address?key=عنوانينا') )
->add(Url::create('/pass.search.get?key=الاستعلام-عن-حالة-جواز') )
->add(Url::create('/contact?key=تواصل-معنا') );

$services=Service::all()->each(function($ser)use($sitemap){
    $sitemap->add(Url::create("/service/{$ser->id}"));
  });
  $services=ServicePrice::all()->each(function($ser)use($sitemap){
    $sitemap->add(Url::create("/service_price/$ser->id"));
  });


    $sitemap->writeToFile(public_path('sitemap.xml'));
    # code...
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
