<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Cnee
{
    public function handle($request, Closure $next){
        if (Auth::user() &&  Auth::user()->usertype=='Cnee') {
            return $next($request);
        }
        return redirect('/login');
    }
}
