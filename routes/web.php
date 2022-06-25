<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CneeController;
use App\Http\Controllers\ShipperController;

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/operator', [OperatorController::class, 'index']);
Route::get('/account', [AccountController::class, 'index']);
Route::get('/cnee', [CneeController::class, 'index']);
Route::get('/shipper', [ShipperController::class, 'index']);