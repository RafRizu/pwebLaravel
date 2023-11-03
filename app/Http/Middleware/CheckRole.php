<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
public function handle($request, Closure $next, ...$roles)
{
    if (! $request->user() || ! $request->user()->hasAnyRole($roles)) {
        return redirect(RouteServiceProvider::HOME)->withError('Akses tidak diberikan!');
    }

    return $next($request);
}
}
