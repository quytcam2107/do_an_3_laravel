<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Common\LoginController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'showFormLogin'])->name('admin.login.showForm');
    Route::post('login', [LoginController::class, 'login']);
    Route::get('logout', [LoginController::class, 'logout']);
        Route::middleware(['checkUser'])->group(function () {
            Route::get('/', [AdminController::class, 'index'])->name('admin.home');

            //Route Staff
                Route::group(['prefix' => 'staff'], function () {
                        Route::get('/',[StaffController::class,'showStaff'])->name('admin.staff.index');
                });
        });
});

