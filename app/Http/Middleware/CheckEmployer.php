<?php

namespace App\Http\Middleware;

use Closure;

class CheckEmployer
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
        if (!Auth::check() || Auth::user()->role->name !== config('controller.employer')) {
            abort(403);
        }

        return $next($request);
    }
}
