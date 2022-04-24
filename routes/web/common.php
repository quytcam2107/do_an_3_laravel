<?php
use App\Http\Controllers\Common\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('web.home');
Route::get('/room/{id}', [UserController::class, 'viewRoom']);
Route::post('/booking', [UserController::class, 'booking']);
Route::post('/bookings', [UserController::class, 'bookings'])->name('web.bookings');
Route::post('/store',[UserController::class, 'themKhachHang']);
Route::get('/login', [LoginController::class, 'showFormLogin'])->name('admin.login.showForm');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
