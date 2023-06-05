<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StaffMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
     public function handle(Request $request, Closure $next)
    {
        if (Auth::check()){
            if(Auth::user()->role != 'admin' && Auth::user()->role != 'staff'){
                return redirect ('/mangkas-home');
            }
        }else{
            return redirect ('/register');
        }
        return $next($request);
    }
}
