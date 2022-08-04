<?php
    //Libraries
        use Illuminate\Support\Facades\Route;
        use App\Http\Controllers\HomeController;
        use App\Http\Controllers\AdminController;
        use App\Http\Controllers\LoginController;


    //Auth routes
        Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [LoginController::class, 'login']);
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    //Home routes
        Route::get('/', [HomeController::class, 'home']);
        Route::get('/map', [HomeController::class, 'map']);
        Route::post('/update/ref', [HomeController::class, 'update_ref'])->name('update_ref');
        Route::get('/settings', [HomeController::class, 'settings']);

    //Admin routes
        //users
        Route::get('/users', [AdminController::class, 'users']);
        Route::get('/user/permission', [AdminController::class, 'permission']);
        Route::post('/add/user', [AdminController::class, 'add_user'])->name('user');
        Route::post('/update/user/permission', [AdminController::class, 'update_user_permission'])->name('permission');
        //order
        Route::get('/add/ref', [AdminController::class, 'ref']);
        Route::post('/add/ref', [AdminController::class, 'add_ref'])->name('ref');
        Route::get('/add/cntr', [AdminController::class, 'cntr']);
        Route::post('/add/cntr', [AdminController::class, 'add_cntr'])->name('cntr');
        Route::get('/add/vehicle', [AdminController::class, 'vehicle']);
        Route::post('/add/vehicle', [AdminController::class, 'add_vehicle'])->name('vehicle');
        Route::get('/history', [AdminController::class, 'history']);