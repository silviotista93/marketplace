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
        if (Auth::user()){
            $roles = Auth::user()->roles()->get();
            if ($roles->contains(\App\Role::ROOT)){
                return redirect()->route("dashboard.admin");
            }
        }

        return $next($request);
    }
}
