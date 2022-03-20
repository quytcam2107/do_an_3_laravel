<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Common\LoginController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\BookRoomController;
use App\Http\Controllers\Admin\CheckoutController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
//    Route::get('login', [LoginController::class, 'showFormLogin'])->name('admin.login.showForm');
//    Route::post('login', [LoginController::class, 'login']);
    Route::get('logout', [LoginController::class, 'logout']);
    Route::middleware(['checkUser'])->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.home');

        //Route Staff
        Route::group(['prefix' => 'staff'], function () {
            Route::get('/', [StaffController::class, 'showStaff'])->name('admin.staff.index');
        });
        Route::group(['prefix' => 'bookroom'], function () {
            Route::get('/', [BookRoomController::class, 'bookRoom'])->name('admin.bookroom.index');
            Route::get('/getBookRoomById/{id}', [BookRoomController::class, 'getFormBookRoom'])->name('admin.room.bookbyid');
            Route::get('/addRoomPass/', [BookRoomController::class, 'getFormBookRoom']);
            Route::post('/addRoomPass/', [BookRoomController::class, 'addRoomPass']);
        });
        Route::group(['prefix' => 'room'], function () {
            Route::get('/', [RoomController::class, 'showRoom'])->name('admin.room.index');
            Route::get('/insertRoom', [RoomController::class, 'insertRoom'])->name('admin.room.insert');
            Route::get('/getRoomById/{id}', [RoomController::class, 'getRoomById']);
        });
        Route::group(['prefix' => 'customer'], function () {
            Route::get('/', [CustomerController::class, 'showCustomer'])->name('admin.customer_showcustomer');
            Route::get('/fetch-all', [CustomerController::class, 'fetchAll'])->name('admin_customer_fetchall');
            Route::post('/store', [CustomerController::class, 'storeCustomer'])->name('admin_store_customer');
            Route::get('/getCustomer/{id}', [CustomerController::class, 'getRoomById']);
        });
        Route::group(['prefix' => 'checkout'], function () {
            Route::get('/', [CheckoutController::class, 'checkOut'])->name('admin.checkout');
            Route::get('/getCustomer/{id}', [CheckoutController::class, 'getRoomById']);
        });
    });
});

