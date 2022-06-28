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
    Route::get('/update/user/permission', [AdminController::class, 'update_user_permission']);
    Route::post('/update/user/permission', [AdminController::class, 'post_user_permission']);
    Route::get('/add/ref', [AdminController::class, 'add_ref']);
    Route::post('/add/ref', [AdminController::class, 'post_ref']);
<<<<<<< HEAD
    Route::post('/update/ref', [AdminController::class, '']);
=======
    Route::get('/update/ref', [AdminController::class, 'update_ref']);
    Route::post('/update/ref', [AdminController::class, 'post_updated_ref']);
    
>>>>>>> f0ee57e4f5f1352734b468be2d7605207855943e

//Operator

//Cnee

//Shipper
