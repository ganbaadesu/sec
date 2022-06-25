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
            return redirect(url('/admin'));
        }
        else if(Auth::user()->usertype=='Account'){
            return redirect(url('/account'));
        }
        else if(Auth::user()->usertype=='Operator'){
            return redirect(url('/operator'));
        }
        else if(Auth::user()->usertype=='Cnee'){
            return redirect(url('/cnee'));
        }
        else{
            return redirect(url('/shipper'));
        }
    }
}
