<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Account
{
    public function handle($request, Closure $next){
        if (Auth::user() &&  Auth::user()->usertype=='Account') {
            return $next($request);
        }
        return redirect('/login');
    }
}
