<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ClientLogoController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SolutionController;
use App\Http\Controllers\Admin\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('client-logos', ClientLogoController::class);
    Route::resource('solutions', SolutionController::class);
    Route::resource('articles', ArticleController::class);

    Route::get('settings', [SettingController::class, 'edit'])->name('settings.edit');
    Route::put('settings', [SettingController::class, 'update'])->name('settings.update');
});
