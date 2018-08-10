<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectIfStaffAuthenticated
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
        $auth = Auth::guard('staff');
        if ($auth->check()) {
            return redirect()->route('staff');
        }
        return $next($request);
    }
}
