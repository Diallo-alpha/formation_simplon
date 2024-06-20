<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next,?string $role = null)
    {
        if ($role!== null &&!Auth::user()->hasRole($role)) {
            return redirect()->route('login')->with('vous n\'avez pas le droit pour acceder a cet page');
        }

        return $next($request);
    }
}
