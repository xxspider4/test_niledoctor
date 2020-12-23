<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Admin\ClinicController;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;






Route::group(['prefix' => 'admin','as'=>'admin.'], function () {
    Route::get('/login', [AdminAuthController::class, 'create'])
    ->middleware('guest')
    ->name('login');
Route::get('/dashboard', [AdminController::class, 'index'])
    ->name('home');

Route::post('/login', [AdminAuthController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [AdminAuthController::class, 'destroy'])
    ->middleware('auth:admin')
    ->name('logout');
});



Route::group(['prefix' => 'admin/clinics','as'=>'clinics.'], function () {
    route::get('/', [ClinicController::class, 'index']);
    route::get('/create', [ClinicController::class, 'create'])->name('create clinic');
    route::post('/create', [ClinicController::class, 'store'])->name('store clinic');
    route::get('/{Clinic}', [ClinicController::class, 'show'])->name('show clinic');
    route::post('/{Clinic}', [ClinicController::class, 'delete'])->name('delete clinic');
});
