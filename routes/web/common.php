<?php
use App\Http\Controllers\Common\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);
Route::post('/store',[UserController::class, 'themKhachHang']);
Route::get('/admin', [LoginController::class, 'showFormLogin'])->name('admin.login.showForm');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
