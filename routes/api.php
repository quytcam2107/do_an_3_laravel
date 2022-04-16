<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiBillController;
use App\Http\Controllers\Api\ApiDashController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/chart', [ApiDashController::class, 'chart'])->name('api.getBillApi');
Route::get('/dash', [ApiDashController::class, 'getTotalMoney'])->name('api.getDash');
Route::get('/hoadon', [ApiBillController::class, 'getApiBill'])->name('api.getBillApi');

Route::get('/hoadon/{id}', [ApiBillController::class, 'getApiBillById'])->name('api.getBillByIdApi');
