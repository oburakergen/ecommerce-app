<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agency\HomeController;
use App\Http\Controllers\Agency\AboutController;
use App\Http\Controllers\Agency\SiteSettingController;
use App\Http\Controllers\Agency\ServiceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',HomeController::class)->name('home');
Route::get('/about',AboutController::class)->name('about');
Route::get('/service',ServiceController::class)->name('service');
Route::get('/product',ServiceController::class)->name('product');
Route::get('/blog',ServiceController::class)->name('blog');
Route::get('/contact',ServiceController::class)->name('contact');


Route::prefix('setting')->group(function () {
    Route::post('/language', [SiteSettingController::class,'language']);
    Route::get('/list', [SiteSettingController::class,'getSettings']);
});





//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');
//
require __DIR__.'/auth.php';
