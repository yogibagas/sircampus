<?php

namespace App\Http\Middleware;

use Closure;

class AuthStaff
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
        
        $auth = \Auth::guard('staff');
        if (!$auth->check()) {
            return redirect()->route('/');
        }
        return $next($request);
    }
}
