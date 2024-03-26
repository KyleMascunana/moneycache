<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\DetailReportController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\TemplateOneController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function(){

    Route::get('/', [IndexController::class, 'index'])->name('index');

    Route::resource('/customers', CustomerController::class);

    Route::resource('/details', DetailController::class);
    Route::get('/details/{detail}', [DetailController::class, 'edit'])->name('details.edit');
    Route::put('/details/{detail}', [DetailController::class, 'update'])->name('details.update');

    Route::resource('/report', ReportController::class);
    Route::resource('/detailreport', DetailReportController::class);

    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');

    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');

    Route::resource('/users', UserController::class);
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');

    Route::resource('/templateone', TemplateOneController::class);

    Route::resource('/package', PackageController::class);
    Route::get('/admin/package/{package}', [PackageController::class, 'edit'])->name('package.edit');
    Route::put('/admin/package/{package}', [PackageController::class, 'update'])->name('package.update');

});


Route::middleware(['auth', 'role:user'])->name('user.')->prefix('user')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
