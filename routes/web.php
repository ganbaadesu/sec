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


//Admin

    Route::get('/add/user', [AdminController::class, 'add_user']);
    Route::post('/add/user', [AdminController::class, 'post_user']);
    Route::get('/update/user', [AdminController::class, 'update_user']);
    Route::post('/update/user', [AdminController::class, 'post_updated_user']);
    Route::get('/add/ref', [AdminController::class, 'add_ref']);
    Route::post('/add/ref', [AdminController::class, 'post_ref']);
    Route::get('/update/ref', [AdminController::class, 'update_ref']);
    Route::post('/update/ref', [AdminController::class, 'post_updated_ref']);
    

//Operator

//Cnee

//Shipper
