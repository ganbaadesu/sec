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