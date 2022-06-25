<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Operator
{
    public function handle($request, Closure $next){
        if (Auth::user() &&  Auth::user()->usertype=='Operator') {
            return $next($request);
        }
        return redirect('/login');
    }
}
