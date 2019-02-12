<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }
        else if (Auth::check() && Auth::user()->role == 'admin') {
            return redirect('/admin');
        }
        elseif (Auth::check() && Auth::user()->role == 'agent') {
            return redirect('/agent');
        }
       

        return $next($request);
    }
}
