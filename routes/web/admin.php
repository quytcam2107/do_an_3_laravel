<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BillController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Common\LoginController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\BookRoomController;
use App\Http\Controllers\Admin\CheckoutController;
use App\Http\Controllers\Common\TestController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('test', [TestController::class, 'test']);
//    Route::get('login', [LoginController::class, 'showFormLogin'])->name('admin.login.showForm');
//    Route::post('login', [LoginController::class, 'login']);
    Route::get('logout', [LoginController::class, 'logout']);
    Route::middleware(['checkUser'])->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.home');

        //Route Staff
        Route::group(['prefix' => 'staff'], function () {
            Route::get('/', [StaffController::class, 'showStaff'])->name('admin.staff.index');
            Route::post('/', [StaffController::class, 'updateStatusStaff'])->name('admin.staff.updatestatus');
        });
        Route::group(['prefix' => 'bookroom'], function () {
            Route::get('/', [BookRoomController::class, 'bookRoom'])->name('admin.bookroom.index');
            Route::get('/getBookRoomById/{id}', [BookRoomController::class, 'getFormBookRoom'])->name('admin.room.bookbyid');
            Route::get('/addRoomPass', [BookRoomController::class, 'getFormBookRoom']);
            Route::post('/addRoomPass', [BookRoomController::class, 'addRoomPass']);
            Route::get('/viewconfirm/{id}', [BookRoomController::class, 'viewConfirm'])->name('admin.bookroom.viewconfirm');
            Route::post('/inforoomusing', [BookRoomController::class, 'inforRoomUsring'])->name('admin.bookroom.infoRoomUsing');
            Route::post('/insertservice', [BookRoomController::class, 'inserService'])->name('admin.bookroom.inserservice');
            Route::post('/confirm', [BookRoomController::class, 'conFirmBookRoom'])->name('admin.bookroom.confirm');
            Route::get('/getBillById/{id}', [BillController::class, 'getBillById'])->name('admin.bill.getBillById');
            Route::get('/test', [BookRoomController::class, 'deleteSoft']);
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
        Route::group(['prefix' => 'bill'], function () {
            Route::get('/', [BillController::class, 'getBill'])->name('admin.bill.getBill')->name('admin.bill.index');
            Route::get('/getBillById/{id}', [BillController::class, 'getBillById']);
            Route::post('confirmPayment',[BillController::class,'confirmPayment'])->name('admin.bill.confirm');
            Route::post('/create', [BillController::class, 'createBill'])->name('admin.bill.createBill');
            Route::post('/getQuantityService', [BillController::class, 'getQuantitySerice'])->name('admin.bill.getQuantitySerice');
        });
    });
});

//test
Route::get('/test', [BillController::class, 'testReQuest'])->name('test');

