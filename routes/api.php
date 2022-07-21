<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('check_data', [ApiController::class, 'check_data']);
Route::get('logs', [ApiController::class, 'history']);