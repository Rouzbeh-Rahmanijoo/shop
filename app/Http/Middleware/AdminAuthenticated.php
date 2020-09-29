<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthenticated
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
        if ($request->user()->isSuperUser() || $request->user()->isStaffUser()) {
            return $next($request);
        }

        // if ($request->user()->phone() == '09120621755') {
        //     return $next($request);
        // }
        //return $request->user()->phone();

        return redirect('/');
    }
}
