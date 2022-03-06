<?php
use App\Http\Controllers\Common\LoginController;

Route::get('/', [LoginController::class, 'showFormLogin'])->name('admin.login.showForm');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
