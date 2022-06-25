<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\CneeController;
use App\Http\Controllers\ShipperController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->usertype=='Admin'){
            return app(AdminController::class)->index();
        }
        else if(Auth::user()->usertype=='Account'){
            return app(AccountController::class)->index();
        }
        else if(Auth::user()->usertype=='Operator'){
            return app(OperatorController::class)->index();
        }
        else if(Auth::user()->usertype=='Cnee'){
            return app(CneeController::class)->index();
        }
        else{
            return app(ShipperController::class)->index();
        }
    }
}
