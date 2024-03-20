<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class UserPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd(auth()->user()->role);
        if (auth()->user()->role=='admin') {
            return $next($request);
        }
        return back();
    }
}
