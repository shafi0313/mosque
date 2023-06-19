<?php

use App\Http\Controllers\Global\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(ProfileController::class)->prefix('profile')->group(function () {
    Route::get('/', 'index')->name('profile.index');
    Route::get('/edit', 'edit')->name('profile.edit');
});

