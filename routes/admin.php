<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Admin\BlankController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\DonateController;
use App\Http\Controllers\Admin\JoinUsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SponsorController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CommitteeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventDawahController;
use App\Http\Controllers\Admin\PastMemberController;
use App\Http\Controllers\Admin\EventStatusController;
use App\Http\Controllers\Admin\SliderStatusController;
use App\Http\Controllers\Setting\AppDbBackupController;
use App\Http\Controllers\Admin\CommitteeStatusController;
use App\Http\Controllers\Admin\ParticipantInfoController;
use App\Http\Controllers\Admin\PresidentAddressController;
use App\Http\Controllers\Setting\Permission\RoleController;
use App\Http\Controllers\Setting\Permission\PermissionController;

Route::resource('blank', BlankController::class)->except(['store','edit', 'update','delete']);

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Global Ajax
Route::delete('delete-all/{model}', [AjaxController::class, 'deleteAll'])->name('delete_all');
Route::delete('force-delete-all/{model}', [AjaxController::class, 'forceDeleteAll'])->name('force_delete_all');
Route::get('select-2-ajax/{model}', [AjaxController::class, 'select2'])->name('select2');

// Role & Permission
Route::post('role/permission/{role}', [RoleController::class, 'assignPermission'])->name('role.permission');
Route::resource('role', RoleController::class);
Route::resource('permission', PermissionController::class);

// App DB Backup
Route::controller(AppDbBackupController::class)->prefix('app-db-backup')->group(function(){
    Route::get('/password', 'password')->name('backup.password');
    Route::post('/checkPassword', 'checkPassword')->name('backup.checkPassword');
    Route::get('/confirm', 'index')->name('backup.index');
    Route::post('/backup-file', 'backupFiles')->name('backup.files');
    Route::post('/backup-db', 'backupDb')->name('backup.db');
    Route::post('/backup-download/{name}/{ext}', 'downloadBackup')->name('backup.download');
    Route::post('/backup-delete/{name}/{ext}', 'deleteBackup')->name('backup.delete');
});

// Setting
Route::resource('/setting', SettingController::class)->only(['index','store']);

Route::resource('/admin-user', AdminUserController::class,[
    'parameters' => [
        'admin-user' => 'admin_user'
    ]
]);

Route::resource('/slider', SliderController::class)->except(['create','show']);
Route::patch('/slider/status/{id}', SliderStatusController::class)->name('slider.status');

Route::resource('/president-address', PresidentAddressController::class, [
    'parameters' => [
        'president-address' => 'president_address'
    ]
])->only(['index','store']);
Route::resource('/committee-member', CommitteeController::class, [
    'parameters' => [
        'committee-member' => 'committee_member'
    ]
])->except(['create','show']);
Route::patch('/committee/status/{Committee}', CommitteeStatusController::class)->name('committee.status');
Route::resource('/history', HistoryController::class)->only(['index','store']);
Route::resource('/past-member', PastMemberController::class, [
    'parameters' => [
        'past-member' => 'past_member'
    ]
])->only(['index']);

Route::resource('/event', EventController::class)->except(['create','show']);
Route::patch('/event/status/{event}', EventStatusController::class)->name('event.status');
Route::resource('/dawah-stalls', EventDawahController::class)->only(['index','store']);

Route::resource('/participant-info', ParticipantInfoController::class)->only(['index','store']);
Route::resource('/donate', DonateController::class)->only(['index','store']);

Route::resource('/join-us', JoinUsController::class) ->only(['index','store']);
Route::resource('/sponsor', SponsorController::class) ->only(['index','store']);
Route::resource('/contact', ContactController::class) ->only(['index','destroy']);