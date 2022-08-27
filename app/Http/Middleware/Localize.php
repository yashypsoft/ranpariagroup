<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
use App;

class Localize
{
    public function handle(Request $request, Closure $next)
    {
        if (Session::get('locale')) {
            App::setLocale(Session::get('locale'));
        }
        return $next($request);
    }
}
