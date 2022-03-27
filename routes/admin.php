<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\ContactSettingController;

Route::get('/',HomeController::class)->name('admin.dashboard');
Route::prefix('/setting')->group(function () {
    Route::resource('/general',GeneralSettingController::class);
    Route::resource('/contact',ContactSettingController::class);
});


