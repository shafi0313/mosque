<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\PrayerController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/prayer', [PrayerController::class, 'index'])->name('prayer.index');
Route::get('/committee-member', [CommitteeController::class, 'committeeMember'])->name('committee.index');

Route::controller(AboutController::class)->prefix('about')->name('about.')->group(function(){
    Route::get('/president-address', [AboutController::class, 'presidentAddress'])->name('presidentAddress');
    Route::get('/committee-member', [AboutController::class, 'committeeMember'])->name('committeeMember');
    Route::get('/history', [AboutController::class, 'history'])->name('history');
    Route::get('/past-member', [AboutController::class, 'pastMember'])->name('pastMember');
});