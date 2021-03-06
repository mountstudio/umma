<?php

namespace App\Http\Middleware;

use Closure;

class LanguageSwitcherMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
            \App::setLocale(session('applocale') ?? 'ru');

            return $next($request);

    }
}
