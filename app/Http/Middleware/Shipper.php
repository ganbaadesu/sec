<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Shipper
{
    public function handle($request, Closure $next){
        if (Auth::user() &&  Auth::user()->usertype=='Shipper') {
            return $next($request);
        }
        return redirect('/login');
    }
}
