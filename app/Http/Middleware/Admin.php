<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle($request, Closure $next){
        if (Auth::user() &&  Auth::user()->usertype=='Admin') {
            return $next($request);
        }
        return redirect('/login');
    }
}