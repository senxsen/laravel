<?php

namespace App\Http\Middleware;

use Closure;
use UserAuth;

class UserAuthMiddleware
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
        if (UserAuth::guest()) {
            return redirect('/');
        }
        return $next($request);
    }
}
