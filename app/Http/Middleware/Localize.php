<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Localize
{
    public function handle(Request $request, Closure $next)
    {
        // app()->setLocale($request->getPreferredLanguage(config('app.languages')));
        return $next($request);
    }
}
