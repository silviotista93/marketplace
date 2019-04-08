<?php

namespace App\Http\Middleware;

use Closure;

class Permisos
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  Array $roles
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        foreach($roles as $rol){
            if (\Auth::user()->roles()->get()->contains($rol)){
                return $next($request);
            }
        }
        return redirect()->route("login");
    }
}
