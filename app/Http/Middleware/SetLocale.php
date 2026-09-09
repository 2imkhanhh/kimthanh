<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->segment(1) === 'en') {
            app()->setLocale('en');
        } else {
            app()->setLocale('vi');
        }
        
        return $next($request);
    }
}
